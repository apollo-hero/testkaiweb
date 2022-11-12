
<?php

	include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
	use Medoo\Medoo;
	include "./config.php";
	include "./functions.php";

	$SUCCESS = 1;
	$ERROR = -1;
	$Count = 0;

	if(isset($_SESSION['USER_ID'])) {
		
		$temp = $con->query('SET search_path TO accounts;')->fetchAll();
		$con_usr_ban = $con->select("accounts","Authority",["Id" => $_SESSION['USER_ID']]);//('SELECT "Authority" FROM accounts WHERE "Id" = ?');

		$STTUS = $con_usr_ban;
		$SUCCESS = $STTUS;
		
		$temp = $con->query('SET search_path TO web;')->fetchAll();
	}

	if ( $SUCCESS < 0 ) {

		session_destroy();
		echo "<script>alert('YOUR ACCOUNT HAS BEEN DISABLED :(');window.location='./index';</script>";
	}

	else {

		$from = htmlentities($_GET['from']);

		if ($from == 'Register') {

			if(!empty($_POST)){

				if( isset($_POST["InputUsername"]) 	&&
					isset($_POST["InputEmail"]) 	&& 
					isset($_POST["InputPassword"]) 	&&
					isset($_POST["InputConfirmPassword"])){

					if( $_POST["InputUsername"] !=""&&
						$_POST["InputEmail"] 	!=""&& 
						$_POST["InputPassword"] !=""&& 
						$_POST["InputPassword"] == $_POST["InputConfirmPassword"]){

						$found = false;
						$temp = $con->query('SET search_path TO accounts;');
						$SQL_USER_CHECK = $con->count("accounts",["OR" => ["Name" => htmlentities($_POST['InputUsername']), "Email" => htmlentities($_POST['InputEmail'])]]);//('SELECT COUNT(*) FROM ' . USER . ' WHERE ' . USER_NICK . ' = ? OR ' . USER_EMAIL . ' = ?');

						if($SQL_USER_CHECK > 0){
							$_SESSION["register_status"] = "failed";
							echo "<script>window.location='./index';</script>";
						}
						else {

							$USER_PASS = hash('sha512', $_POST["InputPassword"]);
							$SQL_USER_REGISTER = $con->insert("accounts",[
							"Name" => htmlentities($_POST['InputUsername']),
							"Email" => htmlentities($_POST['InputEmail']),
							"Password" => $USER_PASS,
							"Authority" => ROLE_USER,
							"MasterAccountId" => "00000000-0000-0000-0000-000000000000",
							"BankMoney" => 0,
							"Language" => 0,
							"IsPrimaryAccount" => false,
							"Coins" => 0,
							"CreatedAt" => Medoo::raw('CURRENT_TIMESTAMP'),
							"RegistrationIP" => $_SERVER['REMOTE_ADDR']]);

							

							if ($SQL_USER_REGISTER->rowCount() > 0){
								$_SESSION["register_status"] = "success";
								echo "<script>window.location='./index';</script>";
							}
							else{
								$_SESSION["register_status"] = "error";
								echo "<script>window.location='./index';</script>";
							}
								
						}
					}
				}
			}
		}

		elseif ($from == 'Login') {


				if(isset($_POST["InputUsername"]) && isset($_POST["InputPassword"])){
					

					if($_POST["InputUsername"] != "" &&	$_POST["InputPassword"] != ""){

						$USER_ID 	= NULL;
						$USER_PASS 	= hash('sha512', $_POST["InputPassword"]);
						
						$temp = $con->query('SET search_path TO accounts;')->fetchAll();
						$SQL_LOGIN_CHECK = $con->select("accounts","*",["Name" => htmlentities($_POST['InputUsername']), "Password" => $USER_PASS]);//('SELECT * FROM accounts WHERE "Name" = ? AND "Password" = ?');

						foreach($SQL_LOGIN_CHECK as $RSLT  ){ 

							$USER_ID		= $RSLT[USER_ID];
							$USER_NICK 		= $RSLT[USER_NICK];
							$USER_EMAIL 	= $RSLT[USER_EMAIL];
							$USER_RANGE		= $RSLT[USER_RANGE];
							$USER_REG_DATE 	= $RSLT['CreatedAt'];

							break;
						}

						if($USER_ID == NULL)
							echo json_encode(["success"=>false,"message"=>"Username or password incorrect"]);
							
							// echo "<script>alert('Username or password incorrect');window.location='./index';</script>";

						else{

							if ($USER_RANGE < 0){

								if($USER_RANGE == ROLE_UNCONFIRMED)
									$MSG = 'ACCOUNT UNCONFIRMED';
								elseif($USER_RANGE == ROLE_BANNED) 
									$MSG = 'ACCOUNT BANNED';
								elseif($USER_RANGE == ROLE_CLOSED)
									$MSG = 'ACCOUNT CLOSED';

								echo json_encode(["success"=>false,"message"=>$MSG]);
							}
							else {

								$_SESSION["USER_ID"]		= $USER_ID;
								$_SESSION["USER_NICK"]		= $USER_NICK;
								$_SESSION["USER_EMAIL"]		= $USER_EMAIL;
								$_SESSION["USER_RANGE"]		= $USER_RANGE;
								$_SESSION["USER_REG_DATE"]	= $USER_REG_DATE;

								ActLog('Login');
								echo json_encode(["success"=>true,"message"=>""]);
							}
						}
					}
				}
				
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();

		}

		elseif ($from == 'Logout') {

			ActLog('Logout');
			session_destroy();
			echo "<script>window.location='./index';</script>";
		}

		elseif ($from == 'Settings') {

			if(!empty($_POST)) {
				
				if(	isset($_POST['InputEmail'])){
					//$avatar_source = '/assets/img/avatar.jpg';
					if( $_POST['InputEmailActualPassword'] ){
						$ID = $_SESSION['USER_ID'];
						$ERROR = "0";
						$USER_PASS 	= hash('sha512', $_POST["InputEmailActualPassword"]);
						$con->query('SET search_path TO accounts;');
						$SQL_PSSW_CHECK = $con->count("accounts",["Id" => $ID,"Password" => $USER_PASS]);//('SELECT COUNT(*) FROM ' . USER . ' WHERE ' . USER_PSWD . ' = ? AND ' . USER_ID . ' = ?');

						if($SQL_PSSW_CHECK > 0){
							$idk = $con->update("accounts",
								//"Avatar"=>$avatar_source,
								["Email"=>$_POST['InputEmail']],["Id" => $ID]);
							ActLog('Info uptated');
							
						}
						else
							$ERROR ="You cannot Change the Email!";
					
					}
					else{
						$ERROR ="Required Password";
					}
				}
				 
				if(isset($_POST['InputActualPassword']) && isset($_POST['InputNewPassword'])) {
				
					$ID = $_SESSION['USER_ID'];
					$ERROR = "0";
					if( $_POST['InputActualPassword'] ){
						if ($_POST['InputNewPassword'] == $_POST['InputNewPasswordAgain']) {

							$USER_PASS 	= hash('sha512', $_POST["InputActualPassword"]);
							$con->query('SET search_path TO accounts;');
							$SQL_PSSW_CHECK = $con->count("accounts",["Id" => $ID,"Password" => $USER_PASS]);//('SELECT COUNT(*) FROM ' . USER . ' WHERE ' . USER_PSWD . ' = ? AND ' . USER_ID . ' = ?');

							if($SQL_PSSW_CHECK > 0){
								$idk = $con->update("accounts",
									//"Avatar"=>$avatar_source,
									["Password" => hash('sha512', $_POST["InputNewPassword"])],["Id" => $ID]);
								ActLog('Info uptated');
							
							}
							else
								$ERROR ="You cannot Change the Password!";
						}
						else
							$ERROR = "The new password does not match";
					}
				}
				if(!isset($_POST['InputEmail']) && !isset($_POST['InputActualPassword'])){
					$ERROR ="whoops! Check your information again!";
				}
			}
				
			else{
				$ERROR ="Your information is not saved!";
			}
			if ($ERROR != "0") {
				echo json_encode(["success"=>false,"message"=>$ERROR]);
				return;
			}
			else{
				echo json_encode(["success"=>true,"message"=>$ERROR]);
				return;
			}
			return;
		}

		/*elseif ($from == 'Accesibility' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

			if ($_GET['target'] == 'SendCoins') {

				if(!empty($_POST)){

					if($_GET['type'] == 'single') {

						if(isset($_POST["InputSendCoinUsername"]) && isset($_POST["InputSendCoinQuantity"])){

							if($_POST["InputSendCoinUsername"] != "" && $_POST["InputSendCoinQuantity"] != ""){

								if($_POST["InputSendCoinQuantity"] > 0){
									$temp = $con->query('SET search_path TO accounts;');
									$SQL_USER_BALANCE = $con->select("accounts","Coins",["Id" => $_SESSION['USER_ID']]);//('SELECT "Coins" FROM ' . USER . ' WHERE Id = ?');
									
									$BALANCE = $SQL_USER_BALANCE;
									
									if ($BALANCE[0] >= $_POST['InputSendCoinQuantity']) {
										
										$temp = $con->query('SET search_path TO characters;');
										$SQL_ADDRESSEE_CHECK= $con->count("characters",["Name" => htmlentities($_POST['InputSendCoinUsername'])]);//('SELECT COUNT(*) FROM ' . CHAR . ' WHERE "Name" = ?');

										if($SQL_ADDRESSEE_CHECK > 0){
											
											$SQL_ADDRESSEE_ID = $con->select("characters","Id",["Name" => htmlentities($_POST['InputSendCoinUsername'])]);//('SELECT ' . CHAR_USR_ID . ' FROM ' . CHAR . ' WHERE "Name" = ?');
											$ADDRESSEE_ID = $SQL_ADDRESSEE_ID[0];
											
											$SQL_UPDT_USERS_DEDUCT = $con->update("accounts",["Coins" => "Coins" - htmlentities($_POST['InputSendCoinQuantity'])],["Id" => $_SESSION['USER_ID']]);//('UPDATE ' . USER . ' SET ' . USER_BALANCE . ' = ' . USER_BALANCE . ' - ? WHERE "Id" = ?');

											$SQL_UPDT_USERS_ACCESIBILITY = $con->prepare('UPDATE ' . USER . ' SET ' . USER_BALANCE . ' = ' . USER_BALANCE . ' + ? WHERE "Id" = ?');
											$UPDT = htmlentities($_POST['InputSendCoinQuantity']);
											$ID   = $ADDRESSEE_ID[0];

											$SUCCESS_MSG = "Coins sent to user: " . htmlentities($_POST['InputSendCoinUsername']); 
											$ERROR = "0";
										}
										else $ERROR = "The user does not exist or is incorrect";
									}
									else $ERROR = "Insufficient funds";
								}
								else $ERROR = "Invalid amount";
							}
							else $ERROR = "Please don't leave any fields empty";
						}
						else $ERROR = "Variable 'POST' non declared";
					}

				}
				else $ERROR = "Error in sending information";
			}

			if ($ERROR == "0"){
				if ($SQL_UPDT_USERS_ACCESIBILITY->execute([$UPDT, $ID]) > 0){
					ActLog($SUCCESS_MSG . ": " . $_POST['InputSendCoinQuantity']);
					print "<script>alert('" . $SUCCESS_MSG . "');window.location='./home';</script>";
				}
			}
			else
				print "<script>alert('" . $ERROR . "');window.location='./home';</script>";
		}*/

		elseif ($from == 'SelectCategories' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {


			if($_POST['CTG'] > 0){

				$SQL_S_CTG = $con->select("secondcategoriesshop","*",["secondcategoriesid" => htmlentities($_POST['CTG'])]);//('SELECT * FROM ' . S_CATEGORY . ' WHERE ' . S_CATEGORY_ID_F 	. ' = ?');

				if(isset($_GET['opt']))
					$OPT = $_GET['opt'];
				else
					$OPT = 0;

				$SELECT = "<option value='0'>-- Uncategorized --</option>";

				foreach($SQL_S_CTG as $S_CTG){

					if($OPT == $S_CTG[S_CATEGORY_ID])
						$SELECTED = 'selected';
					else
						$SELECTED = '';

					$SELECT = $SELECT . "<option value='" . $S_CTG[S_CATEGORY_ID] . "' " . $SELECTED . ">" . $S_CTG[S_CATEGORY_NAME] . "</option>";
				}
			}
			else
				$SELECT = "<option value='0'>-- Uncategorized --</option>";

			echo $SELECT;
		} 
		elseif ($from == 'store') {

			$TARGET = htmlentities($_GET['target']);
			
			if ($TARGET == 'AddNewCategory'  && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$TAB = 'index?to=admin&&card=store';

				if (!empty($_POST['InputCategoryTitle'] && $_POST['InputCategoryTitle'] != "")) {

					$SQL_UPDT_STORE = $con->insert("categoriesshop",["name" => htmlentities($_POST['InputCategoryTitle']),"visibility" =>  htmlentities($_POST['VisibilityCheck'])]);//'INSERT INTO ' . CATEGORY . ' (' . CATEGORY_NAME . ', ' . CATEGORY_VISIBILITY . ') VALUES (?, ?)');

					$ERROR = "0";
					$SUCCESS_MSG = "Category added";
				}
				else
					$ERROR = "You must fill all the fields";
			}

			elseif ($TARGET == 'EditCategory' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$SQL_UPDT_STORE = $con->update("categoriesshop",[
				"name" => htmlentities($_POST['InputEditCategoryTitle']),
				"visibility" => htmlentities($_POST['VisibilityCheck'])],
				["categoriesid" => htmlentities($_GET['id'])]);
				
				$SQL_VISIBILITY = $con->update("shopitems", [
				"visibility" => htmlentities($_POST['VisibilityCheck'])],
				["categoriesid" => htmlentities($_GET['id'])]);

				$ERROR = "0";
				$SUCCESS_MSG = "Category updated";
				$TAB = 'index?to=admin&&card=store';
			}

			elseif ($TARGET == 'RemoveCategory' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$ID 					= htmlentities($_POST['InputItemCategory']);
				$ERROR 					= "0";
				$SUCCESS_MSG 			= "Category removed";
				$TAB 					= 'index?to=admin&&card=store';
				$SQL_DLT_S_CTG 			= $con->prepare('DELETE FROM ' 	. S_CATEGORY . ' WHERE ' . S_CATEGORY_ID_F . ' = ?');
				$SQL_DLT_ITEM 			= $con->prepare('DELETE FROM ' 	. STORE_ITEMS . ' WHERE ' . STORE_ITEMS_CATEGORY . ' = ?');
				$SQL_REMOVE_ITEM_CART 	= $con->prepare('DELETE FROM ' 	. CART . ' WHERE ' . CART_PRODUCT_ID . ' = ?');
				$SQL_FILE 				= $con->prepare('SELECT * FROM '. STORE_ITEMS . ' WHERE ' . STORE_ITEMS_CATEGORY . ' = ?'); 
				$SQL_UPDT_STORE 		= $con->prepare('DELETE FROM ' 	. CATEGORY . ' WHERE ' . CATEGORY_ID . ' = ?');
				$UPDT 					= [$ID];
				$SQL_FILE->execute([$ID]);

				while($ITEM = $SQL_FILE->fetch()){ unlink("." . $ITEM[STORE_ITEMS_IMAGE]); }

				$SQL_REMOVE_ITEM_CART->execute([$ITEM[STORE_ITEMS_ID]]);
				$SQL_DLT_S_CTG->execute([$ID]);
				$SQL_DLT_ITEM->execute([$ID]);
			}

			elseif ($TARGET == 'AddNewSecondCategory'  && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$TAB = 'index?to=admin&&card=store';

				if (!empty($_POST['InputSecondCategoryTitle'] && $_POST['InputSecondCategoryTitle'] != "")) {

					$SQL_UPDT_STORE = $con->insert("secondcategoriesshop",
					["name" => htmlentities($_POST['InputSecondCategoryTitle']),
					 "categoriesid" => htmlentities($_GET['id'])]);

					$ERROR = "0";
					$SUCCESS_MSG = "Second category added";
				}
				else
					$ERROR = "You must fill all the fields";
			}

			elseif ($TARGET == 'EditSecondCategory' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$ERROR 				= "0";
				$SUCCESS_MSG 		= "Sub category updated";
				$TAB 				= 'index?to=admin&&card=store';
				$SQL_UPDT_HEAD_CTG	= $con->prepare('UPDATE ' . STORE_ITEMS . ' SET '

					. STORE_ITEMS_CATEGORY . ' = ? WHERE ' . STORE_ITEMS_CATEGORY_2 . ' = ?');

				$SQL_UPDT_HEAD_CTG->execute([htmlentities($_POST['SelectHeadSubCategory']), htmlentities($_GET['id'])]);

				$SQL_UPDT_STORE = $con->prepare('UPDATE ' . S_CATEGORY . ' SET 

					' . S_CATEGORY_NAME . ' = ?,
					' . S_CATEGORY_ID_F . ' = ?

					WHERE ' . S_CATEGORY_ID . ' = ?');

				$UPDT = [

					htmlentities($_POST['InputEditCategoryTitle']),
					htmlentities($_POST['SelectHeadSubCategory']),
					htmlentities($_GET['id'])
				];
			}

			elseif ($TARGET == 'DeleteSecondCategory' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$ERROR = "0";
				$SUCCESS_MSG= "Sub category removed";
				$TAB 		= "index?to=admin&&card=store";
				$SQL_UPDT_HEAD_CTG	= $con->prepare('UPDATE ' . STORE_ITEMS . ' SET '

					. STORE_ITEMS_CATEGORY_2 . ' = ? WHERE ' . STORE_ITEMS_CATEGORY_2 . ' = ? AND ' . STORE_ITEMS_CATEGORY . ' = ?');

				$SQL_UPDT_HEAD_CTG->execute([0, htmlentities($_GET['id']), htmlentities($_GET['head'])]);

				$SQL_UPDT_STORE = $con->prepare('DELETE FROM ' . S_CATEGORY . ' WHERE ' . S_CATEGORY_ID . ' = ?');
				$UPDT = [htmlentities($_GET['id'])];
			}

			elseif ($TARGET == 'AddCoinSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$SQL_UPDT_STORE = $con->prepare('INSERT INTO ' . STORE_COINS . ' (

					"Price",
					"Coins",
					"Description",
					"store_coin_ranking"

					) VALUES (?, ?, ?, ?)');

				$UPDT = [

					htmlentities($_POST['InputCoinsPrice']),
					htmlentities($_POST['InputCoinsAmount']),
					htmlentities($_POST['TextareaCoinsDescription']),
					htmlentities($_POST['InputCoinsRank'])

				];

				$ERROR = "0";
				$SUCCESS_MSG= "Slot coin added";
				$TAB 		= "index?to=admin&&card=coins";
			}

			elseif ($TARGET == 'EditCoinSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {
				
				$ID = htmlentities($_GET['id']);

				$SQL_UPDT_STORE = $con->update("coinsweb", [
				"Price" => htmlentities($_POST['InputCoinsPrice']),
				"Coins" => htmlentities($_POST['InputCoinsAmount']),
				"Description" => htmlentities($_POST['TextareaCoinsDescription']),
				"store_coin_ranking" => htmlentities($_POST['InputCoinsRank'])],
				["CoinsId" => $ID]);
				$ERROR = "0";
				$SUCCESS_MSG= "Slot coins updated";
				$TAB 		= "index?to=admin&&card=coins";
			}

			elseif ($TARGET == 'DeleteCoinSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$SQL_UPDT_STORE = $con->prepare('DELETE FROM ' . STORE_COINS . ' WHERE ' . STORE_COINS_ID . ' = ?');
				$UPDT = [htmlentities($_GET['id'])];

				$ERROR = "0";
				$SUCCESS_MSG= "Slot coin deleted";
				$TAB 		= "index?to=admin&&card=coins";
			}

			elseif ($TARGET == 'AddItemSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				if (($_FILES["InputUploadedPic"]["type"] == "image/jpeg") || ($_FILES["InputUploadedPic"]["type"] == "image/png")) {

					$FILE_NAME =

						mt_rand(000000001, 999999999) .
						mt_rand(000000001, 999999999) .
						mt_rand(000000001, 999999999) .
						mt_rand(000000001, 999999999) . ".jpg";

					$TRG_PATH = "." . $site['assets']['images'] . "/store/items/" . $FILE_NAME;
					move_uploaded_file($_FILES['InputUploadedPic']['tmp_name'], $TRG_PATH);

					$SQL_VISIBILITY = $con->prepare('SELECT ' . CATEGORY_VISIBILITY . ' FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' = ?');
					$SQL_VISIBILITY->execute([htmlentities($_POST['SelectItemCategory'])]);
					$VISIBILITY = $SQL_VISIBILITY->fetch();

					$SQL_UPDT_STORE = $con->prepare('INSERT INTO ' . STORE_ITEMS . ' (

						' . STORE_ITEMS_DESCRIPTION . ',
						' . STORE_ITEMS_RANKING . ',
						' . STORE_ITEMS_PRICE . ',
						' . STORE_ITEMS_IMAGE . ',
						' . STORE_ITEMS_CATEGORY . ',
						' . STORE_ITEMS_VNUM . ',
						' . STORE_ITEMS_AMOUNT . ',
						' . STORE_ITEMS_UPGRADE . ',
						' . STORE_ITEMS_RARE . ',
						' . STORE_ITEMS_PURCHASE_N . ',
						' . STORE_ITEMS_CATEGORY_2 . ',
						' . STORE_ITEMS_AMOUNT_CHOOSE . ',
						' . STORE_ITEMS_TYPE . ',
						' . STORE_ITEMS_ROULETTE . ',
						' . STORE_ITEMS_JACKPOT . ',
						' . STORE_ITEMS_VISIBILITY . '

						) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

					if($_POST['RouletteCheck'] == 1){

						$WHEEL 	= 1;
						$PRICE 	= 10000;
						$CTG 	= $site['roulette_category'];
						$S_CTG 	= 0;
						$JACK 	= htmlentities($_POST['JackpotCheck']);
					}

					else {

						$WHEEL 	= 0;
						$PRICE 	= htmlentities($_POST['InputItemPrice']);
						$CTG 	= htmlentities($_POST['SelectItemCategory']);
						$S_CTG 	= htmlentities($_POST['SelectItemSecondCategoriesId']);
						$JACK 	= 0;
					}

					$UPDT = [

						htmlentities($_POST['TextareaItemDescription']),
						htmlentities($_POST['InputItemRank']),
						$PRICE,
						$site['assets']['images'] . "/store/items/" . $FILE_NAME,
						$CTG,
						htmlentities($_POST['InputItemVNum']),
						htmlentities($_POST['InputItemAmount']),
						htmlentities($_POST['InputItemUpgrade']),
						htmlentities($_POST['InputItemRare']),
						0,
						$S_CTG,
						htmlentities($_POST['InputItemChooseAmount']),
						htmlentities($_POST['InputItemType']),
						$WHEEL,
						$JACK,
						$VISIBILITY[0]
					];

					$ERROR = "0";
					$SUCCESS_MSG= "Slot item added";
					$TAB = 'index?to=admin&&card=store';

				}else{print "<script>alert('FILE FORMAT NOT ALLOWED');window.location='./store?$TAB';</script>";}
			}

			elseif ($TARGET == 'EditItemSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {
					
				$SUCCESS_MSG= "Slot item updated";
				$ID  = htmlentities($_GET['id']);
				$TAB = 'index?to=admin&&card=store';

				$SQL_ROULETTE_CHECK = $con->prepare('SELECT ' . STORE_ITEMS_ROULETTE . ' FROM ' . STORE_ITEMS . ' WHERE ' . STORE_ITEMS_ID . ' = ?');
				$SQL_ROULETTE_CHECK->execute([$ID]);
				$ROULETTE_CHECK = $SQL_ROULETTE_CHECK->fetch();

				if($ROULETTE_CHECK[0] == 1){

					$CTG 	= $site['roulette_category'];
					$S_CTG 	= 0;
					$JACK 	= htmlentities($_POST['JackpotCheck']);
					$PRICE 	= 10000;
				}
				else{

					$CTG 	= htmlentities($_POST['SelectItemCategory']);
					$S_CTG 	= htmlentities($_POST['SelectItemSecondCategoriesId']);
					$PRICE 	= htmlentities($_POST['InputItemPrice']);
					$JACK 	= 0;
				}

				$SQL_VISIBILITY = $con->prepare('SELECT ' . CATEGORY_VISIBILITY . ' FROM ' . CATEGORY . ' WHERE ' . CATEGORY_ID . ' = ?');
				$SQL_VISIBILITY->execute([$CTG]);
				$VISIBILITY = $SQL_VISIBILITY->fetch();	

				$SQL_UPDT_STORE = $con->prepare('UPDATE ' . STORE_ITEMS . ' SET

					' . STORE_ITEMS_DESCRIPTION . '		= ?,
					' . STORE_ITEMS_RANKING . '			= ?,
					' . STORE_ITEMS_PRICE. '			= ?,
					' . STORE_ITEMS_CATEGORY . '		= ?,
					' . STORE_ITEMS_VNUM . ' 			= ?,
					' . STORE_ITEMS_AMOUNT . ' 			= ?,
					' . STORE_ITEMS_UPGRADE . ' 		= ?,
					' . STORE_ITEMS_RARE . ' 			= ?,
					' . STORE_ITEMS_CATEGORY_2 . ' 		= ?,
					' . STORE_ITEMS_AMOUNT_CHOOSE . ' 	= ?,
					' . STORE_ITEMS_TYPE . ' 			= ?,
					' . STORE_ITEMS_JACKPOT . '			= ?,
					' . STORE_ITEMS_VISIBILITY . '		= ?

					WHERE ' . STORE_ITEMS_ID . ' 		= ?');

				$UPDT = [

					htmlentities($_POST['TextareaItemDescription']),
					htmlentities($_POST['InputItemRank']),
					$PRICE,
					$CTG,
					htmlentities($_POST['InputItemVNum']),
					htmlentities($_POST['InputItemAmount']),
					htmlentities($_POST['InputItemUpgrade']),
					htmlentities($_POST['InputItemRare']),
					$S_CTG,
					htmlentities($_POST['InputItemChooseAmount']),
					htmlentities($_POST['InputItemType']),
					$JACK,
					$VISIBILITY[0],
					$ID
				];

				if (empty($_FILES['InputUploadedPic']['tmp_name']))
					
					$ERROR = "0";

				else {

					if (($_FILES["InputUploadedPic"]["type"] == "image/jpeg") || ($_FILES["InputUploadedPic"]["type"] == "image/png") || 1 == 1) {
						
						$SQL_FILE = $con->prepare("SELECT " . STORE_ITEMS_IMAGE . " FROM " . STORE_ITEMS . " WHERE " . STORE_ITEMS_ID . " = ?"); 
						$SQL_FILE->execute([$ID]);
						$FILE = $SQL_FILE->fetch();
						$TRG_PATH = "." . $FILE[0];

						move_uploaded_file($_FILES['InputUploadedPic']['tmp_name'], $TRG_PATH);

						$ERROR = "0";
					}

					else {

						$ERROR = "FILE FORMAT NOT ALLOWED";
					}
				}
			}

			elseif ($TARGET == 'DeleteItemSlot' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$ID  = htmlentities($_GET['id']);
				$TAB = 'index?to=admin&&card=store';

				$SQL_FILE = $con->prepare('SELECT ' . STORE_ITEMS_IMAGE . ' FROM ' . STORE_ITEMS . ' WHERE ' . STORE_ITEMS_ID . ' = ?'); 
				$SQL_FILE->execute([$ID]);
				$FILE = $SQL_FILE->fetch();
				$TRG_PATH = "." . $FILE[0];

				if(unlink($TRG_PATH)){ 

					$SQL_REMOVE_ITEM_CART = $con->prepare('DELETE FROM ' . CART . ' WHERE ' . CART_PRODUCT_ID . ' = ?');
					$SQL_REMOVE_ITEM_CART->execute([htmlentities($_GET['id'])]);

					$SQL_UPDT_STORE = $con->prepare('DELETE FROM ' . STORE_ITEMS . ' WHERE ' . STORE_ITEMS_ID . ' = ?');
					$UPDT = [$ID];

					$ERROR = 0;
					$SUCCESS_MSG = "Slot item deleted";
				}

				else $ERROR = "Error trying to remove image from server";
			}

			elseif ($TARGET == 'AddToCart') {
 				$TAB = "store";
				if($_POST['InputItemQuantity'] > 0 && $_POST['InputItemQuantity'] < 100){
					$SQL_ITEM_CHECK = $con->count("cart",["productid" => htmlentities($_POST['InputItemID']), "accountid" => $_SESSION['USER_ID']]);

					$SQL_ACUM_CHECK = $con->select("shopitems","*",["productid" => htmlentities($_POST['InputItemID'])]);
					$newItem = false;
					foreach( $SQL_ACUM_CHECK as $ITEM ){ 

						if($ITEM['type'] == 1){ $ACUM = 1; $newItem = true;} else { $ACUM = $_POST['InputItemQuantity']; }

						$VNUM = $ITEM['vnum'];
						$PRICE= $ITEM['price'];
						$IMAGE= $ITEM['image'];
						$AMONT= $PRICE * $ACUM;
						$AMOUNT = $ITEM['amount'];

						break;
					}

					if($SQL_ITEM_CHECK > 0 && !$newItem) {

						$SQL_UPDT_STORE = $con->update("cart",
						["item_quantity[+]" => $ACUM],
						["productid" => htmlentities($_POST['InputItemID']),
							"accountid" => $_SESSION['USER_ID']]);
					}

					else {

						$SQL_UPDT_STORE = $con->insert("cart",
						["productid" => htmlentities($_POST['InputItemID']),
							"item_quantity" => $ACUM,
							"accountid" => htmlentities($_SESSION['USER_ID']),
							"vnum" => $VNUM,
							"price" => $PRICE,
							"image" => $IMAGE,
							"amount" => $AMOUNT * $ACUM,
							"totalprice" => $AMONT]);
					}
					$CONSULT = 1;
					$ERROR 		= "0";
					$SUCCESS_MSG= "";
				}

				else {
					$ERROR = "Invalid quantity!";
					PenaltyLog($_SESSION['USER_ID'], 'Try to change amount of items!');
					ActLog('Try to change amount of items!');
				}
				 
			}

			elseif ($TARGET == 'EditCart') {
				
				$TAB = "cart";

				if($_POST['InputQty'] > 0 && $_POST['InputQty'] < 100){

					$SUCCESS_MSG= "Quantity updated";
					$ID  		= $_GET['id'];

					$SQL_UPDT_STORE = $con->update("cart",["item_quantity" => htmlentities($_POST['InputQty'])],["cartid" => $ID]);
					$CONSULT = 1;
				}
				else{
					$ERROR = "Invalid quantity";
					PenaltyLog($_SESSION['USER_ID'], 'Invalid Quantity!');
					ActLog('Invalid Quantity!');
				}
			}

			elseif ($TARGET == 'RemoveItemCart') {

				$ERROR 		= "0";
				$SUCCESS_MSG= "Item removed";
				$TAB 		= "cart";

				$SQL_UPDT_STORE = $con->delete("cart",["cartid" => $_POST['InputRemoveItemCart'], "accountid" => $_SESSION['USER_ID']]);
			}

			elseif ($TARGET == 'Checkout') {
				if($_POST["SelectCharacter"] < 1){
					$arr = array('success'=>false,'message'=>'You need to select a Characte');
					echo json_encode($arr);
					return;
				}
				$temp = $con->query('SET search_path TO web;')->fetchAll();
				$SQL_CART = $con->select("cart","*",["accountid" => $_SESSION['USER_ID']]);
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();
				$SQL_FOUNDS_CHECK = $con->select("accounts","Coins",["Id" => $_SESSION['USER_ID']]);
				$CharId = htmlentities($_POST["SelectCharacter"]);
				
				$temp = $con->query('SET search_path TO characters;')->fetchAll();
				$charCount = $con->count("characters",["Id" => $CharId]);
				
				$temp = $con->query('SET search_path TO web;')->fetchAll();
				if($charCount < 1){
					$arr = array(['success'=>false,'message'=>'You need to create character']);
					echo json_encode($arr);
					return;
				}
				$RSLT = $SQL_FOUNDS_CHECK;

				$TOTAL = 0;
				$TOTAL_ITEM = 0;
				$temp = $con->query('SET search_path TO web;')->fetchAll();
                foreach( $SQL_CART as $CART ){ 

					$SQL_ITEM = $con->select("shopitems","*",["productid" => $CART['productid']]);

                  	foreach($SQL_ITEM as $ITEM ){ $TOTAL_ITEM = $ITEM['price'] * $CART['item_quantity'];}

                  	$TOTAL += $TOTAL_ITEM;
                }
				
				$temp = $con->query('SET search_path TO web;')->fetchAll();
                if($TOTAL == $_POST['inputTotal']){

					if ( $RSLT[0] >= $TOTAL ) {
						
						$SQL_CONSULT_ITEM_CART = $con->select("cart","*",["accountid" => $_SESSION['USER_ID']]);
						
						$temp = $con->query('SET search_path TO accounts;')->fetchAll();

						$SQL_UPDT_STORE		   = $con->update("accounts",["Coins[-]" => $TOTAL],["Id" => $_SESSION['USER_ID']]);
						$temp = $con->query('SET search_path TO web;')->fetchAll();
						foreach($SQL_CONSULT_ITEM_CART as $DATA) {

							if(empty($DATA["productid"]) || empty($DATA)) { $ERROR = "This product does not exist!"; $TAB = "store"; }

							else {

								$TAB 		= "cart";
								$ERROR 		= "0";
								$SUCCESS_MSG= "Thanks for your purchase! Please Relog Ingame to receive your Items";
								SendItem($DATA['vnum'], $DATA['item_quantity'], $CharId);
								
								$temp = $con->query('SET search_path TO web;')->fetchAll();
								$SQL_NEW_PURCHASE	   = $con->update("shopitems",["number_p[+]" => 1],["productid" => $DATA["productid"]]);
							}
						}
						$CONSULT = 1;
						$SQL_REMOVE_ITEM_CART  = $con->delete("cart","*",["accountid" => $_SESSION['USER_ID']]);
					}

					else {
						
						$ERROR = "Insufficient funds ";
						$TAB   = "coins";
					}
				} 
				else {
					$ERROR = "Hack attempt at checkout, user banned ";
					PenaltyLog($_SESSION['USER_ID'], 'Hack attempt at checkout, user banned');
					ActLog('Hack attempt at checkout, user banned');
				} 
			}

			if ($ERROR == "0") {
				$Count = $SQL_UPDT_STORE->rowCount();
				if ($Count > 0){
					ActLog($SUCCESS_MSG);
					if(strlen($SUCCESS_MSG) > 1){
						$arr = array(['success'=>true,'message'=>$SUCCESS_MSG]);
						echo json_encode($arr);
						return;
						
					}
					else{
						//print"<script>window.location='./" . $TAB . "';</script>";
					}
				}
				else
				$arr = array(['success'=>false,'message'=>'Error on sql result']);
				echo json_encode($arr);
				return;
			}
			else{
				$arr = array(['success'=>false,'message'=>$ERROR]);
					echo json_encode($arr);
					return;
			}
		}

		elseif ($from == 'admin' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

			$ID = 1;
			$TARGET = htmlentities($_GET['target']);

			if ($TARGET == 'update'){

				$ref = htmlentities($_GET['ref']);

				if ($ref == 'site') {

					if(htmlentities($_GET['ext']) == 'check') {

						$SQL_UPDT_SITE = $con->update("control",["site_status" => htmlentities($_POST['SiteStatus'])],["id" => $ID]);//('UPDATE ' . CONTROL . ' SET site_status = ? WHERE ID = ?');

						if ($site['status'] == 'WORKING')
							$SUCCESS_MSG= "MAINTEINANCE MODE ACTIVATED";
						else
							$SUCCESS_MSG= "MAINTEINANCE MODE DISABLED";
						$site['status'] = htmlentities($_POST['SiteStatus']);
						$ERROR = "0";
						$CONSULT = 1;
						$TAB 		= "&&tab=1";
						$CARD 		= "general";
					}

					if(htmlentities($_GET['ext']) == 'mail') {

						$SQL_UPDT_SITE = $con->update("control",["site_mail_status" => htmlentities($_POST['MailStatus'])],["id" => $ID]);

						if ($site['mail']['status'] == 0)
							$SUCCESS_MSG= "Send mail activated";
						else
							$SUCCESS_MSG= "Send mail disabled";
						
						$ERROR 	= "0";
						$TAB 	= "&&tab=1";
						$CARD 	= "general";
					}

					elseif (htmlentities($_GET['ext']) == 'form') {

						$ERROR = "0";

						$SQL_UPDT_SITE = $con->update("control",[
						"site_name" => htmlentities($_POST['InputSiteName']),
						"site_domain" => htmlentities($_POST['InputSiteDomain']),
						"site_email" => htmlentities($_POST['InputSiteEmail']),
						"site_server_ip" => htmlentities($_POST['InputServerIP']),
						"site_timezone" => htmlentities($_POST['SelectSiteTimeZone']),
						"site_format_time" => htmlentities($_POST['InputSiteTimeFormat']),
						"site_format_date" => htmlentities($_POST['InputSiteDateFormat']),
						"site_captcha" => htmlentities($_POST['InputSiteReCaptcha']),
						"site_captcha_secret" => htmlentities($_POST['InputSiteReCaptchaSecret'])],["id" => $ID]);

						if (!empty($_FILES['InputFavicon']['tmp_name'])) {

							if (($_FILES["InputFavicon"]["type"] == "image/ico" )||
								($_FILES["InputFavicon"]["type"] == "image/jpeg")||
								($_FILES["InputFavicon"]["type"] == "image/png" )){

								move_uploaded_file($_FILES['InputFavicon']['tmp_name'], "." . $site['favicon']['path']);
							}
							else $ERROR = "FILE FORMAT NOT ALLOWED FOR FAVICON";
						}

						if (!empty($_FILES['InputLogo']['tmp_name'])) {

							if (($_FILES["InputLogo"]["type"] == "image/jpeg")||
								($_FILES["InputLogo"]["type"] == "image/png" )){

								move_uploaded_file($_FILES['InputLogo']['tmp_name'], "." . $site['logo']['path']);
							}
							else $ERROR = "FILE FORMAT NOT ALLOWED FOR LOGO";
						}

						if (!empty($_FILES['InputLogo']['tmp_name'])) {

							if (($_FILES["InputBackground"]["type"] == "image/jpeg")||
								($_FILES["InputBackground"]["type"] == "image/png" )){

								move_uploaded_file($_FILES['InputBackground']['tmp_name'], "." . $site['background']['path']);
							}
							else $ERROR = "FILE FORMAT NOT ALLOWED FOR LOGO";
						}
					}

					if ($ERROR == "0") { $CONSULT = 1; } 
					else { $CONSULT = 0; }

					$SUCCESS_MSG= "Site settings updated!";
					$TAB 		= "&&tab=1";
					$CARD 		= "general";
				}

				elseif ($ref == 'downloads'){

					if(htmlentities($_GET['ext']) == 'check') {

						$SQL_UPDT_SITE = $con->update("control",[
						"site_download_status" => htmlentities($_POST['DownloadStatus'])],["id" => $ID]);
						$CONSULT = 1;

						if ($site['download']['status'] == '1')
							$SUCCESS_MSG= "DOWLOADS ACTIVATED" . $_POST['DownloadStatus'];
						else
							$SUCCESS_MSG= "DOWLOADS DISABLED" . $_POST['DownloadStatus'];

						$ERROR = "0";
						$TAB 		= "&&tab=2";
						$CARD 		= "general";
					}

					elseif (htmlentities($_GET['ext']) == 'form') {

						$SQL_UPDT_SITE = $con->update("control",
						["site_download_client" => htmlentities($_POST['InputSiteClient']),
						 "site_download_launch" => htmlentities($_POST['InputSiteLaunch'])],
						["id" => $ID]);

						$ERROR = "0";

						if ($ERROR == "0") { $CONSULT = 1; } 
						else { $CONSULT = 0; }

						$SUCCESS_MSG= "Download settings updated!";
						$TAB 		= "&&tab=2";
						$CARD 		= "general";
					}
				}

				elseif ($ref == 'social'){

					$SQL_UPDT_SITE = $con->update("control",
					["site_social_discord" => htmlentities($_POST['InputSiteDiscord']),
					 "site_social_discord_sv" => htmlentities($_POST['InputSiteDiscordSV'])],
					["id" => $ID]);

					$ERROR = "0";

					if ($ERROR == "0") { $CONSULT = 1; } 
					else { $CONSULT = 0; }

					$SUCCESS_MSG= "Social settings updated!";
					$TAB 		= "&&tab=3";
					$CARD 		= "general";
				}

				elseif ($ref == 'payments'){

					$SQL_UPDT_SITE = $con->update("control",
					["site_paypal_status" => htmlentities($_POST['PayPalStatus']),
					 "site_paypal_mode" => htmlentities($_POST['SelectPayPalMode']),
					 "site_paypal_id" => htmlentities($_POST['InputPayPalID']),
					 "site_paypal_secret" => htmlentities($_POST['InputPayPalSecret']),
					 "site_paypal_currency" => htmlentities($_POST['SelectPayPalCurrency'])],
					["id" => $ID]);

					$ERROR = "0";

					if ($ERROR == "0") { $CONSULT = 1; } 
					else { $CONSULT = 0; }

					$SUCCESS_MSG= "Payments settings updated!";
					$TAB 		= "&&tab=4";
					$CARD 		= "general";
				}

				elseif ($ref == 'style'){

					$SQL_UPDT_SITE = $con->update("control",
					["site_style_bg" => htmlentities($_POST['InputWebBgColor']),
					 "site_style_color_1" => htmlentities($_POST['InputExtraBackground1']),
					 "site_style_text_1" => htmlentities($_POST['InputExtraText1']),
					 "site_style_color_bar" => htmlentities($_POST['InputBarColor']),
					 "site_style_color_foot" => htmlentities($_POST['InputFootColor']),
					 "site_style_text_foot" => htmlentities($_POST['InputFootText']),
					 "site_style_bg_h_m" => htmlentities($_POST['InputModalHeaderColor']),
					 "site_style_text_h_m" => htmlentities($_POST['InputModalHeaderText']),
					 "site_style_bg_b_m" => htmlentities($_POST['InputModalBodyColor']),
					 "site_style_text_b_m" => htmlentities($_POST['InputModalBodyText']),
					 "site_style_btn_p" => htmlentities($_POST['SelectBtnPrimary']),
					 "site_style_btn_s" => htmlentities($_POST['SelectBtnSecondary'])],
					["id" => $ID]);

					$ERROR = "0";

					if ($ERROR == "0") { $CONSULT = 1; } 
					else { $CONSULT = 0; }

					$SUCCESS_MSG= "Style settings updated!";
					$TAB 		= "&&tab=5";
					$CARD 		= "general";
				}

				/*elseif ($ref == 'roulette') {

					$ACT = htmlentities($_GET['act']);

					$ERROR 		= "0";					
					$TAB   		= "";
					$CARD 		= "store";

					if($ACT == 'price'){

						$SQL_UPDT_SITE = $con->prepare('UPDATE ' . CONTROL . ' SET site_roulette_price = ? WHERE ID = ?');
						$CONSULT = $SQL_UPDT_SITE->execute([htmlentities($_POST['InputRoulettePrice']), $ID]);
						
						$SUCCESS_MSG= "Price updated!";
					}
					
					elseif ($ACT == 'category') {

						$SQL_UPDT_CTG = $con->prepare('UPDATE ' 

							. STORE_ITEMS . 		 ' SET ' 
							. STORE_ITEMS_CATEGORY . ' = ? WHERE ' 
							. STORE_ITEMS_ROULETTE . ' = ?
						');
						$SQL_UPDT_CTG->execute([htmlentities($_POST['SelectRouletteCategory']), 1]);						

						$SQL_UPDT_SITE = $con->prepare('UPDATE ' . CONTROL . ' SET site_roulette_category = ? WHERE ID = ?');
						$CONSULT = $SQL_UPDT_SITE->execute([htmlentities($_POST['SelectRouletteCategory']), $ID]);
						
						$SUCCESS_MSG= "Roulette category updated!";
					}
				}*/

				elseif ($ref == 'advanced') {

					$SQL_UPDT_SITE = $con->update("control",
					["site_cdn_jquery" => htmlentities($_POST['InputSiteJQueryCdn']),
					 "site_cdn_mask" => htmlentities($_POST['InputSiteJQueryMsk']),
					 "site_cdn_faw" => htmlentities($_POST['InputSiteFntAw']),
					 "site_path_js" => htmlentities($_POST['InputSitePathJS']),
					 "site_path_css" => htmlentities($_POST['InputSitePathCSS']),
					 "site_path_images" => htmlentities($_POST['InputSitePathImages']),
					 "site_path_video" => htmlentities($_POST['InputSitePathVideo'])
					],["id" => $ID]);
					$CONSULT = 1;
					$SUCCESS_MSG= "Site advanced settings updated";
					$TAB 		= "";
					$CARD 		= "advanced";
					$ERROR 		= "0";
				}
			}

			elseif ($TARGET == 'channels') {
				
				$ext 		= htmlentities($_GET['ext']);
				$TAB 		= "";
				$CARD 		= "general";
				$ERROR 		= "0";

				if ($ext == 'AddChannel') {

					$SQL_CHANNEL = $con->insert("channelsweb",["Name" => htmlentities($_POST['InputChannelName']), "Port" => htmlentities($_POST['InputChannelPort'])]);

					$SUCCESS_MSG= "Channel added";
				}

				elseif ($ext == 'EditChannel'){

					$SQL_CHANNEL = $con->update("channelsweb",
					["Name" => htmlentities($_POST['InputChannelName']),
					 "Port" => htmlentities($_POST['InputChannelPort'])],
					["ID" => htmlentities($_GET['id'])]);

					$SUCCESS_MSG= "Channel updated";
				}

				elseif ($ext == 'DeleteChannel') {

					$SQL_CHANNEL = $con->delete("channelsweb",["ID" => htmlentities($_POST['InputChannelID'])]);
					$CONSULT = 1;

					$SUCCESS_MSG= "Channel removed";
				}
			}

			elseif ($TARGET == 'store'){

				$ext 		= htmlentities($_GET['ext']);
				$TAB 		= "";
				$CARD 		= "store";

				if($ext == 'check') {

					$SQL_UPDT_SITE = $con->update("control", ["site_status_store" => htmlentities($_POST['StoreStatus'])],["id" => $ID]);
					$CONSULT = 1;
					$site['status_store'] = htmlentities($_POST['StoreStatus']);
					if ($site['status_store'] == 'WORKING')
						$SUCCESS_MSG= "MAINTEINANCE MODE ACTIVATED IN STORE";
					else
						$SUCCESS_MSG= "MAINTEINANCE MODE DISABLED IN STORE";
					
					$ERROR 		= "0";
				}

				/*elseif ($ext == 'roulette') {

					$SQL_UPDT_SITE = $con->prepare('UPDATE ' . STORE_ITEMS . ' SET ' . STORE_ITEMS_ROULETTE . ' = ? WHERE ' . STORE_ITEMS_ID . ' = ?');
					$CONSULT = $SQL_UPDT_SITE->execute([

						htmlentities($_POST['CheckItemRoulette']),
						htmlentities($_GET['id'])
					]);

					if ($_POST['CheckItemRoulette'] == 1)
						$SUCCESS_MSG= "Item added to roulette successfullly!";
					else
						$SUCCESS_MSG= "Item removed to roulette successfullly!";
					
					$ERROR 		= "0";
				}*/
			}

			elseif ($TARGET == 'coins'){

				$ext 		= htmlentities($_GET['ext']);
				$TAB 		= "";
				$CARD 		= "coins";
				$ERROR 		= "0";

				if ($ext == 'check') {

					$SQL_UPDT_SITE = $con->prepare('UPDATE ' . CONTROL . ' SET site_coin_status = ? WHERE ID = ?');
					$CONSULT = $SQL_UPDT_SITE->execute([htmlentities($_POST['StoreCoinStatus']), $ID]);

					if ($site['coin_status'] == 'WORKING')
						$SUCCESS_MSG= "MAINTEINANCE MODE ACTIVATED IN COINS STORE";
					else
						$SUCCESS_MSG= "MAINTEINANCE MODE DISABLED IN COINS STORE";
					
					$ERROR 		= "0";
				}

				elseif ($ext == 'promo') {
					
					$SQL_UPDT_SITE = $con->update("control",
					["site_coin_discount" => htmlentities($_POST['InputCoinsDiscount']),
					 "site_coin_bonus" => htmlentities($_POST['InputCoinsBonus'])]
					,["id" => $ID]);

					$SUCCESS_MSG= "Promotion settings updated";
				}
			}

			/*elseif ($TARGET == 'schedule'){

				$ext 		= htmlentities($_GET['ext']);
				$TAB 		= "";
				$CARD 		= "schedule";
				
				if($ext == 'check') {

					$SQL_UPDT_SITE = $con->prepare('UPDATE ' . CONTROL . ' SET site_schedule_status = ? WHERE ID = ?');
					$CONSULT = $SQL_UPDT_SITE->execute([htmlentities($_POST['ScheduleStatus']), $ID]);

					if ($site['schedule_status'] == 1)
						$SUCCESS_MSG= "VISIBILITY ACTIVATED IN SCHEDULE";
					else
						$SUCCESS_MSG= "VISIBILITY DISABLED IN SCHEDULE";
					
					$ERROR 		= "0";
				}

				elseif ($ext == 'AddNewPrize') {
					
					$ERROR 		= "0";
					$SUCCESS_MSG= "Schedule prize added!";

					if($_POST['InputPrizeType'] == 0){

						$SCHEDULE_QUEST = "";
						$SCHEDULE_ANS_1 = "";
						$SCHEDULE_ANS_2 = "";
						$SCHEDULE_ANS_3 = "";
						$SCHEDULE_ANS_4 = "";
						$SCHEDULE_ANS_C = "";
					}

					elseif($_POST['InputPrizeType'] == 1){

						$SCHEDULE_QUEST = htmlentities($_POST['InputPrizeQuest']);
						$SCHEDULE_ANS_1 = htmlentities($_POST['InputPrizeAns1']);
						$SCHEDULE_ANS_2 = htmlentities($_POST['InputPrizeAns2']);
						$SCHEDULE_ANS_3 = htmlentities($_POST['InputPrizeAns3']);
						$SCHEDULE_ANS_4 = htmlentities($_POST['InputPrizeAns4']);
						$SCHEDULE_ANS_C = htmlentities($_POST['SelectCorrectAns']);
					}

					elseif($_POST['InputPrizeType'] == 2){

						$SCHEDULE_QUEST = htmlentities($_POST['InputPrizeQuest']);
						$SCHEDULE_ANS_1 = htmlentities($_POST['InputPrizeAns1']);
						$SCHEDULE_ANS_2 = htmlentities($_POST['InputPrizeAns2']);
						$SCHEDULE_ANS_3 = "";
						$SCHEDULE_ANS_4 = "";
						$SCHEDULE_ANS_C = htmlentities($_POST['SelectCorrectAns']);
					}

					$SQL_UPDT_SITE = $con->prepare('INSERT INTO ' . SCHEDULE . ' (

						' . SCHEDULE_DATE . ',
						' . SCHEDULE_PRIZE. ',
						' . SCHEDULE_QUEST . ',
						' . SCHEDULE_ANS_1 . ',
						' . SCHEDULE_ANS_2 . ',
						' . SCHEDULE_ANS_3 . ',
						' . SCHEDULE_ANS_4 . ',
						' . SCHEDULE_ANS_C . ',
						' . SCHEDULE_TYPE . '

					) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

					$CONSULT = $SQL_UPDT_SITE->execute([

						htmlentities($_POST['InputPrizeDate']),
						htmlentities($_POST['InputPrizeVNum']),
						$SCHEDULE_QUEST,
						$SCHEDULE_ANS_1,
						$SCHEDULE_ANS_2,
						$SCHEDULE_ANS_3,
						$SCHEDULE_ANS_4,
						$SCHEDULE_ANS_C,
						htmlentities($_POST['InputPrizeType'])
					]);
				}

				elseif ($ext == 'EditPrize') {

					$ERROR 		= "0";
					$SUCCESS_MSG= "Schedule prize updated!";

					if($_POST['InputPrizeType'] == 0){

						$SCHEDULE_QUEST = "";
						$SCHEDULE_ANS_1 = "";
						$SCHEDULE_ANS_2 = "";
						$SCHEDULE_ANS_3 = "";
						$SCHEDULE_ANS_4 = "";
						$SCHEDULE_ANS_C = "";
					}

					elseif($_POST['InputPrizeType'] == 1){

						$SCHEDULE_QUEST = htmlentities($_POST['InputPrizeQuest']);
						$SCHEDULE_ANS_1 = htmlentities($_POST['InputPrizeAns1']);
						$SCHEDULE_ANS_2 = htmlentities($_POST['InputPrizeAns2']);
						$SCHEDULE_ANS_3 = htmlentities($_POST['InputPrizeAns3']);
						$SCHEDULE_ANS_4 = htmlentities($_POST['InputPrizeAns4']);
						$SCHEDULE_ANS_C = htmlentities($_POST['SelectCorrectAns']);
					}

					elseif($_POST['InputPrizeType'] == 2){

						$SCHEDULE_QUEST = htmlentities($_POST['InputPrizeQuest']);
						$SCHEDULE_ANS_1 = htmlentities($_POST['InputPrizeAns1']);
						$SCHEDULE_ANS_2 = htmlentities($_POST['InputPrizeAns2']);
						$SCHEDULE_ANS_3 = "";
						$SCHEDULE_ANS_4 = "";
						$SCHEDULE_ANS_C = htmlentities($_POST['SelectCorrectAns']);
					}

					$SQL_UPDT_SITE = $con->prepare('UPDATE ' . SCHEDULE . ' SET 

						' . SCHEDULE_DATE .  ' = ?,
						' . SCHEDULE_PRIZE.  ' = ?,
						' . SCHEDULE_QUEST . ' = ?,
						' . SCHEDULE_ANS_1 . ' = ?,
						' . SCHEDULE_ANS_2 . ' = ?,
						' . SCHEDULE_ANS_3 . ' = ?,
						' . SCHEDULE_ANS_4 . ' = ?,
						' . SCHEDULE_ANS_C . ' = ?,
						' . SCHEDULE_TYPE .  ' = ?

					WHERE ' . SCHEDULE_ID . ' = ?');

					$CONSULT = $SQL_UPDT_SITE->execute([

						htmlentities($_POST['InputPrizeDate']),
						htmlentities($_POST['InputPrizeVNum']),
						$SCHEDULE_QUEST,
						$SCHEDULE_ANS_1,
						$SCHEDULE_ANS_2,
						$SCHEDULE_ANS_3,
						$SCHEDULE_ANS_4,
						$SCHEDULE_ANS_C,
						htmlentities($_POST['InputPrizeType']),
						htmlentities($_GET['id'])
					]);
				}

				elseif ($ext == 'DeletePrize') {

					$ERROR 		= "0";
					$SUCCESS_MSG= "Schedule prize removed";

					$SQL_UPDT_SITE = $con->prepare('DELETE FROM ' . SCHEDULE . ' WHERE ' . SCHEDULE_ID . ' = ?');
					$CONSULT = $SQL_UPDT_SITE->execute([htmlentities($_GET['id'])]);
				}
			}*/
			
			$CONSULT = 1;
			if ($CONSULT > 0 && $ERROR == "0"){
				ActLog($SUCCESS_MSG);
				echo "<script>alert('" . $SUCCESS_MSG. "');window.location='./index?to=admin&&card=" . $CARD . $TAB . "';</script>";
			}
			else
				echo "<script>alert('" . $ERROR . "');window.location='./index?to=admin&&card=" . $CARD . $TAB . "';</script>";
		}

		elseif ($from == 'entries' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

			$DATE_FORMAT = date('F j, Y');

			if ($_GET['target'] == 'AddEntry') {

				$SQL_ENTRY = $con->insert("articles",[
				"article_title" => htmlentities($_POST['InputEntryTitle']),
				"article_body" => htmlentities($_POST['TextareaEntryBody']),
				"article_autor" => $_SESSION['USER_NICK'],
				"article_date" => $DATE_FORMAT,
				"article_pic" => htmlentities($_POST['InputEntryPic'])]);

				$SUCCESS_MSG= "Entry added";
			}

			elseif ($_GET['target'] == 'EditEntry') {

				$SQL_ENTRY = $con->update("articles",[
				"article_title" => htmlentities($_POST['InputEntryTitle']),
				"article_body" => htmlentities($_POST['TextareaEntryBody']),
				"article_pic" => htmlentities($_POST['InputEntryPic'])],[
				"id" => htmlentities($_POST['InputEntryID'])]);

				$SUCCESS_MSG= "Entry updated";
			}

			elseif ($_GET['target'] == 'DeleteEntry') {

				$SQL_ENTRY = $con->delete("articles",["id" => htmlentities($_POST['InputEntryID'])]);

				$SUCCESS_MSG= "Entry removed";
			}

			if ($SQL_ENTRY->rowCount() > 0){
				ActLog($SUCCESS_MSG);
				echo "<script>alert('" . $SUCCESS_MSG . "');window.location='index?to=admin&&card=news';</script>";
			}
			else
				echo "<script>alert('ERROR on database consult');window.location='index?to=admin&&card=news';</script>";
		}

		/*elseif ($from == 'roulette') {
			

			$SQL_CONSULT_ITEM_MALL = $con->prepare("SELECT COUNT(*) FROM " . STORE_ITEMS . " WHERE " . STORE_ITEMS_ID . " = ? AND " . STORE_ITEMS_ROULETTE . " = ?");
			$SQL_CONSULT_ITEM_MALL->execute([htmlentities($_POST['ProductId']), 1]);

			if($SQL_CONSULT_ITEM_MALL->fetchColumn() > 0){

				$SQL_CONSULT_ITEM_MALL = $con->prepare("SELECT * FROM " . STORE_ITEMS . " WHERE " . STORE_ITEMS_ID . " = ? AND " . STORE_ITEMS_ROULETTE . " = ?");
				$SQL_CONSULT_ITEM_MALL->execute([htmlentities($_POST['ProductId']), 1]);
				$DATO = $SQL_CONSULT_ITEM_MALL->fetch();

				$TNK = hash('sha512', $_SESSION['USER_ID'] 
	    			. "~" . $_SESSION['USER_NICK']
	    			. "~" . $_POST['ProductId']
	    			. "~" . $DATO[STORE_ITEMS_VNUM]
	    			. "~" . $TIME
	    			. "~" . $DATE);

				if($TKN == $_POST['TKN']){

					ActLog("Roulette spin VNUM: " . $DATO[STORE_ITEMS_VNUM] . " to CharacterId: " . htmlentities($_POST['CharacterId']));

					$SQL_FOUNDS_CHECK = $con->prepare('SELECT ' . USER_BALANCE . ' FROM ' . USER . ' WHERE ' . USER_ID . ' = ?'); 
					$SQL_FOUNDS_CHECK->execute([$_SESSION['USER_ID']]);

					$RSLT = $SQL_FOUNDS_CHECK->fetch();

					if($RSLT[0] >= $site['roulette_price']) {

						$SQL_CHARGE = $con->prepare("UPDATE " . USER . " SET " . USER_BALANCE . " = " . USER_BALANCE . " - ? WHERE Id = ?");
						$SQL_CHARGE->execute([$site['roulette_price'], $_SESSION['USER_ID']]);
						sleep(10);
						SendItem($DATO[STORE_ITEMS_VNUM], $DATO[STORE_ITEMS_AMOUNT], htmlentities($_POST['CharacterId']));
					} else $MSG = "Insufficient founds";
				} else $MSG = "Token error";
			} else $MSG = "This product does not exist!";
		}*/

		/*elseif ($from == 'games'){

			$TARGET = $_GET['target'];

			if ($TARGET == 'schedule') {
				
				$TAB = 'schedule';
       
		        $SQL_PRIZE_TODAY = $con->prepare('SELECT COUNT(*) FROM ' . SCHEDULE . ' WHERE ' . SCHEDULE_DATE . ' = ?');
          		$SQL_PRIZE_TODAY->execute([$DATE]);
          		$PRIZE_TODAY = $SQL_PRIZE_TODAY->fetch();

          		if($PRIZE_TODAY[0] > 0){

		            $SQL_PRIZE_TODAY_ID = $con->prepare('SELECT ' . SCHEDULE_ID . ' FROM ' . SCHEDULE . ' WHERE ' . SCHEDULE_DATE . ' = ?');
		            $SQL_PRIZE_TODAY_ID->execute([$DATE]);
		            $PRIZE_TODAY_ID = $SQL_PRIZE_TODAY_ID->fetch();

		            $SQL_PRIZE_REDEEM= $con->prepare('SELECT COUNT(*) FROM ' . REDEEM_TABLE . ' WHERE ' 
		              . REDEEM_PRIZE_ACCOUNT_ID . ' = ? AND '
		              . REDEEM_PRIZE_ID .         ' = ?' 
		            );
		            $SQL_PRIZE_REDEEM->execute([$_SESSION['USER_ID'], $PRIZE_TODAY_ID[0]]);
		            $PRIZE_REDEEM = $SQL_PRIZE_REDEEM->fetch();

		            if($PRIZE_REDEEM[0] == 0){

	          			$SQL_SCHEDULE = $con->prepare('SELECT * FROM ' . SCHEDULE . ' WHERE ' . SCHEDULE_DATE . ' = ?');
	          			$SQL_SCHEDULE->execute([$DATE]);
	          			$SCHEDULE = $SQL_SCHEDULE->fetch();

	          			$SQL_PRIZE_REDEEM = $con->prepare('INSERT INTO ' . REDEEM_TABLE . ' ('

	          				. REDEEM_PRIZE_ACCOUNT_ID . ', '
	          				. REDEEM_PRIZE_ID .

	          				') VALUES (?, ?)');

	          			$REDEEM = $SQL_PRIZE_REDEEM->execute([$_SESSION['USER_ID'], $SCHEDULE[SCHEDULE_ID]]);

	          			if(isset($_POST["RadioAns"]))
	          				$ANS = $_POST["RadioAns"];
	          			else
	          				$ANS = 0;

	          			if($REDEEM > 0){
							if(!empty($_POST)){
								if( $ANS != 0 || $SCHEDULE[SCHEDULE_TYPE] == 0) {
									if( $ANS !="" || $SCHEDULE[SCHEDULE_TYPE] == 0) {
					          			if($ANS == $SCHEDULE[SCHEDULE_ANS_C] || $SCHEDULE[SCHEDULE_TYPE] == 0){
					          				if(isset($_POST["SelectCharacter"])){
					          					if($_POST["SelectCharacter"] !=""){
													$SQL_CONSULT_ITEM_MALL = $con->prepare("SELECT COUNT(*) FROM " . STORE_ITEMS . " WHERE " . STORE_ITEMS_VNUM . " = ?");
													$SQL_CONSULT_ITEM_MALL->execute([$SCHEDULE[SCHEDULE_PRIZE]]);
													$CONSULT_ITEM_MALL = $SQL_CONSULT_ITEM_MALL->fetch();

													if($CONSULT_ITEM_MALL[0] > 0){

												        $SQL_CHARACTER_CHECK = $con->prepare('SELECT COUNT(*) FROM ' . CHAR . ' WHERE ' . CHAR_ID . ' = ?');
														$SQL_CHARACTER_CHECK->execute([htmlentities($_POST['SelectCharacter'])]);
														$CHARACTER_CHECK = $SQL_CHARACTER_CHECK->fetch();

														if($CHARACTER_CHECK[0] > 0){

															$SQL_CONSULT_ITEM_MALL = $con->prepare("SELECT * FROM " . STORE_ITEMS . " WHERE " . STORE_ITEMS_VNUM . " = ?");
															$SQL_CONSULT_ITEM_MALL->execute([$SCHEDULE[SCHEDULE_PRIZE]]);
															$DATO = $SQL_CONSULT_ITEM_MALL->fetch();

									          				SendItem($DATO[STORE_ITEMS_VNUM], $DATO[STORE_ITEMS_AMOUNT], htmlentities($_POST['SelectCharacter']));
									          				
									          				if($SCHEDULE[SCHEDULE_TYPE] == 0)
									          					$MSG = 'Congratulations!!! the item has been sent to your character';
									          				else
									          					$MSG = 'The answer is correct, congratulations!!! the item has been sent to your character';
									          			} else $MSG = 'ERROR: The character does not exist!';
								          			} else $MSG = 'ERROR: The item does not exist!';
								          		} else $MSG = 'ERROR: Character field empty';
						          			} else $MSG = 'ERROR: Character not declared';
						          		} else $MSG = 'The answer is wrong, better luck next time.';
						    		} else $MSG = 'ERROR: No option selected';
					          	} else $MSG = 'ERROR: POST var not declared';
					        } else $MSG = 'ERROR: No data recived';
		          		} else $MSG = 'ERROR: Internal SQL fail';
	          		} else $MSG = 'The item has already been redeemed';
          		} else $MSG = 'ERROR: The prize is not available';
			}
			echo "<script>alert('" . $MSG . "');window.location='./" . $TAB . "';</script>";
		}*/

		elseif ($from == 'users') {

			if(isset($_GET['id'])) $ID = htmlentities($_GET['id']);
			$TARGET = htmlentities($_GET['target']);

			if ($TARGET == 'range' && $_SESSION['USER_RANGE'] >= ROLE_OWNER && NoAdminAccess($ID)) {
				
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();
				$SQL_UPDT_USERS = $con->update("accounts",["Authority" => htmlentities($_POST['SelectUserRange'])],["Id" => $ID]);('UPDATE ' . USER . ' SET ' . USER_RANGE . ' = ? WHERE ' . USER_ID . ' = ?');
				$TAB = "";
				$MSG = "Authority updated";
			}

			elseif ($TARGET == 'add_coins' && $_SESSION['USER_RANGE'] >= ROLE_OWNER && NoAdminAccess($ID)) {
				
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();
				$SQL_UPDT_USERS = $con->update("accounts", ["Coins[+]" => htmlentities($_POST['inputAddCoins'])],["Id" => $ID]);
				$TAB = "";
				$MSG = $_POST['inputAddCoins'] . " Coins charged";
			}

			elseif ($TARGET == 'add_coins_mass') {
				
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();
				$SQL_UPDT_USERS = $con->update("accounts", ["Coins[+]" => htmlentities($_POST['inputAddCoinsMass'])]);
				$TAB = "";
				$MSG = $_POST['inputAddCoinsMass'] . " Mass shipment of coins done";
			}

			elseif ($TARGET == 'SendItem' && $_SESSION['USER_RANGE'] >= ROLE_OWNER && NoAdminAccess($ID)) {

				if ($_GET['ref'] == 'admin') {

					$TAB = "./index?to=admin&&card=users&&user_details_id=" . htmlentities($_GET['id']);
					$Amount = htmlentities($_POST['InputSenditemQuantity']);
				}

				if(!empty($_POST)){

					if(isset($_POST["SelectCharacterId"]) && isset($_POST["InputSenditemvNum"])){

						if($_POST["SelectCharacterId"] != "" && $_POST["InputSenditemvNum"] != "" && $Amount != ""){

							$SQL_CONSULT_ITEM_MALL = $con->count("item",["vnum" => htmlentities($_POST['InputSenditemvNum'])]);

							if($SQL_CONSULT_ITEM_MALL > 0){

								SendItem(htmlentities($_POST['InputSenditemvNum']), $Amount, htmlentities($_POST["SelectCharacterId"]));
								$MSG = "Item sent";
								ActLog($MSG . " VNUM: " . $_POST['InputSenditemvNum']);

							}else $MSG = "This product does not exist!";
						}else $MSG = "Please don't leave any fields empty";
					}else $MSG = "Please don't leave any fields empty";
				}else $MSG = "Please don't leave any fields empty";
				print "<script>alert('" . $MSG . "');window.location='" . $TAB . "';</script>";
			}

			elseif ($TARGET == 'Character' && $_SESSION['USER_RANGE'] >= ROLE_OWNER && NoAdminAccess($ID)) {

				$TAB = "&&user_details_id=" . $_GET['AccountId'];

				$temp = $con->query('SET search_path TO characters;')->fetchAll();
				$SQL_UPDT_USERS = $con->update("characters",
				[
					"Act4Dead" => htmlentities($_POST['Act4Dead']),
					"Act4Kill" => htmlentities($_POST['Act4Kill']),
					"Act4Points" => htmlentities($_POST['Act4Points']),
					"ArenaWinner" => htmlentities($_POST['ArenaWinner']),
					"Biography" => htmlentities($_POST['Biography']),
					"BuffBlocked" => htmlentities($_POST['BuffBlocked']),
					"Class" => htmlentities($_POST['Class']),
					"Compliment" => htmlentities($_POST['Compliment']),
					"Dignity" => htmlentities($_POST['Dignity']),
					"EmoticonsBlocked" => htmlentities($_POST['EmoticonsBlocked']),
					"ExchangeBlocked" => htmlentities($_POST['ExchangeBlocked']),
					"Faction" => htmlentities($_POST['Faction']),
					"FamilyRequestBlocked" => htmlentities($_POST['FamilyRequestBlocked']),
					"FriendRequestBlocked" => htmlentities($_POST['FriendRequestBlocked']),
					"Gender" => htmlentities($_POST['Gender']),
					"Gold" => htmlentities($_POST['Gold']),
					"GroupRequestBlocked" => htmlentities($_POST['GroupRequestBlocked']),
					"HairColor" => htmlentities($_POST['HairColor']),
					"HairStyle" => htmlentities($_POST['HairStyle']),
					"HeroChatBlocked" => htmlentities($_POST['HeroChatBlocked']),
					"HeroLevel" => htmlentities($_POST['HeroLevel']),
					"HeroXp" => htmlentities($_POST['HeroXp']),
					"Hp" => htmlentities($_POST['Hp']),
					"HpBlocked" => htmlentities($_POST['HpBlocked']),
					"IsPetAutoRelive" => htmlentities($_POST['IsPetAutoRelive']),
					"IsPartnerAutoRelive" => htmlentities($_POST['IsPartnerAutoRelive']),
					"JobLevel" => htmlentities($_POST['JobLevel']),
					"JobLevelXp" => htmlentities($_POST['JobLevelXp']),
					"Level" => htmlentities($_POST['Level']),
					"LevelXp" => htmlentities($_POST['LevelXp']),
					"MapId" => htmlentities($_POST['MapId']),
					"MapX" => htmlentities($_POST['MapX']),
					"MapY" => htmlentities($_POST['MapY']),
					"MasterPoints" => htmlentities($_POST['MasterPoints']),
					"MasterTicket" => htmlentities($_POST['MasterTicket']),
					"MaxPetCount" => htmlentities($_POST['MaxPetCount']),
					"MaxPartnerCount" => htmlentities($_POST['MaxPartnerCount']),
					"MinilandInviteBlocked" => htmlentities($_POST['MinilandInviteBlocked']),
					"MinilandMessage" => htmlentities($_POST['MinilandMessage']),
					"MinilandPoint" => htmlentities($_POST['MinilandPoint']),
					"MinilandState" => htmlentities($_POST['MinilandState']),
					"MouseAimLock" => htmlentities($_POST['MouseAimLock']),
					"Mp" => htmlentities($_POST['Mp']),
					"QuickGetUp" => htmlentities($_POST['QuickGetUp']),
					"RagePoint" => htmlentities($_POST['RagePoint']),
					"Reput" => htmlentities($_POST['Reput']),
					"Slot" => htmlentities($_POST['Slot']),
					"SpPointsBasic" => htmlentities($_POST['SpPointsBasic']),
					"SpPointsBonus" => htmlentities($_POST['SpPointsBonus']),
					"TalentLose" => htmlentities($_POST['TalentLose']),
					"TalentSurrender" => htmlentities($_POST['TalentSurrender']),
					"TalentWin" => htmlentities($_POST['TalentWin']),
					"WhisperBlocked" => htmlentities($_POST['WhisperBlocked'])]
				,["Id" => $ID]);

				$MSG = "Character: " . htmlentities($_POST['Name']) . " updated";  
			}

			if ($TARGET != 'SendItem') {
				if ($SQL_UPDT_USERS->rowCount() > 0){
					ActLog($MSG);
					print "<script>alert('".$MSG."');window.location='./index?to=admin&&card=users$TAB';</script>";
				}
				else 
					print "<script>alert('Error on update');window.location='./index?to=admin&&card=users$TAB';</script>";
			}
		}

		elseif ($from == 'payments') {

			$TARGET = htmlentities($_GET['target']);

			if ($TARGET == 'request') {

				$METHOD 		= $_GET['method'];
				$SUCCESS_MSG 	= 'Payment request created';
				$TAB 			= 'payreq';

				$SQL_PAYMENT = $con->insert("PaymentReqWeb",
				[
				"UserID" => $_SESSION['USER_ID'],
				"Method" => htmlentities($METHOD),
				"Date" => $DATE,
				"Time" => $TIME,
				"Status" => 0,
				"CoinsId" => htmlentities($_POST['PlanSelect']),
				"Code" => htmlentities($_POST['CodeInput']),
				"Discount" => $site['coin_discount'],
				"Bonus" => $site['coin_bonus'],
				]);
				$CONSULT = 1;
				if($site['mail']['status'] == 1 && $site['mail']['payreq'] == 1){

					$DESTINATION	= $site['email']; 
					$SUBJECT 		= "New payment request"; 
					$BODY 			= "
					<div style='width: 80%; padding: 10px; text-align:center;'>
						<table style='width:100%'>
							<thead style='background-color: black; color: white'>
	                            <tr>
	                            	<th style='padding: 5px'>Username</th>
	                                <th style='padding: 5px'>Method</th>
	                                <th style='padding: 5px'>Date</th>
	                                <th style='padding: 5px'>Time</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<tr>
	                        		<td style='padding: 15px'>" . $_SESSION['USER_NICK'] . "</td>
	                        		<td style='padding: 15px'>" . $METHOD . "</td>
	                        		<td style='padding: 15px'>" . date($site['datetime']['date-format']) . "</td>
	                        		<td style='padding: 15px'>" . date($site['datetime']['time-format']) . "</td>
	                        	</tr>
	                        </tbody>
						</table>
						<hr>
						<br>
						<a href='http://www." . $site['domain'] . "/index?to=admin&&card=payreq' style='padding: 5px; background-color: black; text-decoration: none; color: white; margin: 5px'>Manage</a>
					</div>
					"; 

					$headers = "MIME-Version: 1.0\r\n"; 
					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$headers .= "From: " . $_SESSION['USER_FRST_NAME'] . " " . $_SESSION['USER_LAST_NAME'] . " <" . $_SESSION['USER_EMAIL'] . ">\r\n"; 

					mail($DESTINATION, $SUBJECT, $BODY, $headers);
				}
			}

			elseif ($TARGET == 'approved' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$TAB = 'index?to=admin&&card=payreq';

				$SQL_COINS_INFO = $con->prepare("SELECT * FROM " . STORE_COINS . " WHERE 'CoinsId' = ?");
				$SQL_COINS_INFO->execute([htmlentities($_GET['coinsid'])]);
				$COINS_INFO = $SQL_COINS_INFO->fetch();

				$SQL_PAY_INFO = $con->prepare("SELECT " . PAY_REQ_BONUS . ", " . PAY_REQ_DISCOUNT . ", " . PAY_REQ_METHOD . ", " . PAY_REQ_USER_ID . ", " . PAY_REQ_CODE . " FROM " . PAY_REQ . " WHERE " . PAY_REQ_ID . " = ?");
				$SQL_PAY_INFO->execute([htmlentities($_GET['payreqid'])]);
				$PAY_INFO = $SQL_PAY_INFO->fetch();

				$SQL_USER_INFO = $con->prepare("SELECT " . USER_EMAIL . " FROM " . USER . " WHERE Id = ?");
				$SQL_USER_INFO->execute([$PAY_INFO[3]]);
				$USER_INFO = $SQL_USER_INFO->fetch();

				$TRANS_ID = base64_encode($DATE . "-" . $TIME . "-" . $PAY_INFO[3] . "-" . $PAY_INFO[4]);

				if (strtolower($PAY_INFO[2]) == 'paysafecard')
					$currency = $site['paysafecard']['currency'];

				elseif (strtolower($PAY_INFO[2]) == 'amazon')
					$currency = $site['amazon']['currency'];

				if(	Payment(
						$TRANS_ID, 
						$USER_INFO[0], 
						$PAY_INFO[2],
						$COINS_INFO[STORE_COINS_DESCRIPTION],
						Discount($COINS_INFO[STORE_COINS_PRICE], $PAY_INFO[1]), 
						$currency,
						$PAY_INFO[3])
				){

					$SUCCESS_MSG 	= 'Payment request approved';
					$SQL_PAYMENT 	= $con->prepare("UPDATE " . PAY_REQ . " SET " . PAY_REQ_STATUS . " = ? WHERE " . PAY_REQ_ID . " = ?");
					$SQL_ADD_COINS 	= $con->prepare("UPDATE " . USER . " SET " . USER_BALANCE . " = " . USER_BALANCE . " + ? WHERE 'Id' = ?");
					$SQL_ADD_COINS->execute([Bonus($COINS_INFO[0], $PAY_INFO[0]), htmlentities($_GET['userid'])]);
					$CONSULT 		= $SQL_PAYMENT->execute([1, htmlentities($_GET['payreqid'])]);
				}
				else
					$SUCCESS_MSG 	= 'This payment already exist!';

			}

			elseif ($TARGET == 'declined' && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {

				$SUCCESS_MSG 	= 'Payment request declined';
				$TAB 			= 'index?to=admin&&card=payreq';

				$SQL_PAYMENT = $con->prepare("UPDATE " . PAY_REQ . " SET " . PAY_REQ_STATUS . " = ? WHERE " . PAY_REQ_ID . " = ?");
				$CONSULT = $SQL_PAYMENT->execute([2, htmlentities($_GET['payreqid'])]);
			}

			elseif ($TARGET == 'PayPal') {

				include 'PaypalExpress.class.php';
		    	$paypal = new PaypalExpress;

		    	$PAYMENT_ID	= $_POST['paymentID'];
		    	$TOKEN 		= $_POST['token'];
		    	$PAYER_ID 	= $_POST['payerID'];
		    	$PRODUCT_ID	= $_POST['productID'];
				$temp = $con->query('SET search_path TO web;');
		    	$SQL_COINS_INFO = $con->select("coinsweb","*",["CoinsId" => $PRODUCT_ID]);
		    	$COINS_INFO = $SQL_COINS_INFO[0];
		    	
		    	$SUCCESS_MSG = "Has bought " . Bonus($COINS_INFO[STORE_COINS_AMOUNT], $site['coin_bonus']) . " coins with PayPal";
		    	$TAB = "./coins";
		    	$PAYPALFORMAT = number_format(Discount($COINS_INFO[STORE_COINS_PRICE], $site['coin_discount']), 2, '.', ',');
		    	
		    	$paymentCheck = $paypal->validate($PAYMENT_ID, $TOKEN, $PAYER_ID, $PRODUCT_ID, $site);

				if(	$paymentCheck																		&&
					$paymentCheck->state 								== 'approved' 					&&
					$paymentCheck->transactions[0]->amount->currency 	== $site['paypal']['currency']	&& 
					$paymentCheck->transactions[0]->amount->total 		== $PAYPALFORMAT				&&

					Payment(
						base64_encode($PAYMENT_ID),
						$paymentCheck->payer->payer_info->email,
						$paymentCheck->payer->payment_method,
						$COINS_INFO[STORE_COINS_DESCRIPTION],
						$paymentCheck->transactions[0]->amount->total,
						$paymentCheck->transactions[0]->amount->currency,
						$_SESSION['USER_ID']
					)
				){
					$temp = $con->query('SET search_path TO accounts;')->fetchAll();
					$newCoins = Bonus($COINS_INFO[STORE_COINS_AMOUNT], $site['coin_bonus']);
					$REQ_ADD = $con->update("accounts",["Coins[+]" => $newCoins],["Id" => $_SESSION["USER_ID"]]);//("UPDATE accouns SET Coins = Coins + " .  . " WHERE Id = ". $_SESSION["USER_ID"] ."")->fetchAll();
		    		$CONSULT = 1;
		    	}

		    	else $SUCCESS_MSG = "Error on PayPal transaction";
			}

			
			if ($CONSULT > 0 ) {

				ActLog($SUCCESS_MSG);
				echo "<script>alert('" . $SUCCESS_MSG . "');window.location='./" . $TAB . "';</script>";
			}
			else
				echo "<script>alert('Error on SQL consult');window.location='./" . $TAB . "';</script>";
		}

		elseif ($from == 'mail') {
			
			if( $_POST['InputContactName'] != "" && $_POST['InputContactEmail'] != "" && $_POST['InputContactSubject'] != ""){

				$DESTINATION	= $site['email']; 
				$SUBJECT 		= $_POST['InputContactSubject'] . " - Website contact"; 
				$BODY 			= $_POST['TextareaContactBody']; 

				$headers = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: " . $_POST['InputContactName'] . " <" . $_POST['InputContactEmail'] . ">\r\n"; 

				mail($DESTINATION, $SUBJECT, $BODY, $headers);
				echo "<script>alert('Message sent');window.location='./index';</script>";
			} else echo "<script>alert('Please don't leave any field empty');window.location='./index';</script>";
		}

		elseif ($from == 'getRoulette') {

			$temp = $con->query('SET search_path TO accounts;')->fetchAll();

			$SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

			$USER = $SQL_USER_DATA[0];



			if (($USER['Coins'] < 150 && $site['double_jackpot'] == 0) || ($USER['Coins'] < 300 && $site['double_jackpot'] == 1)) {
				echo json_encode(["status"=>"failed", "message"=>'no enough balance']);
			}
			else{
				$coin = $USER['Coins'] - 150;
				$temp = $con->query('SET search_path TO accounts;')->fetchAll();
				$coin_update = $con->update("accounts",["Coins" => $coin],["Id" => $_SESSION['USER_ID']]);

				$temp = $con->query('SET search_path TO web;')->fetchAll();

				if($site['double_jackpot'] == 0){
					$sql = "select * from rouletteweb where \"Rare\" = '0' order by RANDOM() limit 1";
		
				  	$jackpots = $con->query($sql)->fetchAll();
				} else {
					$sql = "select * from rouletteweb where \"Rare\" = '0' order by RANDOM() limit 2";
		
				  	$jackpots = $con->query($sql)->fetchAll();
				}

				
	
				$sql = "select * from rouletteweb where \"Rare\" = '1' order by RANDOM() limit 5";
	
				$rare = $con->query($sql)->fetchAll();

				if($site['double_jackpot'] == 0 ){
					$sql = "select * from rouletteweb where \"Rare\" = '2' order by RANDOM() limit 10";
	
					$common = $con->query($sql)->fetchAll();	
				} else {

					$sql = "select * from rouletteweb where \"Rare\" = '2' order by RANDOM() limit 9";
	
					$common = $con->query($sql)->fetchAll();
				}
	
				$sql = "select * from rouletteweb where \"Rare\" = '2' order by RANDOM() limit 10";
	
				$common = $con->query($sql)->fetchAll();

				$values = array('jackpot','rare','common');
				$weights = array(3,37,60); // Probability

				$weighted_value = weighted_random($values, $weights);

				if($weighted_value == "jackpot"){
					if($site['double_jackpot'] == 0){
						$reward = $jackpots[0]['ID']; // 1
					} else {
						$reward = $jackpots[rand(0,1)]['ID']; // 2
					}
					
				} elseif ($weighted_value == "rare"){
					$reward = $rare[rand(0,4)]['ID']; // 5
				} else {
					if($site['double_jackpot'] == 0){
						$reward = $common[rand(0, 9)]['ID']; // 10
					} else {
						$reward = $common[rand(0, 8)]['ID']; // 9
					}

					
				}

				// $items = array();
				// for ($i=0 ; $i<3; $i++){
				// 	$items[$i] = $jackpots[0]['ID']; 
				// }
	
				// for ($i=0 ; $i<5; $i++){
				// 	$items[3+$i*7] = $rare[$i]['ID'];
				// 	$items[4+$i*7] = $rare[$i]['ID']; 
				// 	$items[5+$i*7] = $rare[$i]['ID'];
				// 	$items[6+$i*7] = $rare[$i]['ID'];
				// 	$items[7+$i*7] = $rare[$i]['ID'];
				// 	$items[8+$i*7] = $rare[$i]['ID'];
				// 	$items[9+$i*7] = $rare[$i]['ID'];
				// }
	
				// $items[39] = $rare[3];
				// $items[38] = $rare[4];
	
				// for ($i=0 ; $i<10; $i++){
				// 	$items[41+$i*6] = $common[$i]['ID'];
				// 	$items[42+$i*6] = $common[$i]['ID'];
				// 	$items[43+$i*6] = $common[$i]['ID'];
				// 	$items[44+$i*6] = $common[$i]['ID'];
				// 	$items[45+$i*6] = $common[$i]['ID'];
				// 	$items[40+$i*6] = $common[$i]['ID'];
				// }
	
				// $reward = $items[rand(0,100)];
	
				echo json_encode(["status"=>"ok", "reward"=>$reward, "jackpot"=>$jackpots, "rare" => $rare, "common" => $common]);
			}
		
			

		}

		elseif ($from == 'sendItem') {

			$temp = $con->query('SET search_path TO accounts;')->fetchAll();

			$SQL_USER_DATA = $con->select("accounts", "*", ["Id" => $_SESSION['USER_ID']]); //('SELECT * FROM ' . USER . ' WHERE "Id" = ?');

			$USER = $SQL_USER_DATA[0];

			$vnum = htmlentities($_POST['vnum']);
			$amount = htmlentities($_POST['amount']);
			$char_id = htmlentities($_POST['char_id']);
			SendItem($vnum, $amount, $char_id);
			$arr = array(['success'=>true,'message'=>'success', 'balance'=>$USER['Coins']]);
			echo json_encode($arr);
		}
	}

	function weighted_random($values, $weights){ 
		$count = count($values); 
		$i = 0; 
		$n = 0; 
		$num = mt_rand(0, array_sum($weights)); 
		while($i < $count){
			$n += $weights[$i]; 
			if($n >= $num){
				break; 
			}
			$i++; 
		} 
		return $values[$i]; 
	}
?>
<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
	use Medoo\Medoo;
	function FirstMayus($str){

		$valor = strtoupper(substr($str, 0, 1)) . strtolower(substr($str, 1));
		return $valor;
	}

	function ActLog($description) {

		if(strlen($description) < 2)
			return;
		global $con, $DATE, $TIME;

		$temp = $con->query('SET search_path TO web;')->fetchAll();
		$SQL_LOG = $con->insert("activitylogweb",[
		"log_ip" => $_SERVER['REMOTE_ADDR'],
		"log_date" => $DATE,
		"log_time" => substr($TIME,0,8),
		"log_user_id" => $_SESSION['USER_ID'],
		"log_description" => $description]);
	}

	function PenaltyLog($user_id, $reason){

		global $con, $DATE, $TIME, $site;
		return;
		$temp = $con->query('SET search_path TO accounts;')->fetchAll();
		$SQL_BAN_HACK = $con->update("accounts",["Authority" => -2],["Id" => $user_id]);//('UPDATE ' . USER . ' SET ' . USER_RANGE . ' = ? WHERE ' . USER_ID . ' = ?');	
		$name = $con->select("accounts","Name",["Id" => $user_id]);
		$SQL_PENALTY = $con->insert("accounts_bans",[
		"AccountId" => $user_id,
		"JudgeName" => "Security System",
		"TargetName" => $name,
		"Start" => Medoo::raw('now()'),
		"End" => date("Ymd H:i:s.v", strtotime(date("Ymd H:i:s.v") . "+ 15 year")),
		"Reason" => $reason]);
	}

	function Discount($price, $percent){
		
        if($percent > 0)
            $P = $price - (($price * $percent) / 100);
        else
        	$P = $price;

        return $P;
	}

	function Bonus($amount, $percent){

		if($percent > 0)
			$P = round($amount + (($amount * $percent) / 100));
		else
			$P = $amount;

		return $P;
	}

	function NoAdminAccess($user_id){
		
		return true;
		if ($user_id != $_SESSION['USER_ID'])
		 	$A = TRUE;
		else
		 	$A = FALSE;

		return $A;
	}

	function CharacterNameById($char_id){

		global $con;

		$temp = $con->query('SET search_path TO characters;')->fetchAll();
		$SQL_CHAR_NAME = $con->select("characters","Name",["Id" => $char_id]);//('SELECT ' . CHAR_NICK . ' FROM ' . CHAR . ' WHERE ' . CHAR_ID . ' = ?');

        $CHAR_NICK = $SQL_CHAR_NAME;

        return $CHAR_NICK[0];
	}

	function Payment($transID, $PayerEmail, $Method, $Description, $Amount, $Currency, $userID){

		global $con, $DATE, $TIME;

		$SQL_PAYMENT_CHECK = $con->count("PaymentWeb",["TransactionID" => $transID]);//('SELECT COUNT(*) FROM ' . PAYMENTS . ' WHERE ' . PAYMENTS_TRANS_ID . ' = ?');

		$PAYMENT_CHECK = $SQL_PAYMENT_CHECK;

		if($PAYMENT_CHECK > 0)

			return FALSE;

		else {

			$SQL_PAYMENT = $con->insert("PaymentWeb",[
			"TransactionID" => $transID,
			"PayerEmail" => $PayerEmail,
			"PayerID" => $userID,
			"Date" => $DATE,
			"Time" => substr($TIME,0,8),
			"Method" => $Method,
			"Description" => $Description,
			"Amount" => $Amount,
			"Currency" => substr($Currency,0,8)
			]);
			return TRUE;
		}
	}

	function SendItem($VNum, $Amount, $CharacterId){

		global $site, $con;
		$temp = $con->query('SET search_path TO web;')->fetchAll();
		$SQL_CONSULT_ITEM_MALL = $con->select("shopitems","*",["vnum" => $VNum]);
		$DATO = $SQL_CONSULT_ITEM_MALL[0];
		$ItemType = $DATO['type'];
		if( $DATO['type'] == "0" && $Amount > 1){
			if($DATO['subtype'] == 5){
				for ($i = 0; $i < $Amount; $i++){
					$ARR = array(
						"Amount" 	=>1,
						"ItemVNum" 	  	=> $VNum,
						"Type" => 3,
						"HoldingVNum" => 0,
						"SpLevel" => 1
						);
					$temp = $con->query('SET search_path TO mails;')->fetchAll();
					$Insert = $con->insert("characters_mails",[
					"Date" => Medoo::raw('now()'),
					"SenderName" => "Nosmall",
					"ReceiverId" => $CharacterId,
					"MailGiftType" => 1,
					"ItemInstance" => json_encode($ARR),
					"CreatedAt" => Medoo::raw('now()')]);
				}
			}
			elseif($DATO['subtype'] == 6){
				for ($i = 0; $i < $Amount; $i++){
					$ARR = array(
						"Amount" 	=>1,
						"ItemVNum" 	  	=> $VNum,
						"Type" => 3,
						"HoldingVNum" => 0
						);
					$temp = $con->query('SET search_path TO mails;')->fetchAll();
					$Insert = $con->insert("characters_mails",[
					"Date" => Medoo::raw('now()'),
					"SenderName" => "Nosmall",
					"ReceiverId" => $CharacterId,
					"MailGiftType" => 1,
					"ItemInstance" => json_encode($ARR),
					"CreatedAt" => Medoo::raw('now()')]);
				}
			}
			elseif($DATO['subtype'] == 1){
				$ARR = array(

					"Amount" 	=> $Amount,
					"ItemVNum" 	  	=> $VNum
					);
				$temp = $con->query('SET search_path TO mails;')->fetchAll();
				$Insert = $con->insert("characters_mails",[
				"Date" => Medoo::raw('now()'),
				"SenderName" => "Nosmall",
				"ReceiverId" => $CharacterId,
				"MailGiftType" => 1,
				"ItemInstance" => json_encode($ARR),
				"CreatedAt" => Medoo::raw('now()')]);
			}
			elseif($DATO['subtype'] == 9){
				for ($i = 0; $i < $Amount; $i++){
					$ARR = array(

						"Amount" 	=> 1,
						"ItemVNum" 	  	=> $VNum,
						"DurabilityPoint" => 3,
						"Type" => 1
						);
					$temp = $con->query('SET search_path TO mails;')->fetchAll();
					$Insert = $con->insert("characters_mails",[
					"Date" => Medoo::raw('now()'),
					"SenderName" => "Nosmall",
					"ReceiverId" => $CharacterId,
					"MailGiftType" => 1,
					"ItemInstance" => json_encode($ARR),
					"CreatedAt" => Medoo::raw('now()')]);
				}
			}
			else{
				for ($i = 0; $i < $Amount; $i++){

					$ARR = array(

						"Amount" 	=> $DATO['amount'],
						"ItemVNum" 	  	=> $VNum
						);
					$temp = $con->query('SET search_path TO mails;')->fetchAll();
					$Insert = $con->insert("characters_mails",[
					"Date" => Medoo::raw('now()'),
					"SenderName" => "Nosmall",
					"ReceiverId" => $CharacterId,
					"MailGiftType" => 1,
					"ItemInstance" => json_encode($ARR),
					"CreatedAt" => Medoo::raw('now()')]);
				}
			}
		}

		else {
				
				$ARR = "";
				if($DATO['subtype'] == 3 || $DATO['subtype'] == 2 || $DATO['subtype'] == 1)
				{
					$ARR = array(

						"Amount" 	=>1,
						"ItemVNum" 	  	=> $VNum,
						"Rarity"        	=> $DATO['rare'],
						"Upgrade"     	=> $DATO['upgrade'],
						"Type" => $DATO['subtype']
						);
				}
				elseif($DATO['subtype'] == 4){
					$ARR = array(

					"Amount" 	=> $Amount,
					"ItemVNum" 	  	=> $VNum,
					"Type" => 1
					);
				}
				elseif($DATO['subtype'] == 5 && $DATO['type'] == 0){
					$ARR = array(
						"Amount" 	=>1,
						"ItemVNum" 	  	=> $VNum,
						"Type" => 3,
						"HoldingVNum" => 0,
						"SpLevel" => 1
						);
				}
				elseif($DATO['subtype'] == 6){
					$ARR = array(
						"Amount" 	=>1,
						"ItemVNum" 	  	=> $VNum,
						"Type" => 3,
						"HoldingVNum" => 0
						);
				}
				elseif($DATO['subtype'] == 9){
					$ARR = array(

					"Amount" 	=> $Amount,
					"ItemVNum" 	  	=> $VNum,
					"DurabilityPoint" => 3,
					"Type" => 1
					);
				}
				else{
					$ARR = array(

					"Amount" 	=> $DATO['amount'],
					"ItemVNum" 	  	=> $VNum
					);
				}
				
				
				$temp = $con->query('SET search_path TO mails;')->fetchAll();
				$Insert = $con->insert("characters_mails",[
				"Date" => Medoo::raw('now()'),
				"SenderName" => "Nosmall",
				"ReceiverId" => $CharacterId,
				"MailGiftType" => 1,
				"ItemInstance" => json_encode($ARR),
				"CreatedAt" => Medoo::raw('now()')]);
		}
		global $con, $DATE, $TIME;

		$temp = $con->query('SET search_path TO web;')->fetchAll();
		$description = "Bought from Shop: Vnum:" . $VNum . "x".$Amount;
		$ShopLog =  $con->insert("activitylogweb",[
		"log_ip" => $_SERVER['REMOTE_ADDR'],
		"log_date" => $DATE,
		"log_time" => substr($TIME,0,8),
		"log_user_id" => $_SESSION['USER_ID'],
		"log_description" => $description]);
	}

?>
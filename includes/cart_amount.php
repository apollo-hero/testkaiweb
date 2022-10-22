<?php
include "../php/config.php";

if(isset($_SESSION['USER_ID'])){

	$temp = $con->query('SET search_path TO web;')->fetchAll();
                $SQL_NOTIFY = $con->select("cart","*",["accountid" => $_SESSION['USER_ID']]);//('SELECT COUNT(*) FROM "cart" WHERE "accountid" = ?');

				$NOTIFY = count($SQL_NOTIFY);

	if($NOTIFY > 0){
		echo '<li class="nav-item">
                        <a class="nav-link" href="cart" id="alertsDropdown">';
                            echo '<span class="badge badge-danger">'; echo $NOTIFY; echo '</span>';
                        echo '</a>
                    </li>';
		
	}
}
else
	echo "";
?>
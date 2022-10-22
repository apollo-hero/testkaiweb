<?php
include "../php/config.php";

if(isset($_SESSION['USER_ID'])){

	$temp = $con->query('SET search_path TO accounts;')->fetchAll();
	$sql_sldo = $con->select("accounts","Coins",["Id" => $_SESSION['USER_ID']]);//('SELECT "Coins" FROM ' . USER . ' WHERE "Id" = ?');
	
	$S = intval($sql_sldo[0]);

	echo "<span class='h5'><i class='fad fa-coins'></i> " . number_format($S, 0, ',', '.') . "</span>";
}
else
	echo "<i class='fad fa-hourglass-half'></i>";
?>
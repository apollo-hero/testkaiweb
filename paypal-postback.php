<?php

	include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
	use Medoo\Medoo;
	include $_SERVER['DOCUMENT_ROOT']."/php/config.php";
	include $_SERVER['DOCUMENT_ROOT']."/php/functions.php";



$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
  $keyval = explode ('=', $keyval);
  if (count($keyval) == 2)
     $myPost[$keyval[0]] = urldecode($keyval[1]);
}
// read the IPN message sent from PayPal and prepend 'cmd=_notify-validate'
$req = 'cmd=_notify-validate';

foreach ($myPost as $key => $value) {        
        $value = urlencode($value);
   $req .= "&$key=$value";
}

 
// STEP 2: POST IPN data back to PayPal to validate

$ch = curl_init('https://www.paypal.com/cgi-bin/webscr');
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

// In wamp-like environments that do not come bundled with root authority certificates,
// please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set 
// the directory path of the certificate as shown below:
// curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
if( !($res = curl_exec($ch)) ) {
    error_log("Got " . curl_error($ch) . " when processing IPN data");
    curl_close($ch);
    exit;
}
curl_close($ch);
 

// STEP 3: Inspect IPN validation result and act accordingly

if (strcmp ($res, "VERIFIED") == 0) {
    // The IPN is verified, process it:
    // check whether the payment_status is Completed
    // check that txn_id has not been previously processed
    // check that receiver_email is your Primary PayPal email
    // check that payment_amount/payment_currency are correct
    // process the notification

    // assign posted variables to local variables
    $item_name = $_POST['item_name'];
    $item_number = $_POST['item_number'];
    $payment_status = $_POST['payment_status'];
    $payment_amount = $_POST['mc_gross'];
    $payment_currency = $_POST['mc_currency'];
    $txn_id = $_POST['txn_id'];
    $receiver_email = $_POST['receiver_email'];
    $payer_email = $_POST['payer_email'];
	$real_curr = substr($payment_currency,0,8);
	if($real_curr != "EUR")
	{
		
		$temp = $con->query('SET search_path TO web;');
		$SQL_PAYMENT = $con->insert("PaymentWeb",[
			"TransactionID" => $txn_id,
			"PayerEmail" => $payer_email,
			"PayerID" => $_POST['custom'],
			"Date" => $DATE,
			"Time" => substr($TIME,0,8),
			"Method" => 'Paypal',
			"Description" => "FAILED",
			"Amount" => $payment_amount,
			"Currency" => $real_curr]);
			return;
	}
	if(!is_numeric($item_number))
		return;
	$stmt = $con->select("coinsweb","*",["CoinsId" => $item_number]);
    $product = $stmt;
	if(count($product) >= 1)
	{
		$temp = $con->query('SET search_path TO web;');
		$SQL_COINS_INFO = $con->select("coinsweb","*",["CoinsId" => $item_number]);
		$COINS_INFO = $SQL_COINS_INFO[0];
		
		$newCoins = Bonus($COINS_INFO['Coins']+$COINS_INFO['BonusCoins'], $site['coin_bonus']);
		$temp = $con->query('SET search_path TO web;');
		$SQL_PAYMENT = $con->insert("PaymentWeb",[
			"TransactionID" => $txn_id,
			"PayerEmail" => $payer_email,
			"PayerID" => $_POST['custom'],
			"Date" => $DATE,
			"Time" => substr($TIME,0,8),
			"Method" => 'Paypal',
			"Description" => $item_name,
			"Amount" => $payment_amount,
			"Currency" => $real_curr
		]);
		$discAmount = Discount($COINS_INFO['Price'], $site['coin_discount']);
		if($discAmount != $payment_amount)
			return;
		//Add coins
		$temp = $con->query('SET search_path TO accounts;')->fetchAll();
		$REQ_ADD = $con->update("accounts",["Coins[+]" => $newCoins],["Id" => $_POST['custom']]);
		//Log for Recv Payments
	}
	else{
		error_log("weird");
	}
} else if (strcmp ($res, "INVALID") == 0) {
    // IPN invalid, log for manual investigation
    error_log("The response from IPN was: <b>" .$res ."</b>");
}
?>
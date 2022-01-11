<?php

define('PAYPAL_ID', 'varavk-facilitator@gmail.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost/wiri-frontend/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/wiri-frontend/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 

 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pajawiri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

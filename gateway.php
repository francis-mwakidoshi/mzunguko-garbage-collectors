<?php
// Be sure to include the file you've just downloaded
require_once('smsclass.php');
?>
<?php
// Be sure to include the file you've just downloaded
require_once('smsclass.php');
// Specify your login credentials
$username   = "mwakidoshi";
$apikey     = "5db1c2ae9a1aad462a9ac2e37775e5d522ba3d6d05576c8797ec5e36e9b16fbb";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254708009360,+254716097939";
// And of course we want our recipients to know what we really do
$message    = "hellow, kindly report to estate a, b and c for gabage collection thankn you";
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
// Any gateway error will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
try
{
  // Thats it, hit send and we'll take care of the rest.
  $results = $gateway->sendMessage($recipients, $message);

  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!!
?>

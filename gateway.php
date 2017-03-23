<?php
// Be sure to include the file you've just downloaded
require_once('smsclass.php');
// Specify your login credentials
$username   = "mwakidoshi";
$apikey     = "50981d4c01bdd6dbcd58e858715b8e94069d75d9819d77f5c46940029de5958d";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254708009360,+254710427877";
// And of course we want our recipients to know what we really do
$message    = "hellow, kindly report to estate Tudor, Nyali and Kizingo for gabage collection thankyou";
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");
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
header("location: index.php");
// DONE!!!
?>

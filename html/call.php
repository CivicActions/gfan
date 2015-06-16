<?php

// Download the library and copy into the folder containing this file.
require('../vendor/twilio/sdk/Services/Twilio.php');

$account_sid = $_ENV['TWILIO_SID'];
$auth_token = $_ENV['TWILIO_TOKEN']; 

$client = new Services_Twilio($account_sid, $auth_token);
$call = $client->account->calls->create(
  '+18056856571',
  '+18056996099',

  // Read TwiML at this URL when a call connects (hold music)
  'http://gfan.civicactions.net/twiml.php',
);

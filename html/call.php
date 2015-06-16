<?php

require('../env.php');
require('../vendor/twilio/sdk/Services/Twilio.php');

$client = new Services_Twilio($account_sid, $auth_token);
$call = $client->account->calls->create(
  '+18056856571',
  '+18056996099',
  'http://gfan.civicactions.net/twiml.php'
);

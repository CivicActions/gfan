<?php

require('../env.php');
require('../vendor/twilio/sdk/Services/Twilio.php');

foreach (array('a', 'b') as $phone) {
  $client = new Services_Twilio($account_sid, $auth_token);
  try {
    if (!empty($_GET[$phone . 'phone'])) {
      $call = $client->account->calls->create(
        '+18056856571', 
        $_GET[$phone . 'phone'],
        'http://gfan.civicactions.net/twiml.php?' . $_SERVER['QUERY_STRING']
      );
      print 'Call to ' . $_GET[$phone . 'phone'] . ' succeeded. ';
    }
  } catch (Services_Twilio_RestException $e) { 
    print $e->getMessage();
    exit();
  }
}

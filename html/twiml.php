<?php

// Download the library and copy into the folder containing this file.
require('../env.php');
require('../vendor/twilio/sdk/Services/Twilio.php');

$response = new Services_Twilio_Twiml;
$response->say('Hello');
print $response;


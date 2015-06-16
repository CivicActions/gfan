<?php

// Download the library and copy into the folder containing this file.
require('../env.php');
require('../vendor/twilio/sdk/Services/Twilio.php');

$response = new Services_Twilio_Twiml;
$response->say('Hello ' . implode(' and ', array($_GET['aname'], $_GET['bname']));
$response->say('Starting lesson');
$response->play('http://gfan.civicactions.net/FreeMindfulness3MinuteBreathing.mp3');
$response->say('Share your learnings');
$dial = $response->dial();
$dial->conference('review', array(
    "startConferenceOnEnter" => "true",
    "muted" => "false",
    "beep" => "false",
    "record" => "record-from-start",
    "eventCallbackUrl" => 'http://gfan.civicactions.net/email-recording.php?' . $_SERVER['QUERY_STRING'],
));
print $response;


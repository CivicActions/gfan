<?php
$mails = array($_GET['aname'] . '<' . $_GET['aemail'] . '>', $_GET['bname'] . '<' . $_GET['bemail'] . '>');
$names = array($_GET['aname'], $_GET['bname']);
mail(implode(', ', $mails), implode(' and ', $names) . ' your lesson review recording is ready!', 'Download it from: ' . $_POST['RecordingUrl']);


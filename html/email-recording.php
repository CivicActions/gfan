<?php

mail($_GET['aemail'], 'Your recording is ready', $_POST['RecordingUrl']);
mail($_GET['bemail'], 'Your recording is ready', $_POST['RecordingUrl']);


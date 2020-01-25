<?php

include 'Functions/DBconnection.php';

$pagein = array(
  'Namepage' => 'Login'
);

$errors = array(
  '006' => 'I campi Username e Password non possono essere vuoti, inserisci il tuo Username e la tua Password',
  '007' => 'Username o Password non sono corretti, login fallito'
);

  session_start();

  require_once ("Views/header.php");
  require_once ("Views/login.php");
  require_once ("Views/footer.php");
?>

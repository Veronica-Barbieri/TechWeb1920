<?php
  $pagein = array(
    'Namepage' => 'Il tuo account',
    'Controller' => 'usr_page.php'
  );

  $errors = array(
    '006' => 'I campi Username e Password non possono essere vuoti, inserisci il tuo Username e la tua Password',
    '007' => 'Username o Password non sono corretti, login fallito'
  );

  session_start();

  if(!isset($_SESSION["Username"])){
    header("HTTP/1.1 401 Unauthorized");
    //exit;
  }

  $disp_deck = 3;
  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/usr_page.php");
  require_once ("Views/usr_page.php");
  require_once ("Views/footer.php");

 ?>

<?php
  $pagein = array(
    'Namepage' => 'Il tuo account',
    'Controller' => 'usr_page.php'
  );

  session_start();

  if(!isset($_SESSION["Username"])){
    header("HTTP/1.1 401 Unauthorized");
    exit;
  }

  $disp_deck = 3;
  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/usr_page.php");
  require_once ("Views/usr_page.php");
  //require_once ("Views/deck_view.php");
  require_once ("Views/footer.php");

 ?>

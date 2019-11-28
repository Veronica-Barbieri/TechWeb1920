<?php
  $pagein = array(
    'Namepage' => 'Il tuo account',
    'Controller' => 'usr_page.php'
  );

  session_start();

  $disp_deck = 3;
  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/usr_page.php");
  require_once ("Views/usr_page.php");
  //require_once ("Views/deck_view.php");
  require_once ("Views/footer.php");

  Debug_output(session_status());
 ?>

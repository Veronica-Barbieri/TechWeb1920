<?php
  $pagein = array(
    'Namepage' => $_GET["name"]
  );

  session_start();

  require_once ("Views/header.php");
  require_once ("Models/single_deck.php");
  require_once ("Views/single_deck.php");
  require_once ("Views/footer.php");

 ?>

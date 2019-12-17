<?php

  $pagein = array(
    'Namepage' => 'Nuovo Mazzo'
  );

  session_start();
  $_SESSION["deck"]=array(); 

  require_once ("Views/header.php");
  require_once ("Views/new_deck.php");
  require_once ("Views/footer.php");
 ?>

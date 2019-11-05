<?php
  $pagein = array(
    'Namepage' => 'Deck Forum',
    'Controller' => 'deck_forum.php'
  );

  $disp_deck = 15;
  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/deck_forum.php");
  require_once ("Views/deck_forum.php");
  require_once ("Views/deck_view.php");
  require_once ("Views/footer.php");

 ?>

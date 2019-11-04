<?php

$pagein = array(
  'Namepage' => 'Wiki delle carte'
);

  $disp_card = 12;

  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/cardwiki.php");
  require_once ("Views/cardwiki.php");
  require_once ("Views/footer.php");
 ?>

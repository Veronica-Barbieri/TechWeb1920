<?php

$pagein = array(
  'Namepage' => $_GET["name"]
);

require_once("Views/header.php");
require_once("Models/single_card.php");
require_once("Views/single_card.php");
require_once("Views/footer.php");
?>

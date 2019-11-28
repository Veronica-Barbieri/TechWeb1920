<?php
  $pagein = array(
    'Namepage' => 'Homepage'
  );

  session_start();

  require_once ("Views/header.php");
  require_once ("Models/index.php");
  require_once ("Views/index.php");
  require_once ("Views/footer.php");

 ?>

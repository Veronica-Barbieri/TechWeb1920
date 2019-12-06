<?php

include 'Functions/DBconnection.php';

$pagein = array(
  'Namepage' => 'Login'
);

  session_start();

  require_once ("Views/header.php");
  require_once ("Views/login.php");
  require_once ("Views/footer.php");
?>

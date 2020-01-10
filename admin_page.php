<?php
/*CONTROLLER*/
  $pagein = array(
    'Namepage' => 'Il tuo account',
    'Controller' => 'admin_page.php'
  );

  session_start();

  if(!isset($_SESSION["Username"])){
    header("HTTP/1.1 401 Unauthorized");
    exit;
  }

  //error_reporting (E_ALL);
  require_once ("Views/header.php");
  require_once ("Models/admin_page.php");
  require_once ("Views/admin_page.php");
  require_once ("Views/footer.php");

?>

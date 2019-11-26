<?php
$pagein = array(
  'Namepage' => 'Login'
);
if(isset($_SESSION["Username"])){
  require_once ("usr_page.php");
} else {
  require_once ("Views/header.php");
  require_once ("Views/login.php");
  require_once ("Views/footer.php");
}
?>

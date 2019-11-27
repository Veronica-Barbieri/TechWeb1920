<?php
  $pagein = array(
    'Namepage' => 'About Us'
  );

  session_start();

  require_once ("Views/header.php");
  require_once ("Models/contacts.php");
  require_once ("Views/contacts.php");
  require_once ("Views/footer.php");
 ?>

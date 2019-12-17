<?php
error_reporting(E_ALL && ~E_NOTICE);

include "../Functions/DBconnection.php";

session_start();

$logging_user = $_POST['username'];

$usr_check = "SELECT * FROM user WHERE Username = '$logging_user' ";

$q4_usr_check = Query($usr_check);

while($row = mysqli_fetch_assoc($q4_usr_check)){
  $usr = $row;
}

if(isset($usr) && $_POST["username"] == $usr["Username"] && hash('sha256', $_POST["pwd"]) == $usr["Pwd"]){
  $_SESSION["Username"] = $usr["Username"];
  if ($usr["Admin"] == 1) {
    $_SESSION["Admin"] = $usr["Admin"];
    header('Location: ../admin_page.php');
  }else {
    header('Location: ../usr_page.php');
  }
} else {
  header('Location: ../login.php'); //ci va un messaggio di errore ritornato)
}
 ?>

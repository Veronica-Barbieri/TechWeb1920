<?php

include "../DBconnection.php";

$user_name = $_POST["username"];
$mail = $_POST["mail"];
$pwd = $_POST["pwd"];

$pwd = hash('sha256', $pwd);

$q4_names_in_db = "SELECT Username FROM user WHERE Username='$user_name'";
$q4_mails_in_db = "SELECT Email FROM user WHERE Email='$mail'";

$name_result = Query($q4_names_in_db);
$mail_result = Query($q4_mails_in_db);

if($user_name==$name_result){
  header("Location: ../login.php");
} else if($mail==$mail_result) {
  header("Location: ../login.php");
} else {
  $i4_newuser = "INSERT INTO user (Username, Pwd, Email) VALUES ('$user_name', '$pwd', '$mail')";
  $new_user_errors=UpdateOrInsert_Query($i4_newuser, "Insert"); 
  header("Location: ../login.php");
}
?>

<?php

include "../Functions/DBconnection.php";
$conn = OpenCon();
if (!isset($_POST["username"]) || empty($_POST["username"])) {
  $_GET["error"] = "'Username' non puo' essere vuoto";
  header("Location: ../login.php?error=".$_GET["error"]);
}
if (!isset($_POST["mail"]) || empty($_POST["mail"])) {
  $_GET["error"] = "'E-mail' non puo' essere vuoto";
  header("Location: ../login.php?error=".$_GET["error"]);
}
if (!isset($_POST["pwd"]) || empty($_POST["pwd"])) {
  $_GET["error"] = "'Password' non puo' essere vuoto";
  header("Location: ../login.php?error=".$_GET["error"]);
}

// Remove all illegal characters from email
$email = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_GET["error"] = "Indirizzo email non valido";
  header("Location: ../login.php?error=".$_GET["error"]);
}

$user_name = mysqli_real_escape_string($conn,$_POST["username"]);
$mail = mysqli_real_escape_string($conn,$_POST["mail"]);
$pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

$pwd = hash('sha256', $pwd);

$q4_names_in_db = "SELECT Username FROM user WHERE Username='$user_name'";
$q4_mails_in_db = "SELECT Email FROM user WHERE Email='$mail'";

$name_result = Query($q4_names_in_db);
$mail_result = Query($q4_mails_in_db);

if($user_name==$name_result){
  $_GET["error"] = "Username già in uso";
  header("Location: ../login.php?error=".$_GET["error"]);
} else {
  $i4_newuser = "INSERT INTO user (Username, Pwd, Email) VALUES ('$user_name', '$pwd', '$mail')";
  $new_user_errors=UpInDel_Query($i4_newuser, "Insert");
  if ($new_user_errors == "true") {
    $_GET["success"] = "Account creato con successo";
    header("Location: ../login.php?success=".$_GET["success"]);
  }else{
    $_GET["error"] = "Si è verificato un errore";
    header("Location: ../login.php?error=".$_GET["error"]);
  }
}
?>

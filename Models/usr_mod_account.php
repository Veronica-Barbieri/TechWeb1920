<?php

  include "../Functions/DBconnection.php";
  session_start();

  $conn = OpenCon();
  if (!isset($_POST["usrname"]) || empty($_POST["usrname"])) {
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

  $user_name = mysqli_real_escape_string($conn,$_POST["usrname"]);
  $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
  $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);


  $data = array(
        "usrname" => $user_name,
        "mail" => $mail,
        "pwd" => $pwd
      );

  $query_admin = "SELECT Admin FROM user WHERE Username='".$_SESSION["Username"]."'";
  $red_page = mysqli_fetch_assoc(Query($query_admin));
  $data["pwd"] = hash('sha256', $data["pwd"]);

  if($data["usrname"]!="" || $data["mail"]!="" || $data["pwd"]!=""){
    $u4_users = "UPDATE user SET";
    $u4_mazzo = "UPDATE mazzo SET";
    if($data["usrname"] && $data["usrname"]!=""){
      $u4_users .= " Username='{$data["usrname"]}'";
      $u4_mazzo .= " Autore='{$data["usrname"]}'";
      if($data["mail"] && $data["mail"]!="" || $data["pwd"] && $data["pwd"]!="")
        $u4_users .= ",";
    }
    if($data["mail"] && $data["mail"]!=""){
      $u4_users .= " Email='{$data["mail"]}'";
      if($data["pwd"] && $data["pwd"]!="")
        $u4_users .= ",";
    }
    if($data["pwd"] && $data["pwd"]!=""){
      $u4_users .= " Pwd='{$data["pwd"]}'";
    }
    $u4_users .= " WHERE Username='{$_SESSION["Username"]}'";
    $u4_mazzo .= " WHERE Autore='{$_SESSION["Username"]}'";

      /*echo $u4_users;
      echo "<br>";
      echo $u4_mazzo;
      echo "<br>";
      echo $red_page["Admin"];
      echo "<br>";
      echo $query_admin;*/
    $errors_users = UpInDel_Query($u4_users, "Update");
    $errors_mazzo = UpInDel_Query($u4_mazzo, "Update");

    if($data["usrname"]!="")
      $_SESSION["Username"] = $data["usrname"];

    if($data["usrname"] && $data["usrname"]!=""){
      if ($errors_users == "true" && $errors_mazzo == "true") {
        if ($red_page["Admin"] == 1) {
          $_GET["success"] = "101";
          header("Location: ../admin_page.php?success=".$_GET["success"]);
        }else{
          $_GET["success"] = "101";
          header("Location: ../usr_page.php?success=".$_GET["success"]);
        }
      }
    }else{
      if ($errors_users == "true") {
        if ($red_page["Admin"] == 1) {
          $_GET["success"] = "101";
          header("Location: ../admin_page.php?success=".$_GET["success"]);
        }else{
          $_GET["success"] = "101";
          header("Location: ../usr_page.php?success=".$_GET["success"]);
        }
      }
    }
  } else {
    if ($red_page["Admin"] == 1) {
      header("Location: ../admin_page.php"); //qui viene inserita una funzione javascript che segnala di riempire i campi
    }else{
      header("Location: ../usr_page.php"); //qui viene inserita una funzione javascript che segnala di riempire i campi
    }
  }
?>

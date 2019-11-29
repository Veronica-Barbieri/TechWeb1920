<?php

  include "../DBconnection.php";
  session_start();

  $data = array(
        "usrname" => $_POST["usrname"],
        "mail" => $_POST["mail"],
        "pwd" => $_POST["pwd"]
      );

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

    if($data["usrname"]!="")
      $_SESSION["Username"] = $data["usrname"];

    $errors_users = UpdateOrInsert_Query($u4_users, "Update");
    $errors_mazzo = UpdateOrInsert_Query($u4_mazzo, "Update");

    header("Location: ../usr_page.php");
  } else {
    header("Location: ../usr_page.php"); //qui viene inserita una funzione javascript che segnala di riempire i campi
  }
?>

<?php

include "DBconnection.php";

$logging_user = $_POST['username'];

$usr_check = "SELECT * FROM user WHERE Username = '$logging_user' ";

$q4_usr_check = Query($usr_check);

while($row = mysqli_fetch_assoc($q4_usr_check)){
  $usr = $row;
}

if(isset($usr) && $_POST["username"] == $usr["Username"] && $_POST["pwd"] == $usr["Pwd"]){
  session_start();
  $_SESSION["Username"] = $usr["Username"];
  header('Location: usr_page.php');
} else {
  header('Location: login.php'); //ci va un messaggio di errore ritornato)
}
//controllo su user in database
//creazione di session
//se user non in database, messaggio di errore (passati in get)

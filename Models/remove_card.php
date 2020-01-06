<?php

session_start();

$id_to_remove = $_GET["id"];

$_SESSION["deck"] = array_diff($_SESSION["deck"], array($id_to_remove));

if($_SESSION["deck"]==NULL){
  $_SESSION["deck"]=array();
}
?>

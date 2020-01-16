<?php

include "../Functions/DBconnection.php";

session_start();

$id_deck = $_GET["id"];

$d4_mazzo = "DELETE FROM mazzo WHERE Id='$id_deck'";

$errors_del_mazzo = UpInDel_Query($d4_mazzo, "Delete");

$d4_carte_in_mazzo = "DELETE FROM carte_in_mazzo WHERE Id_mazzo='$id_deck'";

$errors_del_carteinmazzo = UpInDel_Query($d4_carte_in_mazzo, "Delete");

?>

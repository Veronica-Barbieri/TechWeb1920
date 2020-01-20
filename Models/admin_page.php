<?php
error_reporting(E_ALL && ~E_NOTICE);

include 'Functions/DBconnection.php';
include 'Functions/search.php';

session_start();

$q_num_user = query("SELECT COUNT(Username) AS num FROM user");
$q_num_decks = query("SELECT COUNT(Id) AS num FROM mazzo");
$q_num_cards = query("SELECT COUNT(Id) AS num FROM carta");

$num_user = mysqli_fetch_assoc($q_num_user);
$num_decks = mysqli_fetch_assoc($q_num_decks);
$num_cards = mysqli_fetch_assoc($q_num_cards);

 ?>

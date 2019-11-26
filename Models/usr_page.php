<?php
error_reporting(E_ALL && ~E_NOTICE);

include 'DBconnection.php';
include 'Functions/search.php';

session_start();

$curr_usr = $_SESSION["Username"];

if (intval($_GET["page"])) {
  $cur_usr_page = intval($_GET["page"]);
}else {
  $cur_usr_page = 1;
}

//definisco la query per i mazzi
// N.B.: aggiungere il controllo sul singolo utente
$query_usr_decks = "SELECT *  FROM mazzo WHERE Autore = '$curr_usr'";
//effettuo la query sulla tabella dei mazzi per recuperarne le informzioni
$query_usr_decks_res = Query($query_usr_decks);

//converto l'oggetto tornato da query in un array che contiene i mazzi
while ($row = mysqli_fetch_assoc($query_usr_decks_res))
{
  $usr_deck[] = $row;
}
//calcolo il totale dei mazzi per poter sapere di quante pagine fare il display
$num_pages = calc_num_pages($usr_deck, $disp_deck);
 ?>

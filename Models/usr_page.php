<?php
error_reporting(E_ALL && ~E_NOTICE);

include 'DBconnection.php';
include 'Functions/search.php';

if (intval($_GET["page"])) {
  $cur_usr_page = intval($_GET["page"]);
}else {
  $cur_usr_page = 1;
}

//definisco la query per i mazzi
// NB: aggiungere il controllo sul singolo utente
$query_usr_decks = "SELECT Id, Nome, Autore, Tipo, Colore_verde, Colore_rosso, Colore_blu, Colore_nero, Colore_bianco, Upvote  FROM mazzo"/*WHERE Autore = "logged user"*/;
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

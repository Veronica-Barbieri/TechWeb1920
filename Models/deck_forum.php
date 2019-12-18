<?php
error_reporting(E_ALL && ~E_NOTICE);

include 'Functions/DBconnection.php';
include 'Functions/search.php';

//calcolo l'indice della pagina
if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
} else {
  $cur_page = 1;
}

//definisco la query per i mazzi
$query_decks = "SELECT Id, Nome, Autore, Tipo, Colore_verde, Colore_rosso, Colore_blu, Colore_nero, Colore_bianco  FROM mazzo";
//effettuo la query sulla tabella dei mazzi per recuperarne le informzioni
$query_decks_res = Query($query_decks);

//converto l'oggetto tornato da query in un array che contiene i mazzi
while ($row = mysqli_fetch_assoc($query_decks_res))
{
  $deck_all[] = $row;
}

//calcolo il totale dei mazzi per poter sapere di quante pagine fare il display
$num_pages = calc_num_pages($deck, $disp_deck);


/*Costruzione query per ricera*/
if (isset($_GET) && !empty($_GET)) {
  $query_decks .= deck_name_color_query($_GET);
}

$query_decks_res = Query($query_decks);

while ($row = mysqli_fetch_assoc($query_decks_res))
{
  $deck[] = $row;
}
//calcolo il totale dei mazzi per poter sapere di quante pagine fare il display
$num_pages = calc_num_pages($deck, $disp_deck);

?>

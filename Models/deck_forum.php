<?php

include 'DBconnection.php';

//calcolo l'indice della pagina
if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
} else {
  $cur_page = 1;
}

//effettuo la query sulla tabella dei mazzi per recuperarne le informzioni
$query_decks = Query("SELECT Id, Nome, Autore, Tipo, Colore_verde, Colore_rosso, Colore_blu, Colore_nero, Colore_bianco, Upvote  FROM mazzo");

//converto l'oggetto tornato da query in un array che contiene i mazzi
while ($row = mysqli_fetch_assoc($query_decks))
{
  $deck[] = $row;
}

//calcolo il totale dei mazzi per poter sapere di quante pagine fare il display
$tot_decks = count($deck);

$num_pages = ($tot_decks % $disp_deck)? intdiv($tot_decks, $disp_deck)+1 : intdiv($tot_decks, $disp_deck);

?>

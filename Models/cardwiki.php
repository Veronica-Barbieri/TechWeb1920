<?php
error_reporting(E_ALL && ~E_NOTICE);
include 'DBconnection.php';
include 'Functions/search.php';

if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
}else {
  $cur_page = 1;
}

$query_cards = Query("SELECT * FROM carta");

while ($row = mysqli_fetch_assoc($query_cards))
{
  $result[] = $row;
}

//calcolo del numero di carte da visualizzare
$num_pages = calc_num_pages($result, $disp_card);

$q4_cards = "SELECT Id, Nome, Img_path FROM carta";

// aggiunta dei fitri alla query per estrarre le carte
if($_GET && $_GET != "")
$q4_cards .= card_name_color_query($_GET);

//effettuo la query sul database usando la funzione Query definita nel file DBconnection
$card_general = Query($q4_cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}

//calcolo del num. di carte da visualizzare e del num. fi pagine l'applicazione dei filtri
$num_pages = calc_num_pages($cards, $disp_card);
 ?>

<?php

include 'DBconnection.php';

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

//calcolo il numero totale di carte presenti nel database
$tot_cards = count($result);

$num_pages = ($tot_cards % $disp_card)? intdiv($tot_cards, $disp_card)+1 : intdiv($tot_cards, $disp_card);

$q4_cards = "SELECT Id, Nome, Img_path FROM carta";

//effettuo la query sul database usando la funzione Query che è stata definita nel file DBconnection
$card_general = Query($q4_cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}

 ?>

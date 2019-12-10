<?php
error_reporting(E_ALL && ~E_NOTICE);
include 'Functions/DBconnection.php';
include 'Functions/search.php';

$q4_cards = "SELECT Id, Nome, Img_path, Tipo, Costo_bianco, Costo_nero, Costo_rosso, Costo_verde, Costo_blu, Costo_nocolor FROM carta";

$card_general = Query($q4_cards);

while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}
 ?>

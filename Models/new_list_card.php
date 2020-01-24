<?php
error_reporting(E_ALL && ~E_NOTICE);
include '../Functions/DBconnection.php';
include 'Functions/search.php';

$init=intval($_GET["init"]);
$limit=intval($_GET["limit"]);

/*$q4_cards = "SELECT Id, Nome, Img_path, Tipo, Costo_bianco, Costo_nero, Costo_rosso, Costo_verde, Costo_blu, Costo_nocolor FROM carta";
$card_general = Query($q4_cards);
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}
$curr_card = $cards[$id];*/

$q4_cards = "SELECT Id, Nome, Img_path, Tipo, Costo_bianco, Costo_nero, Costo_rosso, Costo_verde, Costo_blu, Costo_nocolor
            FROM carta
            ORDER BY Id
            LIMIT ".$init.",".$limit;
$card_general = Query($q4_cards);
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}

$html="";

foreach ($cards as $key => $value) {
  $html.='<ul class="card_box">
            <li><h1 class="card_title">'.$value["Nome"].'</h1></li>
            <li><img class="card_img" src="'.$value["Img_path"].'" alt="Immagine della carta '.$value["Nome"].'">
            <li>
              <button class="btn" type="button" name="add_card" onclick="return num_card_popup(\''.$value["Id"].'\', \''.$value["Nome"].'\')">Aggiungi al mazzo</button>
            </li>
          </ul>';
}

echo $html;


?>

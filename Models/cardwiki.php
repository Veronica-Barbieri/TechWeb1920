<?php
error_reporting(E_ALL && ~E_NOTICE);
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

//manipolazione array posix_get
if($_GET) {
  $aux_get = array();
  if($_GET["nomecarta"] && $_GET["nomecarta"]!="") $aux_get["Nome"] = $_GET["nomecarta"];
  if($_GET["bianco"]) $aux_get["bianco"] = "Bianco";
  if($_GET["blu"]) $aux_get["blu"] =  "Blu";
  if($_GET["nero"]) $aux_get["nero"] = "Nero";
  if($_GET["rosso"]) $aux_get["rosso"] = "Rosso";
  if($_GET["verde"]) $aux_get["verde"] = "Verde";
}

if ($aux_get && $aux_get != "") $q_4cards .= " WHERE ";
if ($aux_get["Nome"]) {
  $q_4cards = $q_4cards.'Nome="'.$aux_get["Nome"].'"';
  foreach ($aux_get as $key => $value) {
    if($key != "Nome") {
      $q_4cards = $q_4cards.' OR Colore="'.$value.'"';
    }
  }
} else {
  foreach ($aux_get as $value) {
    if($value != end($aux_get)) {
      $q_4cards = $q_4cards.'Colore="'.$value.'" OR ';
    } else {
      $q_4cards = $q_4cards.'Colore="'.$value.'"';
    }
  }
}

//effettuo la query sul database usando la funzione Query che è stata definita nel file DBconnection
$card_general = Query($q4_cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}

$tot_cards = count($cards); /*da implementare il count con query su database*/

$num_pages = ($tot_cards % $disp_card)? intdiv($tot_cards, $disp_card)+1 : intdiv($tot_cards, $disp_card);

 ?>

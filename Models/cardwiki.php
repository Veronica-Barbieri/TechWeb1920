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
//Costruzione query x database in base ai filtri
if($_GET) {
  $aux_get = array();
  $aux_re = array();
  if($_GET["nomecarta"] && $_GET["nomecarta"]!="") {
    $aux_get["Nome"] = $_GET["nomecarta"];
    $aux_re["Nome"] = $_GET["nomecarta"];
  }
if($_GET["bianco"]){ $aux_get["bianco"] = "Bianco"; /*$aux_re[] = "Bianco";*/ }
if($_GET["blu"]) { $aux_get["blu"] =  "Blu"; /*$aux_re[] = "Blu";*/}
if($_GET["nero"]) { $aux_get["nero"] = "Nero"; /*$aux_re[] = "Nero";*/}
if($_GET["rosso"]) { $aux_get["rosso"] = "Rosso"; /*$aux_re[] = "Rosso";*/}
if($_GET["verde"]) { $aux_get["verde"] = "Verde"; /*$aux_re[] = "Verde";*/}
}

if ($aux_get && $aux_get != "") $q4_cards = $q4_cards." WHERE ";
if ($aux_get["Nome"]) {
  $q4_cards = $q4_cards.'Nome="'.$aux_get["Nome"].'"';
  foreach ($aux_get as $key => $value) {
    if($key != "Nome") {
      $q4_cards = $q4_cards.' OR Colore="'.$value.'"';
    }
  }
} else {
  foreach ($aux_get as $value) {
    if($value != end($aux_get)) {
      $q4_cards = $q4_cards.'Colore="'.$value.'" OR ';
    } else {
      $q4_cards = $q4_cards.'Colore="'.$value.'"';
    }
  }
}

//effettuo la query sul database usando la funzione Query che è stata definita nel file DBconnection
$card_general = Query($q4_cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}
$tot_cards = count($cards);
echo $tot_cards;
$num_pages = ($tot_cards % $disp_card)? intdiv($tot_cards, $disp_card)+1 : intdiv($tot_cards, $disp_card);
echo $num_pages;
 ?>

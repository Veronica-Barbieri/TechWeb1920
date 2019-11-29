<?php

include "Functions/DBconnection.php";

//salvo l'id del singolo mazzo passato in GET
$mazzo = $_GET["id"];

//Effettuo la query per il recupero delle informazioni sul mazzo dal database
$q4_deck_info = Query("SELECT Nome, Autore, Tipo FROM mazzo WHERE Id = '$mazzo'");

//Converto l'oggetto ad array per poterlo utilizzare
while($row = mysqli_fetch_assoc($q4_deck_info)){
  $info_deck = $row;
}

/*Effettuo una query sull'unione delle tabelle carte_in_mazzo e carta per poter recuperare unicamente le
informazioni delle carte presenti nel mazzo che si vuole visualizzare*/
$q4_card_to_search = Query("SELECT Id_mazzo, Id, Nome, Artista, Tipo, Q_ta, Img_path FROM (carta JOIN carte_in_mazzo ON carta.Id = carte_in_mazzo.Id_carta) WHERE Id_mazzo = '$mazzo'" );

//Converto l'oggetto ad array per poterlo utilizzare
while($row = mysqli_fetch_assoc($q4_card_to_search)){
  $cards_in_deck[] = $row;
}

//Preparo un array di supporto per determinare la presenza o meno di un tipo di carta specifico nel mazzo
$tipo_in_mazzo = array(
                    'Artefatto' => false,
                    'Creatura' => false,
                    'Incantesimo' => false,
                    'Istantanea' => false,
                    'Planeswalker' => false,
                    'Stregoneria' => false,
                    'Terra' => false,
                    'Tribale' => false
                  );

//Controllo le carte presenti nell'array per determinare la presenza o meno di un tipo di carta specifico nel mazzo
foreach($cards_in_deck as $carta => $value){
  if($value["Tipo"] == 'Artefatto')
    $tipo_in_mazzo["Artefatto"] = true;
  if($value["Tipo"] == 'Creatura')
    $tipo_in_mazzo["Creatura"] = true;
  if($value["Tipo"] == 'Incantesimo')
    $tipo_in_mazzo["Incantesimo"] = true;
  if($value["Tipo"] == 'Istantanea')
    $tipo_in_mazzo["Istantanea"] = true;
  if($value["Tipo"] == 'Planeswalker')
    $tipo_in_mazzo["Plameswalker"] = true;
  if($value["Tipo"] == 'Stregoneria')
    $tipo_in_mazzo["Stregoneria"] = true;
  if($value["Tipo"] == 'Terra')
    $tipo_in_mazzo["Terra"] = true;
  if($value["Tipo"] == 'Tribale')
    $tipo_in_mazzo["Tribale"] = true;
};
 ?>

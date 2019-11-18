<?php

include "DBconnection.php";

$id = intval($_GET["id"]);

$q4_card_info= Query("SELECT Nome, Colore, Costo_verde, Costo_rosso, Costo_blu, Costo_bianco, Costo_nero, Costo_nocolor, Tipo, Descrizione, Flavour_text, Espansione, Rarita, Artista, DEF, ATK, img_path FROM carta WHERE Id = '$id'");

$card_info = mysqli_fetch_assoc($q4_card_info);

//variabile utilizzata per verificare se è necessario l'output di eventuali costi della carta
$global_costo = $card_info["Costo_verde"]+$card_info["Costo_rosso"]+$card_info["Costo_blu"]+$card_info["Costo_nero"]+$card_info["Costo_bianco"]+$card_info["Costo_nocolor"];

?>

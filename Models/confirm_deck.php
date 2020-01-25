<?php

include "../Functions/DBconnection.php";

session_start();

$cards_to_save = $_SESSION["deck"];
$curr_usr = $_SESSION["Username"];

$deck_name = $_GET["deck_name"];
$deck_type = $_GET["type"];

$cards_to_save = array_count_values($cards_to_save);

if ($deck_name == ""){
  $_GET["error"] = "Il campo 'Nome' non puo' essere vuoto";
  header("Location: ../new_deck.php?error=".$_GET["error"]);
}elseif (empty($deck_type)){
  $_GET["error"] = "Il campo 'Tipo' non puo' essere vuoto";
  header("Location: ../new_deck.php?error=".$_GET["error"]);
}elseif(count($cards_to_save) == 0){
  $_GET["error"] = "Inserire almeno una carta nel mazzo";
  header("Location: ../new_deck.php?error=".$_GET["error"]);
} else {
  foreach ($cards_to_save as $key) {
    $key++;
  }

  if(isset($_GET["bianco"])){
    $bianco = 1;
  } else {
    $bianco = 0;
  }

  if(isset($_GET["nero"])){
    $nero = 1;
  } else {
    $nero = 0;
  }

  if(isset($_GET["verde"])){
    $verde = 1;
  } else {
    $verde = 0;
  }

  if(isset($_GET["rosso"])){
    $rosso = 1;
  } else {
    $rosso = 0;
  }

  if(isset($_GET["blu"])){
    $blu = 1;
  } else {
    $blu = 0;
  }

  $i4_new_deck = "INSERT INTO mazzo (Nome, Autore, Tipo, Colore_rosso, Colore_verde, Colore_blu, Colore_nero, Colore_bianco) VALUES
                  ('$deck_name', '$curr_usr', '$deck_type', '$rosso', '$verde', '$blu', '$nero', '$bianco')";

  $deck_insert_result = UpInDel_Query($i4_new_deck, "Insert");

  $q4_new_deck_id = Query("SELECT max(id) AS id FROM mazzo");

  $new_deck_id = mysqli_fetch_assoc($q4_new_deck_id);

  foreach ($cards_to_save as $key => $value) {
    $i4_new_carte_in_mazzo = "INSERT INTO carte_in_mazzo (Id_mazzo, Id_carta, Q_ta) VALUES ";

    $i4_new_carte_in_mazzo .= "('".$new_deck_id["id"]."','".$key."','".$value."')";
    $inmazzo_insert_result[] = UpInDel_Query($i4_new_carte_in_mazzo, "Insert");
  }


  unset($_SESSION["deck"]);
  $_GET["success"] = "Mazzo creato con successo";
  header("Location: ../usr_page.php?success=".$_GET["success"]);
}
?>

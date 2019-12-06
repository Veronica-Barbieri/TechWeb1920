<?php

include "Functions/DBconnection.php";
//query da effettuare sul database (deve essere corretta per ricercare i colori)
$q_4cards = "SELECT Nome, Img_path, Id, Colore FROM carta";

//effettuo la query sul database usando la funzione Query che è stata definita nel file DBconnection
$card_general = Query($q_4cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)){
  $button[] = $row_card;
}

//creo degli array, uno per ogni colore
$r = array();
$v = array();
$bl = array();
$n = array();
$bi = array();

//divido le carte in $button per colore, ciascuna in un proprio array
foreach ($button as $card) {
  if($card['Colore'] == 'Verde'){
    $v[] = $card;
  }
  if($card['Colore'] == 'Rosso'){
    $r[] = $card;
  }
  if($card['Colore'] == 'Blu'){
    $bl[] = $card;
  }
  if($card['Colore'] == 'Nero'){
    $n[] = $card;
  }
  if($card['Colore'] == 'Bianco'){
    $bi[] = $card;
  }
}

//divido in sotto-array di 3 elementi il risultato ritornato dalla query per ogni colore
$Verde = array_chunk($v, 3);
$Rosso = array_chunk($r, 3);
$Blu = array_chunk($bl, 3);
$Nero = array_chunk($n, 3);
$Bianco = array_chunk($bi, 3);

//assemblo un array con il primo frammento di ogni array, in modo da avere un set di carte
//per ogni colore
$trisample = array($Verde[0], $Rosso[0], $Blu[0], $Nero[0], $Bianco[0]);

/*----------------------------------------------------------------------------------------*/
/*Gestione dei mazzi*/
$q_4decks = "SELECT Id, Nome, Autore, Tipo, Colore_verde, Colore_rosso, Colore_blu, Colore_nero, Colore_bianco, Upvote  FROM mazzo";

$deck_general = Query($q_4decks);

while ($row_deck = mysqli_fetch_assoc($deck_general)){
  $all_decks[] = $row_deck;
}

$deck = array($all_decks[0], $all_decks[1], $all_decks[2]);

$Colori = array('Mana Verde','Mana Rosso','Mana Blu','Mana Nero','Mana Bianco');

$ManaColors = array ('Green_Mana.png','Red_Mana.png','Blue_Mana.png','Black_Mana.png','White_Mana.png')


?>

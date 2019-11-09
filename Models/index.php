<?php

include "DBconnection.php";
//query da effettuare sul database (deve essere corretta per ricercare i colori)
$q_4cards = "SELECT Nome, Img_path, Id FROM carta";

//effettuo la query sul database usando la funzione Query che è stata definita nel file DBconnection
$card_general = Query($q_4cards);

//salvo in un array il risultato della mia query
while ($row_card = mysqli_fetch_assoc($card_general)){
  $button[] = $row_card;
}
//divido in sotto-array di 3 elementi il risultato ritornato dalla query
$almost_trisample = array_chunk($button, 3);

/*prendo i primi 5 sotto-array di $almost_trisample e li salvo in trisample, dopodichè la gestione della variabile viene
presa a carico dal file Views/index.php */
$trisample = array($almost_trisample[0], $almost_trisample[1], $almost_trisample[2], $almost_trisample[3], $almost_trisample[4]);

$q_4decks = "SELECT Nome, Autore, Tipo FROM mazzo";

$deck_general = Query($q_4decks);

while ($row_deck = mysqli_fetch_assoc($deck_general)){
  $all_decks[] = $row_deck;
}

$deck = array($all_decks[0], $all_decks[1], $all_decks[2]);

/*
$deck = array (
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),

            array(
              "nome" => "nome deck 2",
              "autore" => "nome autore deck 2",
              "param" => "caratteristiche deck 2",
              "note" => "qui verranno scritte le note sul deck 2"
            ),

            array(
              "nome" => "nome deck 3",
              "autore" => "nome autore deck 3",
              "param" => "caratteristiche deck 3",
              "note" => "qui verranno scritte le note sul deck 3"
            )
);
*/
?>

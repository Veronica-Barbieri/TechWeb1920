<?php
if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
}else {
  $cur_page = 1;
}

/*Vedi NOTA BENE in Views/deck_view.php*/
$tot_decks = 5;

$num_pages = ($tot_decks % $disp_deck)? intdiv($tot_decks, $disp_deck)+1 : intdiv($tot_decks, $disp_deck);

$deck = array (
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 2",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 3",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 4",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 5",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 6",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 7",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 8",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 9",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 10",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            ),
            array(
              "nome" => "nome deck 1",
              "autore" => "nome autore deck 1",
              "param" => "caratteristiche deck 1",
              "note" => "qui verranno scritte le note sul deck 1"
            )
);
 ?>
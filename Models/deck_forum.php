<?php

if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
}else {
  $cur_page = 1;
}

$tot_decks = 25;

$num_pages = ($tot_decks % $disp_deck)? intdiv($tot_decks, $disp_deck)+1 : intdiv($tot_decks, $disp_deck);


$deck = array (
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

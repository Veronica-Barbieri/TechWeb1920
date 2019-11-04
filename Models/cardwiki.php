<?php

if (intval($_GET["page"])) {
  $cur_page = intval($_GET["page"]);
}else {
  $cur_page = 1;
}

$tot_cards = 25; /*da implementare il count con query su database*/

$num_pages = ($tot_cards % $disp_card)? intdiv($tot_cards, $disp_card)+1 : intdiv($tot_cards, $disp_card);

/*da implementare la selezione delle carte con query su database*/
$cards = array (
            array( //info carta singola
              "nome" => "carta1" ,
              "img" => "Resources/carta1.jpg"
            ),
            array( //info carta singola
              "nome" => "carta2" ,
              "img" => "Resources/carta2.jpg"
            ),
            array( //info carta singola
              "nome" => "carta3" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta4" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta5" ,
              "img" => "Resources/carta1.jpg"
            ),
            array( //info carta singola
              "nome" => "carta6" ,
              "img" => "Resources/carta1.jpg"
            ),
            array( //info carta singola
              "nome" => "carta7" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta8" ,
              "img" => "Resources/carta2.jpg"
            ),
            array( //info carta singola
              "nome" => "carta9" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta10" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta11" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta12" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta13" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta14" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta15" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta16" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta17" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta18" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta19" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta20" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta21" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta22" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta23" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta24" ,
              "img" => "Resources/carta3.jpg"
            ),
            array( //info carta singola
              "nome" => "carta25" ,
              "img" => "Resources/carta3.jpg"
            )
        );
 ?>

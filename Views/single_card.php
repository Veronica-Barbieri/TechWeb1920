<!-- bisogna aggiungere un bottone che riporti l'utente alla pagina della wiki
delle carte senza che prema back dal browser -->

<div id="caratteristiche">
  <h1>Caratteristiche carta</h1>
  <ul>
    <li>Nome carta: <?php echo $card_info["Nome"];?></li>
    <li><?php
    //controllo i costi delle carte e stampo le immagini che li rappresentano
      if($global_costo!=0){
        echo "Color: ";

        if($card_info["Costo_nocolor"]!=0){
          echo "<img src='Resources/nocost".$card_info["Costo_nocolor"].".png' alt='".$card_info["Costo_nocolor"]." unit&agrave di costo senza colore'>";
        };

        if($card_info["Costo_verde"]!=0){
          $v=0;
          while($v!=$card_info["Costo_verde"]){
            echo "<img src='Resources/Green_Mana.png' alt='Un unit&agrave di costro verde'>";
            $v++;
          }
        };

        if($card_info["Costo_rosso"]!=0){
          $r=0;
          while($r!=$card_info["Costo_rosso"]){
            echo "<img src='Resources/Red_Mana.png' alt='Un unit&agrave di costo rosso'>";
            $r++;
          }
        };

        if($card_info["Costo_blu"]!=0){
          $bl=0;
          while($bl!=$card_info["Costo_blu"]){
            echo "<img src='Resources/Blue_Mana.png' alt='Un unit&agrave di costo blu'>";
            $bl++;
          }
        };

        if($card_info["Costo_nero"]!=0){
          $n=0;
          while($n!=$card_info["Costo_nero"]){
            echo "<img src='Resources/Black_Mana.png' alt='Un unit&agrave di costo nero'>";
            $n++;
          }
        };

        if($card_info["Costo_bianco"]!=0){
          $bi=0;
          while($bi!=$card_info["Costo_bianco"]){
            echo "<img src='Resources/White_Mana.png' alt='Un unit&agrave di costo bianco'>";
            $bi++;
          };
        };
      };
    ?></li>
    <li>Tipo: <?php echo $card_info["Tipo"];?></li>
    <?php if($card_info["Descrizione"])
    echo "<li>Descrizione: ".$card_info["Descrizione"]."</li>";
    ?>
    <?php if($card_info["Flavour_text"])
    echo "<li>Flavour text: ".$card_info["Flavour_text"]."</li>";
    ?>
    <li>Espansione: <?php echo $card_info["Espansione"];?></li>
    <li>Rarit&agrave: <?php echo $card_info["Rarita"]; ?></li>
    <li>Artista immagine: <?php echo $card_info["Artista"];?></li>
    <?php
      if($card_info["ATK"])
    echo "<li>Valore attacco: ".$card_info["ATK"]."</li>";
      if($card_info["DEF"])
    echo "<li>Valore difesa: ".$card_info["DEF"]."</li>";
    ?>
  </ul>
  <img xml:lang="en" id="<?php echo "Immagine della carta ".$card_info["Nome"] ?>" src="<?php echo $card_info["img_path"]?>">
</div>

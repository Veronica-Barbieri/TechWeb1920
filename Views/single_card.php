<!-- bisogna aggiungere un bottone che riporti l'utente alla pagina della wiki
delle carte senza che prema back dal browser -->
<div class="content">
<div id="caratteristiche">
  <h1>Caratteristiche carta</h1>
  <ul>
    <li>Nome carta: <?php echo $card_info["Nome"];?></li>
    <li><?php
    //controllo i costi delle carte e stampo le immagini che li rappresentano
      if($global_costo!=0) { ?>
        <p>Color:
        <?php } if($card_info["Costo_nocolor"]!=0) { ?>
          <img src='Resources/nocost<?php echo $card_info["Costo_nocolor"];?>.png' alt='"<?php echo $card_info["Costo_nocolor"]?> unit&agrave di costo senza colore'>
        <?php  };

        if($card_info["Costo_verde"]!=0){
          $v=0;
          while($v!=$card_info["Costo_verde"]){ ?>
            <img src='Resources/Green_Mana.png' alt='Un unit&agrave di costro verde'>
            <?php $v++;
          }
        };

        if($card_info["Costo_rosso"]!=0){
          $r=0;
          while($r!=$card_info["Costo_rosso"]){ ?>
            <img src='Resources/Red_Mana.png' alt='Un unit&agrave di costo rosso'>
            <?php $r++;
          }
        };

        if($card_info["Costo_blu"]!=0){
          $bl=0;
          while($bl!=$card_info["Costo_blu"]){ ?>
            <img src='Resources/Blue_Mana.png' alt='Un unit&agrave di costo blu'>
            <?php $bl++;
          }
        };

        if($card_info["Costo_nero"]!=0){
          $n=0;
          while($n!=$card_info["Costo_nero"]){ ?>
            <img src='Resources/Black_Mana.png' alt='Un unit&agrave di costo nero'>
            <?php $n++;
          }
        };

        if($card_info["Costo_bianco"]!=0){
          $bi=0;
          while($bi!=$card_info["Costo_bianco"]){ ?>
            <img src='Resources/White_Mana.png' alt='Un unit&agrave di costo bianco'>
            <?php $bi++;
          };
        };
    ?></p>
  </li>
    <li>Tipo: <?php echo $card_info["Tipo"];?></li>
    <?php if($card_info["Descrizione"]) { ?>
    <li>Descrizione: <?php echo $card_info["Descrizione"];?></li>
    <?php } if($card_info["Flavour_text"]) { ?>
    <li>Flavour text: <?php echo $card_info["Flavour_text"];?></li>
    <?php } ?>
    <li>Espansione: <?php echo $card_info["Espansione"];?></li>
    <li>Rarit&agrave: <?php echo $card_info["Rarita"]; ?></li>
    <li>Artista immagine: <?php echo $card_info["Artista"];?></li>
    <?php
      if($card_info["ATK"]) { ?>
        <li>Valore attacco: <?php echo $card_info["ATK"];?></li>
    <?php } if($card_info["DEF"]) { ?>
    <li>Valore difesa: <?php echo $card_info["DEF"];?></li>
    <?php } ?>
  </ul>
  <img xml:lang="en" id="Immagine della carta<?php echo $card_info["Nome"];?>" src="<?php echo $card_info["img_path"];?>">
</div>
</div>

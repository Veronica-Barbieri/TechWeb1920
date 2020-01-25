<!-- bisogna aggiungere un bottone che riporti l'utente alla pagina della wiki
delle carte senza che prema back dal browser -->
<div class="content" id="content">
<div id="caratteristiche">
  <h1><?php echo $card_info["Nome"];?></h1>
  <img class="single_card_img" xml:lang="en" src="<?php echo $card_info["img_path"];?>" alt="<?php echo "Immagine della carta"; ?>" />
  <div class="desc_card box">
    <ul>
      <li>
        <span class="desc_sez_pre">Nome carta:</span>
        <span class="desc_sez">
          <?php echo $card_info["Nome"];?>
        </span>
      </li>
      <li><?php
      //controllo i costi delle carte e stampo le immagini che li rappresentano
      if($global_costo!=0) { ?>
        <p><span class="desc_sez_pre">Colore:</span>
          <span class="desc_sez">
        <?php } if($card_info["Costo_nocolor"]!=0) { ?>
          <img src='Resources/nocost<?php echo $card_info["Costo_nocolor"];?>.png' alt='"<?php echo $card_info["Costo_nocolor"]?> unit&agrave; di costo senza colore' />
        <?php  };

        if($card_info["Costo_verde"]!=0){
          $v=0;
          while($v!=$card_info["Costo_verde"]){ ?>
            <img src='Resources/Green_Mana.png' alt='Un unit&agrave; di costro verde' />
            <?php $v++;
          }
        };

        if($card_info["Costo_rosso"]!=0){
          $r=0;
          while($r!=$card_info["Costo_rosso"]){ ?>
            <img src='Resources/Red_Mana.png' alt='Un unit&agrave; di costo rosso' />
            <?php $r++;
          }
        };

        if($card_info["Costo_blu"]!=0){
          $bl=0;
          while($bl!=$card_info["Costo_blu"]){ ?>
            <img src='Resources/Blue_Mana.png' alt='Un unit&agrave; di costo blu' />
            <?php $bl++;
          }
        };

        if($card_info["Costo_nero"]!=0){
          $n=0;
          while($n!=$card_info["Costo_nero"]){ ?>
            <img src='Resources/Black_Mana.png' alt='Un unit&agrave; di costo nero' />
            <?php $n++;
          }
        };

        if($card_info["Costo_bianco"]!=0){
          $bi=0;
          while($bi!=$card_info["Costo_bianco"]){ ?>
            <img src='Resources/White_Mana.png' alt='Un unit&agrave; di costo bianco' />
            <?php $bi++;
          };
        };
        ?>
        </span>
      </p>
      </li>
      <li>
        <span class="desc_sez_pre">Tipo:</span>
        <span class="desc_sez">
          <?php echo $card_info["Tipo"];?>
        </span>
       </li>
       <?php
       if($card_info["ATK"]) { ?>
         <li>
           <span class="desc_sez_pre">Valore attacco:</span>
           <span class="desc_sez">
             <?php echo $card_info["ATK"];?>
           </span>
         </li>
       <?php } if($card_info["DEF"]) { ?>
         <li>
           <span class="desc_sez_pre">Valore difesa:</span>
           <span class="desc_sez">
             <?php echo $card_info["DEF"];?>
           </span>
         </li>
       <?php } ?>
      <?php if($card_info["Descrizione"]) { ?>
        <li>
          <span class="desc_sez_pre">Descrizione:</span>
          <span class="desc_sez">
            <?php echo $card_info["Descrizione"];?>
          </span>
         </li>
      <?php } if($card_info["Flavour_text"]) { ?>
        <li>
          <span class="desc_sez_pre">Flavour text:</span>
          <span class="desc_sez">
            <?php echo $card_info["Flavour_text"];?>
          </span>
        </li>
      <?php } ?>
      <li>
        <span class="desc_sez_pre">Espansione:</span>
        <span class="desc_sez">
          <?php echo $card_info["Espansione"];?>
        </span>
       </li>
      <li>
        <span class="desc_sez_pre">Rarit&agrave;:</span>
        <span class="desc_sez">
          <?php echo $card_info["Rarita"]; ?>
        </span>
       </li>
      <li>
        <span class="desc_sez_pre">Artista immagine:</span>
        <span class="desc_sez">
          <?php echo $card_info["Artista"];?>
        </span>
       </li>
    </ul>
  </div>
</div>
</div>

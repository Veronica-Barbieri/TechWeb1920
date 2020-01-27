<?php
error_reporting(E_ALL && ~E_NOTICE);
include '../Functions/DBconnection.php';
include 'Functions/search.php';

session_start();

$id = $_GET["id"];
//$nome = $_GET["nome"];
$num = $_GET["num"];

$q4_cards = "SELECT Id, Nome, Img_path, Tipo, Costo_bianco, Costo_nero, Costo_rosso, Costo_verde, Costo_blu, Costo_nocolor FROM carta WHERE Id='$id'";
$card_general = Query($q4_cards);
$card_to_show = mysqli_fetch_assoc($card_general);
$nome = $card_to_show["Nome"];

$global_costo = $card_to_show["Costo_verde"]+$card_to_show["Costo_rosso"]+$card_to_show["Costo_blu"]+$card_to_show["Costo_nero"]+$card_to_show["Costo_bianco"]+$card_to_show["Costo_nocolor"];

for($i=0; $i<$num; $i++){
array_push($_SESSION["deck"], $id);
}
?>

<ul class="card_box" id="info_card_<?php echo $nome;?>">
  <li><h1><?php echo $nome ?></h1></li>
  <li><p>Quantità: <?php echo $num ?></p></li>
  <li>
    <p><?php
    //controllo i costi delle carte e stampo le immagini che li rappresentano
      if($global_costo!=0) { ?>
        <p>Costo:
        <?php } if($card_to_show["Costo_nocolor"]!=0) { ?>
          <img src='Resources/nocost<?php echo $card_to_show["Costo_nocolor"];?>.png' alt='"<?php echo $card_to_show["Costo_nocolor"]?> unit&agrave di costo senza colore' />
        <?php  };

        if($card_to_show["Costo_verde"]!=0){
          $v=0;
          while($v!=$card_to_show["Costo_verde"]){ ?>
            <img src='Resources/Green_Mana.png' alt='Un unit&agrave di costro verde'/>
            <?php $v++;
          }
        };

        if($card_to_show["Costo_rosso"]!=0){
          $r=0;
          while($r!=$card_to_show["Costo_rosso"]){ ?>
            <img src='Resources/Red_Mana.png' alt='Un unit&agrave di costo rosso' />
            <?php $r++;
          }
        };

        if($card_to_show["Costo_blu"]!=0){
          $bl=0;
          while($bl!=$card_to_show["Costo_blu"]){ ?>
            <img src='Resources/Blue_Mana.png' alt='Un unit&agrave di costo blu' />
            <?php $bl++;
          }
        };

        if($card_to_show["Costo_nero"]!=0){
          $n=0;
          while($n!=$card_to_show["Costo_nero"]){ ?>
            <img src='Resources/Black_Mana.png' alt='Un unit&agrave di costo nero' />
            <?php $n++;
          }
        };

        if($card_to_show["Costo_bianco"]!=0){
          $bi=0;
          while($bi!=$card_to_show["Costo_bianco"]){ ?>
            <img src='Resources/White_Mana.png' alt='Un unit&agrave di costo bianco' />
            <?php $bi++;
          };
        };
    ?></p>
  </li>
  <li><img class="card_img" xml:lang="en" id="Immagine della carta<?php echo $card_to_show["Nome"];?>" src="<?php echo $card_to_show["Img_path"];?>" /></li>
  <li>
    <button class="btn" type="button" name="delete" onclick="remove_card_deck('info_card_<?php echo $nome;?>', '<?php echo $id;?>')">Elimina dal mazzo</button>
  </li>
</ul>

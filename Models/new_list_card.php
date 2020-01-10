<?php
error_reporting(E_ALL && ~E_NOTICE);
include '../Functions/DBconnection.php';
include 'Functions/search.php';

$id = $_GET["id"];

$q4_cards = "SELECT Id, Nome, Img_path, Tipo, Costo_bianco, Costo_nero, Costo_rosso, Costo_verde, Costo_blu, Costo_nocolor FROM carta";

$card_general = Query($q4_cards);

while ($row_card = mysqli_fetch_assoc($card_general)) {
  $cards[] = $row_card;
}

$curr_card = $cards[$id];
?>
<li><h1><?php echo $curr_card["Nome"] ?></h1></li>
<li><p><?php echo $num ?></p></li>
<li><img src="<?php echo $curr_card["Img_path"] ?>" alt="Immagine della carta <?php echo $curr_card["Nome"] ?>">
<li>
  <button type="button" name="add_card" onclick="num_card_popup(<?php echo $id ?>, '<?php echo $curr_card["Nome"];?>')">Aggiungi al mazzo</button>
</li>

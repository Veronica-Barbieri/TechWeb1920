<div class="content">
<div class="deck_about">
  <h1> <?php echo $info_deck["Nome"] ?> </h1>
  <h2> <?php echo $info_deck["Autore"] ?> </h2>
  <p> <?php echo $info_deck["Tipo"] ?> </p>
</div>

<div class="deck_cards">

<!--Per ogni carta presente nel mazzo ne verifico la tipologia e ne effettuo la stampa
ordinando l'output in modo che le carte siano divise per tipologia-->

<?php if($tipo_in_mazzo["Artefatto"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Artefatto</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Artefatto") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Creatura"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Creatura</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Creatura") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Incantesimo"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Incantesimo</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Incantesimo") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Istantanea"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Istantanea</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Istantanea") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Planeswalker"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Planeswalker</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Planeswalker") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Stregoneria"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Stregoneria</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Stregoneria") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Terra"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Terra</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Terra") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img class='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>

<?php if($tipo_in_mazzo["Tribale"]==true) {
  echo "<div class='card_type'>";
  echo "<h1>Tribale</h1>";
  echo "<ul>";
  foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Tribale") {
      echo "<li>";
      echo "<p>".$value["Nome"]."</p>";
      echo "<p>".$value["Artista"]."</p>";
      echo  "<a href='single_card.php?id=".$value["Id"]."&name=".$value["Nome"]."'><img card='card_img' src=".$value["Img_path"]." alt='immagine carta'></a>";
      echo  "</li>";
      }
    }
  echo "</ul>";
  echo "</div>";
} ?>
</div>
</div>

<style>
	body{
		background:#383838;
	}
	.deck_cards li{
		padding-left: 8em;
		padding-right:8em;
		color:white;
	}
	.deck_cards ul{
		margin-bottom:2em;
	}
	.deck_cards h1,.deck_about h1,.deck_about p,.deck_about h2{
		color:cornsilk;
		font-size: 2em;
		padding-bottom: 0.5em;
	}
	.card_type ul li{
		width:auto;
		display: inline-block;
		text-align:center;
		margin:auto;
	}

</style>
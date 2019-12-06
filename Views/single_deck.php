<div class="content">
<div class="deck_about">
  <h1> <?php echo $info_deck["Nome"] ?> </h1>
  <h2> <?php echo $info_deck["Autore"] ?> </h2>
  <p class="simpleText"> <?php echo $info_deck["Tipo"] ?> </p>
</div>

<div class="deck_cards">

<!--Per ogni carta presente nel mazzo ne verifico la tipologia e ne effettuo la stampa
ordinando l'output in modo che le carte siano divise per tipologia-->

<?php if($tipo_in_mazzo["Artefatto"]==true) { ?>
  <div class='card_type'>
  <h1>Artefatto</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Artefatto") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Creatura"]==true) { ?>
  <div class='card_type'>
  <h1>Creatura</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Creatura") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Incantesimo"]==true) { ?>
  <div class='card_type'>
  <h1>Incantesimo</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Incantesimo") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Istantanea"]==true) { ?>
  <div class='card_type'>
  <h1>Istantanea</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Artefatto") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Planeswalker"]==true) { ?>
  <div class='card_type'>
  <h1>Planeswalker</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Planeswalker") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Stregoneria"]==true) { ?>
  <div class='card_type'>
  <h1>Stregoneria</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Stregoneria") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Terra"]==true) { ?>
  <div class='card_type'>
  <h1>Terra</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Terra") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

<?php if($tipo_in_mazzo["Tribale"]==true) { ?>
  <div class='card_type'>
  <h1>Tribale</h1>
  <ul>
<?php foreach ($cards_in_deck as $key => $value) {
    if ($value["Tipo"] == "Tribale") {  ?>
      <li>
      <p><?php echo $value["Nome"];?></p>
      <p><?php echo $value["Artista"];?></p>
      <a href='single_card.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"]?>'><img class="card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta'></a>
      </li>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>

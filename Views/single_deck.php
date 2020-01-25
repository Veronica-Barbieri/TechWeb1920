<div class="content" id="content">
  <div class="deck_about">
    <h1> <?php echo $info_deck["Nome"] ?> </h1>
    <h2> <?php echo $info_deck["Autore"] ?> </h2>
    <p class="simpleText"> <?php echo $info_deck["Tipo"] ?> </p>
  </div>
  <div class="deck_cards box">
    <!--Per ogni carta presente nel mazzo ne verifico la tipologia e ne effettuo la stampa
    ordinando l'output in modo che le carte siano divise per tipologia-->
    <?php if($tipo_in_mazzo["Artefatto"]==true) { ?>
      <div class='card_type'>
        <h1>Artefatti</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Artefatto") {  ?>
          <li class="card_box sd_cardbox">
          <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
          </a>
        </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Creatura"]==true) { ?>
      <div class='card_type'>
        <h1>Creature</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Creatura") {  ?>
          <li class="card_box sd_cardbox">
          <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
          </a>
        </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Incantesimo"]==true) { ?>
      <div class='card_type'>
        <h1>Incantesimi</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Incantesimo") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Istantanea"]==true) { ?>
      <div class='card_type'>
        <h1>Istantanee</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Artefatto") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Planeswalker"]==true) { ?>
      <div class='card_type'>
        <h1>Planeswalker</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Planeswalker") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Stregoneria"]==true) { ?>
      <div class='card_type'>
        <h1>Stregonerie</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Stregoneria") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Terra"]==true) { ?>
      <div class='card_type'>
        <h1>Terre</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Terra") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
    <?php if($tipo_in_mazzo["Tribale"]==true) { ?>
      <div class='card_type'>
        <h1>Tribali</h1>
        <ul>
    <?php foreach ($cards_in_deck as $key => $value) {
        if ($value["Tipo"] == "Tribale") {  ?>
          <li class="card_box sd_cardbox">
            <a class="cardLink link" href='single_card.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"]?>'>
              <p class="card_title"><?php echo $value["Nome"];?></p>
              <span class="num_card fa-stack">
                <span class="far fa-square fa-stack-2x"></span>
                <span class="fa-stack-1x"><?php echo "x".$value["Q_ta"]; ?></span>
              </span>
              <img class="card_img deck_card_img" src="<?php echo $value["Img_path"];?>" alt='immagine carta' />
            </a>
          </li>
          <?php } ?>
        <?php } ?>
        </ul>
      </div>
    <?php } ?>
  </div>
</div>

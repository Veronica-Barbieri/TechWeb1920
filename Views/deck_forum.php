<div class="content" id="content">
<form class="src_form_deck" action="deck_forum.php" method="get"><!-- da implementare la gestione del form -->
  <fieldset class="src_col1 box">
    <legend class="frm_title box">Cerca un mazzo:</legend>
    <div class="src_field_group">
      <div class="input">
        <label for="nomemazzo">Nome del mazzo</label>
        <input class="inputArea" id="nomemazzo" type="text" name="nomemazzo" value="" />
      </div>
      <div class="input">
        <label for="nomeautore">Nome dell'autore</label>
        <input class="inputArea" id="nomeautore" type="text" name="nomeautore" value="" />
      </div>
      <div>
        <input class="color_checkbox" id="white_chbox" type="checkbox" name="bianco" value="1" />
        <label class="cbox_label" for="white_chbox">
          <img src="Resources/White_Mana.png" alt="Bianco" />
        </label>
      </div>
      <div>
        <input class="color_checkbox" id="blue_chbox" type="checkbox" name="blu" value="1" />
        <label class="cbox_label" for="blue_chbox">
          <img src="Resources/Blue_Mana.png" alt="Blu" />
        </label>
      </div>
      <div>
        <input class="color_checkbox" id="black_chbox" type="checkbox" name="nero" value="1" />
        <label class="cbox_label" for="black_chbox">
          <img src="Resources/Black_Mana.png" alt="Nero" />
        </label>
      </div>
      <div>
        <input class="color_checkbox" id="red_chbox" type="checkbox" name="rosso" value="1" />
        <label class="cbox_label" for="red_chbox">
          <img src="Resources/Red_Mana.png" alt="Rosso" />
        </label>
      </div>
      <div>
        <input class="color_checkbox" id="green_chbox" type="checkbox" name="verde" value="1" />
        <label class="cbox_label" for="green_chbox">
          <img src="Resources/Green_Mana.png" alt="Verde" />
        </label>
      </div>
    </div>
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Ordina per:</label>
        <select class="src_dropdown" name="order" id="order">
          <option value="None">Nessuna scelta</option>
          <option value="Nome">Nome del mazzo</option>
          <option value="Autore">Nome dell'autore</option>
        </select>
      </div>
  <input class="formButton btn" type="submit" value="Cerca" />
  <input class="formButton btn" type="reset" name="reset" value="Resetta la ricerca" />
  </fieldset>
</form>
<div class="deck_nav">
  <div class="wiki" id="deck_list">
    <?php if($deck) {?>
    <?php foreach ($deck as $key => $value) {
      if ($key >= $disp_deck*($cur_page-1) && $key < $disp_deck*$cur_page) {
        ?>
          <a class="linkedDeck link"href="single_deck.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"];?>">
            <div class="deck_box">
            <?php if($value["Colore_verde"]) { ?>
              <img src='Resources/Green_Mana.png' alt='colore mazzo verde' />
            <?php } if($value["Colore_rosso"]) { ?>
              <img src='Resources/Red_Mana.png' alt='colore mazzo rosso' />
            <?php } if($value["Colore_blu"]) { ?>
              <img src='Resources/Blue_Mana.png' alt='colore mazzo blu' />
            <?php } if($value["Colore_nero"]) { ?>
              <img src='Resources/Black_Mana.png' alt='colore mazzo nero' />
            <?php } if($value["Colore_bianco"]) { ?>
              <img src='Resources/White_Mana.png' alt='colore mazzo bianco' />
            <?php } ?>
            <h1> <?php echo $value["Nome"]; ?> </h1>
            <p> <?php echo $value["Autore"]; ?> </p>
            <p> <?php echo $value["Tipo"]; ?> </p>
          </div>
        </a>
    <?php
      }
    } ?>
  </div>
<div class="btn_box">
  <?php if ($num_pages>=2) {
    $_GET["page"] = 1;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET);?>">
      <span class="fas fa-angle-double-left"></span>
    </a>
  <?php }
  if ($cur_page>1) {
    $_GET["page"] = $cur_page-1;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <span class="fas fa-angle-left"></span>
    </a>
  <?php }
  if ($cur_page>2) {
    $_GET["page"] = $cur_page-2;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page-2; ?>
    </a>
  <?php }
  if ($cur_page>1) {
    $_GET["page"] = $cur_page-1;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page-1; ?>
    </a>
  <?php } ?>
  <a class="nav_btn btn current_page" href="#wiki"><?php echo $cur_page; ?></a>
  <?php if ($num_pages-$cur_page>=1) {
    $_GET["page"] = $cur_page+1;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page+1; ?>
    </a>
  <?php }
  if ($num_pages-$cur_page>=2) {
    $_GET["page"] = $cur_page+2;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page+2; ?>
    </a>
  <?php }
  if ($num_pages-$cur_page>=1) {
    $_GET["page"] = $cur_page+1;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <span class="fas fa-angle-right"></span>
    </a>
  <?php }
  if ($num_pages>=2) {
    $_GET["page"] = $num_pages;?>
    <a class="nav_btn btn" href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>"> <span class="fas fa-angle-double-right"></span> </a>
  <?php } ?>
</div>
<?php } else { ?>
  <h1>NESSUN MAZZO TROVATO!</h1>
  <p>Effettuare una nuova ricerca o cliccare il pulsante resetta la ricerca per tornare all'elenco completo dei mazzi</p>
<?php } ?>
</div>
</div>

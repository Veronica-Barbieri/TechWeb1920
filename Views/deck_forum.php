<div class="content">
<form class="src_form" action="deck_forum.php" method="get"><!-- da implementare la gestione del form -->
  <fieldset class="src_col1">
    <legend for="filter">Cerca un mazzo:</legend>
    <div class="src_field_group">
      <div class="input">
        <label>Nome del mazzo</label>
        <input type="text" name="nomemazzo" value="">
      </div>
      <div class="input">
        <label>Nome dell'autore</label>
        <input type="text" name="nomeautore" value="">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/White_Mana.png" alt="Bianco">
        </label>
        <input type="checkbox" name="bianco" value="Bianco">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Blue_Mana.png" alt="Blu">
        </label>
        <input type="checkbox" name="blu" value="Blu">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Black_Mana.png" alt="Nero">
        </label>
        <input type="checkbox" name="nero" value="Nero">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Red_Mana.png" alt="Rosso">
        </label>
        <input type="checkbox" name="rosso" value="Rosso">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Green_Mana.png" alt="Verde">
        </label>
        <input type="checkbox" name="verde" value="Verde">
      </div>
    </div>
    <!--
    <legend for="filter">Filtra per:</legend>
    <div class="src_field_group">
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Tipo di mazzo:</label>
        <select class="src_dropdown" name="Tipo">
          <option value="None">Nessuna scelta</option>
          <option value="Aggro">Aggro</option>
          <option value="Creatura">Creatura</option>
          <option value="Incantesimo">Incantesimo</option>
          <option value="Istantaneo">Istantaneo</option>
          <option value="Planeswalker">Planeswalker</option>
          <option value="Stregoneria">Stregoneria</option>
          <option value="Terra">Terra</option>
          <option value="Tribale">Tribale</option>
        </select>
      </div>
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Ordina per:</label>
        <select class="src_dropdown" name="Order" id="order">
          <option value="None">Nessuna scelta</option>
          <option value="Nome">Nome del mazzo</option>
          <option value="Public">Pubblicazione</option>
        </select>
      </div>
    </div>-->
  </fieldset>
  <input type="reset" name="reset" value="Resetta la ricerca">
  <input type="submit" value="Cerca">
</form>
<div class="wiki_nav deck_nav">
  <div class="wiki" id="deck_list">
    <?php foreach ($deck as $key => $value) {
      if ($key >= $disp_deck*($cur_page-1) && $key < $disp_deck*$cur_page) {
        ?>
        <a href="single_deck.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"];?>">
          <div class="deck_box">
            <?php
            if($value["Colore_verde"])
              echo "<img src='Resources/Green_Mana.png' alt='colore mazzo verde'>";
            if($value["Colore_rosso"])
              echo "<img src='Resources/Red_Mana.png' alt='colore mazzo rosso'>";
            if($value["Colore_blu"])
              echo "<img src='Resources/Blue_Mana.png' alt='colore mazzo blu'>";
            if($value["Colore_nero"])
              echo "<img src='Resources/Black_Mana.png' alt='colore mazzo nero'>";
            if($value["Colore_bianco"])
              echo "<img src='Resources/White_Mana.png' alt='colore mazzo bianco'>";
            ?>
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
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET);?>">
      <span class="fas fa-angle-double-left"></span>
    </a>
  <?php }
  if ($cur_page>1) {
    $_GET["page"] = $cur_page-1;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <span class="fas fa-angle-left"></span>
    </a>
  <?php }
  if ($cur_page>2) {
    $_GET["page"] = $cur_page-2;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page-2; ?>
    </a>
  <?php }
  if ($cur_page>1) {
    $_GET["page"] = $cur_page-1;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page-1; ?>
    </a>
  <?php } ?>
  <a href="#wiki" class="current_page"><?php echo $cur_page; ?></a>
  <?php if ($num_pages-$cur_page>=1) {
    $_GET["page"] = $cur_page+1;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page+1; ?>
    </a>
  <?php }
  if ($num_pages-$cur_page>=2) {
    $_GET["page"] = $cur_page+2;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <?php echo $cur_page+2; ?>
    </a>
  <?php }
  if ($num_pages-$cur_page>=1) {
    $_GET["page"] = $cur_page+1;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>">
      <span class="fas fa-angle-right"></span>
    </a>
  <?php }
  if ($num_pages>=2) {
    $_GET["page"] = $num_pages;?>
    <a href="<?php echo $pagein["Controller"]; ?>?<?php echo http_build_query($_GET); ?>"> <span class="fas fa-angle-double-right"></span> </a>
  <?php } ?>
</div>
</div>
</div>

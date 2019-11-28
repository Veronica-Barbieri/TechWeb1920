<div class="content">
<form class="src_form" action="cardwiki.php" method="get"><!-- da implementare la gestione del form -->
  <fieldset class="src_col1">
    <legend for="filter">Cerca la tua carta:</legend>
    <div class="src_field_group">
      <div class="input">
        <label>Nome della carta</label>
        <input type="text" name="nomecarta" value="">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/White_Mana.png" alt="Bianco">
        </label>
        <input type="checkbox" name="bianco" value="1">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Blue_Mana.png" alt="Blu">
        </label>
        <input type="checkbox" name="blu" value="1">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Black_Mana.png" alt="Nero">
        </label>
        <input type="checkbox" name="nero" value="1">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Red_Mana.png" alt="Rosso">
        </label>
        <input type="checkbox" name="rosso" value="1">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Green_Mana.png" alt="Verde">
        </label>
        <input type="checkbox" name="verde" value="1">
      </div>
    </div>
    <div class="src_field_group">
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Espansione:</label>
        <select class="src_dropdown" name="set">
            <option value="None">Nessuna scelta</option>
            <optgroup label="Core Sets">
              <option value="Set Base 2020">Set Base 2020</option>
              <option value="Set Base 2019">Set Base 2019</option>
              <option value="Set Base 2015">Set Base 2015</option>
              <option value="Set Base 2014">Set Base 2014</option>
              <option value="Set Base 2013">Set Base 2013</option>
              <option value="Set Base 2012">Set Base 2012</option>
              <option value="Set Base 2011">Set Base 2011</option>
              <option value="Set Base 2010">Set Base 2010</option>
              <option value="Set Base Decima Edizione">Set Base Decima Edizione</option>
              <option value="Set Base Nona Edizione">Set Base Nona Edizione</option>
              <option value="Set Base Ottava Edizione">Set Base Ottava Edizione</option>
              <option value="Set Base Ottava Edizione">Set Base Settima Edizione</option>
              <option value="Set Base Sesta Edizione">Set Base Sesta Edizione</option>
              <option value="Set Base Quinta Edizione">Set Base Quinta Edizione</option>
              <option value="Set Base Quarta Edizione">Set Base Quarta Edizione</option>
            </optgroup>
          </select>
    </div>
    <div class="src_dropdown_group">
      <label class="dropdown_text" for="order">Tipo di carta:</label>
      <select class="src_dropdown" name="tipo">
        <option value="None">Nessuna scelta</option>
        <option value="Artefatto">Artefatto</option>
        <option value="Creatura">Creatura</option>
        <option value="Incantesimo">Incantesimo</option>
        <option value="Istantaneo">Istantaneo</option>
        <option value="Planeswalker">Planeswalker</option>
        <option value="Stregoneria">Stregoneria</option>
        <option value="Terra">Terra</option>
        <option value="Tribale">Tribale</option>
      </select>
    </div>
  </div>
  </fieldset>
  <input type="submit" name="search_input" value="Cerca">
  <input type="reset" name="reset" value="Resetta la ricerca">
</form>
<div class="wiki_nav">
  <?php if ($cards) {?>
    <div class="wiki" id="wiki">
      <?php foreach ($cards as $key => $value) {
        if ($key >= $disp_card*($cur_page-1) && $key < $disp_card*$cur_page) {?>
          <div class="card_box">
          <a href="single_card.php?id=<?php echo $value["Id"] ?>&name=<?php echo $value["Nome"] ?>">
            <p><?php echo $value["Nome"]; ?></p>
            <img src="<?php echo $value["Img_path"]; ?>" alt="<?php echo $value["Nome"]; ?>">
          </a>
          </div>
      <?php
        }
      } ?>
    </div>
    <div class="btn_box"><!-- da fare in modo che se non ho le prime 2 / 1 pagina stampo ache la 4* e 5* -->
      <?php if ($num_pages>=2) {
        $_GET["page"] = 1;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-double-left"></span> </a>
      <?php }
      if ($cur_page>1) {
        $_GET["page"] = $cur_page-1;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-left"></span> </a>
      <?php }
      if ($cur_page>2) {
        $_GET["page"] = $cur_page-2;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page-2; ?></a>
      <?php }
      if ($cur_page>1) {
        $_GET["page"] = $cur_page-1;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page-1; ?></a>
      <?php } ?>
      <a href="#wiki" class="current_page"><?php echo $cur_page; ?></a>
      <?php if ($num_pages-$cur_page>=1) {
        $_GET["page"] = $cur_page+1;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page+1; ?></a>
      <?php }
      if ($num_pages-$cur_page>=2) {
        $_GET["page"] = $cur_page+2;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page+2; ?></a>
      <?php }
      if ($num_pages-$cur_page>=1) {
        $_GET["page"] = $cur_page+1;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-right"></span> </a>
      <?php }
      if ($num_pages>=2) {
        $_GET["page"] = $num_pages;?>
        <a href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-double-right"></span> </a>
      <?php } ?>
    </div>
  <?php } else { ?>
    <h1>NESSUNA CARTA TROVATA!</h1>
    <p>Effettuare una nuova ricerca o cliccare il pulsante resetta la ricerca per tornare all'elenco completo delle carte</p>
  <?php } ?>
</div>
</div>

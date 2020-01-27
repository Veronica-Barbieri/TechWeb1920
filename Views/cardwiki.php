<div class="content" id="content">
<form class="src_form_wiki" action="cardwiki.php" method="get"><!-- da implementare la gestione del form -->
  <fieldset class="src_col1 box" id="card_search1">
    <legend class="frm_title box">Cerca la tua carta:</legend>
    <div class="src_field_group">
      <div class="in_label">
        <label class="in_label" for="nomecarta">Nome della carta</label>
        <input class="inputArea" id="nomecarta" type="text" name="nomecarta" value="" />
      </div>
    </div>
    <div class="src_field_group">
      <div class="src_dropdown_group">
        <label class="in_label" for="set">Espansione:</label>
        <select class="src_dropdown" id="set" name="set">
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
      <label class="in_label" for="tipo">Tipo di carta:</label>
      <select class="src_dropdown" id="tipo" name="tipo">
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
  <div class="src_field_group">
    <div class="form_mana">
      <input class="color_checkbox" id="white_chbox" type="checkbox" name="bianco" value="1" />
      <label class="cbox_label" for="white_chbox">
        <img src="Resources/White_Mana.png" alt="Bianco" />
      </label>
    </div>
    <div class="form_mana">
      <input class="color_checkbox" id="blue_chbox" type="checkbox" name="blu" value="1" />
      <label class="cbox_label" for="blue_chbox">
        <img src="Resources/Blue_Mana.png" alt="Blu" />
      </label>
    </div>
    <div class="form_mana">
      <input class="color_checkbox" id="black_chbox" type="checkbox" name="nero" value="1" />
      <label class="cbox_label" for="black_chbox">
        <img src="Resources/Black_Mana.png" alt="Nero" />
      </label>
    </div>
    <div class="form_mana">
      <input class="color_checkbox" id="red_chbox" type="checkbox" name="rosso" value="1" />
      <label class="cbox_label" for="red_chbox">
        <img src="Resources/Red_Mana.png" alt="Rosso" />
      </label>
    </div>
    <div class="form_mana">
      <input class="color_checkbox" id="green_chbox" type="checkbox" name="verde" value="1" />
      <label class="cbox_label" for="green_chbox">
        <img src="Resources/Green_Mana.png" alt="Verde" />
      </label>
    </div>
  </div>
  <input class="formButton btn" type="submit" name="search_input" value="Cerca" />
  <input class="formButton btn" type="reset" name="reset" value="Resetta la ricerca" />
  </fieldset>
</form>
<div class="wiki_nav">
  <?php if ($cards) {?>
    <div class="wiki" id="wiki">
      <?php foreach ($cards as $key => $value) {
        if ($key >= $disp_card*($cur_page-1) && $key < $disp_card*$cur_page) {?>
          <div class="card_box">
          <a class="cardLink link" href="single_card.php?id=<?php echo $value["Id"] ?>&amp;name=<?php echo $value["Nome"] ?>">
            <span class="card_title"><?php echo $value["Nome"]; ?></span>
            <img class="card_img" src="<?php echo $value["Img_path"]; ?>" alt="<?php echo $value["Nome"]; ?>" />
          </a>
          </div>
      <?php
        }
      } ?>
    </div>
    <div class="btn_box"><!-- da fare in modo che se non ho le prime 2 / 1 pagina stampo ache la 4* e 5* -->
      <?php if ($num_pages>=2) {
        $_GET["page"] = 1;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-double-left"></span> </a>
      <?php }
      if ($cur_page>1) {
        $_GET["page"] = $cur_page-1;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-left"></span> </a>
      <?php }
      if ($cur_page>2) {
        $_GET["page"] = $cur_page-2;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page-2; ?></a>
      <?php }
      if ($cur_page>1) {
        $_GET["page"] = $cur_page-1;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page-1; ?></a>
      <?php } ?>
      <a class="nav_btn btn current_page" href="#wiki"><?php echo $cur_page; ?></a>
      <?php if ($num_pages-$cur_page>=1) {
        $_GET["page"] = $cur_page+1;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page+1; ?></a>
      <?php }
      if ($num_pages-$cur_page>=2) {
        $_GET["page"] = $cur_page+2;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"><?php echo $cur_page+2; ?></a>
      <?php }
      if ($num_pages-$cur_page>=1) {
        $_GET["page"] = $cur_page+1;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-right"></span> </a>
      <?php }
      if ($num_pages>=2) {
        $_GET["page"] = $num_pages;?>
        <a class="nav_btn btn" href="cardwiki.php?<?php echo http_build_query($_GET);?>"> <span class="fas fa-angle-double-right"></span> </a>
      <?php } ?>
    </div>
  <?php } else { ?>
    <h1>NESSUNA CARTA TROVATA!</h1>
    <p class="simpleText">Effettuare una nuova ricerca o cliccare il pulsante resetta la ricerca per tornare all'elenco completo delle carte</p>
  <?php } ?>
</div>
</div>

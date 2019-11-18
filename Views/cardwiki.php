<form class="src_form" action="cardwiki.php?<?php echo http_build_query($_GET); ?>" method="get"><!-- da implementare la gestione del form -->
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
  </fieldset>
  <!--<fieldset class="src_col2">
    <legend for="filter">Filtra per:</legend>
    <div class="src_field_group">
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Edizione:</label>
        <select class="src_dropdown" name="Set">
          <option value="None">Nessuna scelta</option>
          <option value="LEA">Edizione limitata Alpha</option>
          <option value="LEB">Edizione limitata Beta</option>
          <option value="2ED">Edizione unlimited</option>
          <option value="3ED">Edizione Revisionata</option>
          <option value="4ED">Quarta Edizione</option>
          <option value="5ED">Quinta Edizione</option>
          <option value="6ED">Sesta Edizione Classica</option>
          <option value="7ED">Settima Edizione</option>
          <option value="8ED">Ottava Edizione</option>
          <option value="9ED">Nona Edizione</option>
          <option value="10ED">Decima Edizione</option>
          <option value="M10">Magic 2010</option>
          <option value="M11">Magic 2011</option>
          <option value="M12">Magic 2013</option>
          <option value="M13">Magic 2014</option>
          <option value="M14">Magic 2015</option>
          <option value="M15">Magic 2015</option>
          <option value="ORI">Magic Origins</option>
          <option value="M19">Core Set 2019</option>
          <option value="M20">Core Set 2020</option>
        </select>
      </div>
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Tipo di carta:</label>
        <select class="src_dropdown" name="Tipo">
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
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Ordina per:</label>
        <select class="src_dropdown" name="Order" id="order">
          <option value="None">Nessuna scelta</option>
          <option value="Nome">Nome della carta</option>
          <option value="Atk">Attacco</option>
          <option value="Def">Difesa</option>
          <option value="Colore">Colore</option>
        </select>
      </div>
    </div>
  </fieldset>-->
  <input type="reset" name="reset" value="Resetta la ricerca">
  <input type="submit" name="search_input" value="Cerca">
</form>



<div class="wiki_nav">
  <div class="wiki" id="wiki">
    <?php foreach ($cards as $key => $value) {
      if ($key >= $disp_card*($cur_page-1) && $key < $disp_card*$cur_page) {
        /*NOTA BENE : a causa dei controller dummy non ho un controllo su
        $tot_cards mentre quando verranno implementate le query da database
        $tot_cards e il numero di entry in $cards(key) saranno coerenti*/?>
        <div class="card_box">
        <img src="<?php echo $value["Img_path"]; ?>" alt="<?php echo $value["nome"]; ?>">
        <p><?php echo $value["Nome"]; ?></p>
        </div>
    <?php
      }
    } ?>
  </div>
  <div class="btn_box">
    <?php if ($num_pages>=2) {?>
      <a href="cardwiki.php?page=1<?php echo "&".http_build_query($_GET); ?>"> <span class="fas fa-angle-double-left"></span> </a>
    <?php }
    if ($cur_page>1) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page-1; ?>"> <span class="fas fa-angle-left"></span> </a>
    <?php }
    if ($cur_page>2) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page-2; ?>"></a>
    <?php }
    if ($cur_page>1) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page-1; ?>"</a>
    <?php } ?>
    <a href="#wiki" class="current_page"><?php echo $cur_page; ?></a>
    <?php if ($num_pages-$cur_page>=1) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page+1; ?>"</a>
    <?php }
    if ($num_pages-$cur_page>=2) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page+2; ?>"</a>
    <?php }
    if ($num_pages-$cur_page>=1) {?>
      <a href="cardwiki.php?page=<?php echo $cur_page+1; ?>"> <span class="fas fa-angle-right"></span> </a>
    <?php }
    if ($num_pages>=2) {?>
      <a href="cardwiki.php?page=<?php echo $num_pages; ?>"> <span class="fas fa-angle-double-right"></span> </a>
    <?php } ?>
  </div>
</div>

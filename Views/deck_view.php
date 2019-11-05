<div class="wiki_nav deck_nav">
  <div class="wiki" id="deck_list">
    <?php foreach ($deck as $key => $value) {
      if ($key >= $disp_deck*($cur_page-1) && $key < $disp_deck*$cur_page) {
        /*NOTA BENE : a causa dei controller dummy non ho un controllo su
        $tot_decks mentre quando verranno implementate le query da database
        $tot_decks e il numero di entry in $deck(key) saranno coerenti*/?>
        <a href="single_deck.php"> <!-- qui verrà messa una reference all' ID del singolo mazzo ritorato dalla query-->
          <div class="deck_box">
            <img src="Resources/Red_Mana.png" alt="rosso">
            <img src="Resources/Red_Mana.png" alt="rosso">
            <h1> <?php echo $value["nome"]; ?> </h1>
            <p> <?php echo $value["autore"]; ?> </p>
            <p> <?php echo $value["param"]; ?> </p>
            <p> <?php echo $value["note"]; ?> </p>
          </div>
        </a>
    <?php
      }
    } ?>
  </div>
  <div class="btn_box">
    <?php if ($num_pages>=2) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=1"> <span class="fas fa-angle-double-left"></span> </a>
    <?php }
    if ($cur_page>1) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page-1; ?>"> <span class="fas fa-angle-left"></span> </a>
    <?php }
    if ($cur_page>2) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page-2; ?>"><?php echo $cur_page-2; ?></a>
    <?php }
    if ($cur_page>1) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page-1; ?>"><?php echo $cur_page-1; ?></a>
    <?php } ?>
    <a href="#wiki" class="current_page"><?php echo $cur_page; ?></a>
    <?php if ($num_pages-$cur_page>=1) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page+1; ?>"><?php echo $cur_page+1; ?></a>
    <?php }
    if ($num_pages-$cur_page>=2) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page+2; ?>"><?php echo $cur_page+2; ?></a>
    <?php }
    if ($num_pages-$cur_page>=1) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $cur_page+1; ?>"> <span class="fas fa-angle-right"></span> </a>
    <?php }
    if ($num_pages>=2) {?>
      <a href="<?php echo $pagein["Controller"]; ?>?page=<?php echo $num_pages; ?>"> <span class="fas fa-angle-double-right"></span> </a>
    <?php } ?>
  </div>
</div>

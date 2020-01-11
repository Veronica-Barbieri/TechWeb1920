<div class="card_insert" id="card_insert">
  <div class="card_insert_box" id="card_insert_basicmana">
    <button type="button" name="BasicGreen" onclick="num_card_popup(1,'Terreno verde')"> <img src="Resources/Green_Mana.png" alt="Verde"> </button>
    <button type="button" name="BasicBlue" onclick="num_card_popup(8,'Terreno blu')"> <img src="Resources/Blue_Mana.png" alt="Blu"> </button>
    <button type="button" name="BasicRed" onclick="num_card_popup(0,'Terreno rosso')"> <img src="Resources/Red_Mana.png" alt="Rosso"> </button>
    <button type="button" name="BasicWhite" onclick="num_card_popup(0,'Terreno bianco')"> <img src="Resources/White_Mana.png" alt="Bianco"> </button>
    <button type="button" name="BasicBlack" onclick="num_card_popup(9,'Terreno nero')"> <img src="Resources/Black_Mana.png" alt="Nero"> </button>
  </div>
  <div class="card_insert_box" id="card_insert_db">
    <div class="filters">
    </div>
    <ul class="wiki" id="infinite-list">
    </ul>
<!--
  <div class="card_insert_box" id="card_insert_dir">
    <form class="src_form" id="card_insert_dir_form" action="" method="get">
      <label for="card_insert">Cerca il nome di una carta per inserirla direttamente</label>
      <input type="text" name="card_insert" value="">
      <input type="submit" name="addcard" value="Aggiungi">
    </form>
  </div>
-->
  <div id="current_usr_deck">
  </div>
  <div id="error_message">
  </div>
  <form class="form" id="deck_frm" action="Models/confirm_deck.php" method="get">
    <fieldset>
      <legend>I dettagli del tuo mazzo</legend>
      <label for="deck_name">Nome</label>
  	<input class="inputArea" type="text" name="deck_name" required>
      <label for="type">Tipo</label>
  	<input class="inputArea" type="text" name="type" required>
    <input class="formButton" id="deck_submit_button" type="submit" name="deck_input" value="Salva">

    <div class="color_checkbox">
      <label class="in_label" for="color">
        <img src="Resources/White_Mana.png" alt="Bianco">
      </label>
      <input type="checkbox" name="bianco" value="1">
    </div>
    <div class="color_checkbox">
      <label class="in_label" for="color">
        <img src="Resources/Blue_Mana.png" alt="Blu">
      </label>
      <input type="checkbox" name="blu" value="1">
    </div>
    <div class="color_checkbox">
      <label class="in_label" for="color">
        <img src="Resources/Black_Mana.png" alt="Nero">
      </label>
      <input type="checkbox" name="nero" value="1">
    </div>
    <div class="color_checkbox">
      <label class="in_label" for="color">
        <img src="Resources/Red_Mana.png" alt="Rosso">
      </label>
      <input type="checkbox" name="rosso" value="1">
    </div>
    <div class="color_checkbox">
      <label class="in_label" for="color">
        <img src="Resources/Green_Mana.png" alt="Verde">
      </label>
      <input type="checkbox" name="verde" value="1">
    </div>
  </div>
  </fieldset>
  </form>
</div>

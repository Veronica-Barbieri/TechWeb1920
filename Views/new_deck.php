<div class="card_insert">
  <div class="card_insert_box" id="card_insert_basicmana">
    <button type="button" name="BasicGreen" onclick="num_card_popup(9,'robe')"> <img src="Resources/Green_Mana.png" alt="Verde"> </button>
    <button type="button" name="BasicBlue" onclick="num_card_popup(9,'fu')"> <img src="Resources/Blue_Mana.png" alt="Blu"> </button>
    <button type="button" name="BasicRed" onclick="num_card_popup(9,'rocdbe')"> <img src="Resources/Red_Mana.png" alt="Rosso"> </button>
    <button type="button" name="BasicWhite" onclick="num_card_popup(9,'cdv')"> <img src="Resources/White_Mana.png" alt="Bianco"> </button>
    <button type="button" name="BasicBlack" onclick="num_card_popup(9,'vfvvf')"> <img src="Resources/Black_Mana.png" alt="Nero"> </button>
  </div>
  <div class="card_insert_box" id="card_insert_db">
    <div class="filters">
    </div>

    <?php if ($cards) {?>
      <ul class="wiki" id="wiki">
        <ul>
          <li>Nome</li>
          <li>Mana</li>
          <li>Tipo</li>
          <li>Aggiungi la carta</li>
        </ul>
        <?php foreach ($cards as $key => $value) {?>
            <ul class="card_box_insert">
              <li><?php echo $value["Nome"]; ?></li>
              <li><?php echo $value["color"]; ?></li> <!-- Qui vanno stampati i costi della carta, muovi il culo e sistema la funzione -->
              <li><?php echo $value["Tipo"]; ?></li>
              <li>
                <button type="button" name="add"> <i class="far fa-hand-point-right"></i> </button>
              </li>
            </ul>
        <?php
          }
        } ?>
      </ul>
  <div class="card_insert_box" id="card_insert_dir">
    <form class="src_form" id="card_insert_dir_form" action="" method="get">
      <label for="card_insert">Cerca il nome di una carta per inserirla direttamente</label>
      <input type="text" name="card_insert" value="">
      <input type="submit" name="addcard" value="Aggiungi">
    </form>
  </div>
</div>
<div id="current_usr_deck">
<h1>Il tuo mazzo!</h1>
<h2>Il titolo del tuo mazzo</h2>
<h2>I colori del tuo mazzo</h2>
<ul>
  <li>Numero</li>
  <li>Nome</li>
  <li>Mana</li>
  <li>Tipo</li>
  <li>Azioni</li>
</ul>
</div>

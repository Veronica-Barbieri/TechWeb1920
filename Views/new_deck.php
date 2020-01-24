<div class="content">
  <?php if (isset($_GET["error"]) && !empty($_GET["error"])): ?>
    <p class="error"><?php echo $_GET["error"]; ?></p>
  <?php endif; ?>
  <div class="card_insert" id="card_insert">
    <div class="card_insert_box" id="card_insert_basicmana">
      <h1 class="title">Terre base</h1>
      <h2 class="simpleText">Tasti rapidi per aggiungere delle Terre base al mazzo:</h2>
      <button class="manaButton" type="button" name="BasicGreen" onclick="num_card_popup(2,'Mana verde')"> <img src="Resources/Green_Mana.png" alt="Verde" /> </button>
      <button class="manaButton" type="button" name="BasicBlue" onclick="num_card_popup(9,'Mana blu')"> <img src="Resources/Blue_Mana.png" alt="Blu" /> </button>
      <button class="manaButton" type="button" name="BasicRed" onclick="num_card_popup(0,'Mana rosso')"> <img src="Resources/Red_Mana.png" alt="Rosso" /> </button>
      <button class="manaButton" type="button" name="BasicWhite" onclick="num_card_popup(0,'Mana bianco')"> <img src="Resources/White_Mana.png" alt="Bianco" /> </button>
      <button class="manaButton" type="button" name="BasicBlack" onclick="num_card_popup(10,'Mana nero')"> <img src="Resources/Black_Mana.png" alt="Nero" /> </button>
    </div>
    <div class="card_insert_box">
      <h1 class="title">Carte Disponibili</h1>
      <h2 class="simpleText">Scorri per navigare tra le carte disponibili e aggiungile al tuo mazzo tramite il pulsante "Aggiungi" sotto la carta</h2>
      <div class="filters">
      </div>
      <ul class="wiki new_deck_sez box" id="infinite-list">
      </ul>
      <div class="hidden"  id="infinite-spin">
        <i class="fas fa-spinner fa-spin"></i>
      </div>
    </div>
    <div class="card_insert_box">
      <h1 class="title" id="current_usr_deck_title">Il tuo mazzo fino ad ora</h1>
      <h2 class="simpleText">Qui sotto potrai visualizzare le carte che hai aggiunto fino ad ora e le loro quantità, premi sul tasto "Crea il mazzo" per confermare</h2>
      <div class="new_deck_sez box" id="current_usr_deck">
      </div>
      <form id="new_deck_form" action="Models/confirm_deck.php" method="get">
        <fieldset class="src_col1 box">
          <legend class="frm_title box">I dettagli del tuo mazzo</legend>
          <div class="input">
            <label for="deck_name">Nome</label>
            <input class="inputArea" id="deck_name" type="text" name="deck_name" required />
          </div>
          <div class="deck_name">
            <label for="type">Tipo</label>
            <input class="inputArea" id="type" type="text" name="type" required />
          </div>
          <h1 class="simpleText">Scegli i colori del mazzo</h1>
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
          <input class="formButton btn" id="deck_submit_button" type="submit" name="deck_input" value="Crea il mazzo" />
        </fieldset>
      </form>
    </div>
    </div>
</div>
<script type="text/javascript" src="Scripts/home.js"></script>
<script type="text/javascript" src="Scripts/new_deck.js"></script>
<script >
  var listElm = document.getElementById('infinite-list');
  var loadcard=0;
  var limitcard=5;
  listElm.addEventListener('scroll', function() {
    if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
      loadcard+=limitcard;
      loadMoar(loadcard, limitcard, listElm);
    }
  });
    loadMoar(loadcard, limitcard, listElm);
</script>

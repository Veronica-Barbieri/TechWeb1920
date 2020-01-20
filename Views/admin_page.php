<!-- VIEW -->
<div class="content">
  <h1 class="main_title">Pannello Amministrazione</h1>
  <div class="admin_intro box">
    <button class="btn" type="button" name="logout" onclick="window.location.href='logout.php'">Logout</button>
    <button class="btn" id="ad_form_btn" type="button" name="edit_profile" onclick="show_and_hide('admin_form', 'ad_form_btn')">
      Modifica le tue informazioni
    </button>
    <form class="admin_form hidden" id="admin_form" action="Models/usr_mod_account.php" method="post">
      <fieldset class="box">
        <legend class="frm_title box">Modifica i tuoi dati:</legend>
        <div class="form_sez">
          <label for="usrname">Username</label>
          <input class="inputArea" id="usrname" type="text" name="usrname" value="" />
        </div>
        <div class="form_sez">
          <label for="mail">Email</label>
          <input class="inputArea" id="mail" type="email" name="mail" value="" />
        </div>
        <div class="form_sez">
          <label for="pwd">Password</label>
          <input class="inputArea" id="pwd" type="password" name="pwd" value="" />
        </div>
        <div class="form_sez">
          <input class="formButton btn" type="submit" name="save" value="Salva" />
          <input class="formButton btn" type="reset" name="cancel" value="Annulla" onclick="show_and_hide('ad_form_btn','admin_form')" />
          <input class="formButton btn" type="reset" name="reset" value="Resetta i campi" />
        </div>
      </fieldset>
    </form>
  <div class="stats">
    <h1>Statistiche di utilizzo del sito:</h1>
      <a href="#">
        <div class="ad_stat box">
          <span class="fas fa-users"></span>
          <p><?php echo $num_user["num"]; ?> Utenti registrati</p>
        </div>
      </a>
      <a href="deck_forum.php">
        <div class="ad_stat box">
          <span class="fas fa-align-justify"></span>
          <p><?php echo $num_decks["num"]; ?> Mazzi creati</p>
        </div>
      </a>
    <a href="cardwiki.php">
      <div class="ad_stat box">
          <span class="fas fa-hat-wizard"></span>
          <p><?php echo $num_cards["num"]; ?> Carte</p>
      </div>
    </a>
  </div>
  </div>
  <form class="" id="new_db_card" action="index.html" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend class="frm_title box">Inserisci una nuova carta nel database:</legend>
      <fieldset class="new_card_fl">
        <legend class="frm_title">Informazioni generali</legend>
        <div class="form_sez">
          <label for="card_name">Nome della carta</label>
          <input class="inputArea" id="card_name" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_type">Tipo</label>
          <input class="inputArea" id="card_type" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_exp">Espansione</label>
          <input class="inputArea" id="card_exp" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_rar">Raritá</label>
          <input class="inputArea" id="card_rar" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_art">Artista</label>
          <input class="inputArea" id="card_art" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_def">Difesa</label>
          <input class="inputArea" id="card_def" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="card_atk">Attacco</label>
          <input class="inputArea" id="card_atk" type="text" name="" value="" required />
        </div>
      </fieldset>
      <fieldset class="new_card_fl">
        <legend class="frm_title">Colore e Mana</legend>
        <div class="form_sez">
          <label for="card_color">Colore della carta</label>
          <input class="inputArea" id="card_color" type="text" name="" value="" required />
        </div>
        <div class="form_sez">
          <label for="bianco">Costo mana di colore <img src="Resources/White_Mana.png" alt="Bianco" /></label>
          <input class="inputArea" id="bianco" type="number" name="" value="" />
        </div>
        <div class="form_sez">
          <label for="blu">Costo mana di colore <img src="Resources/Blue_Mana.png" alt="Blu" /></label>
          <input class="inputArea" id="blu" type="number" name="" value="" />
        </div>
        <div class="form_sez">
          <label for="nero">Costo mana di colore <img src="Resources/Black_Mana.png" alt="Nero" /></label>
          <input class="inputArea" id="nero" type="number" name="" value="" />
        </div>
        <div class="form_sez">
          <label for="rosso">Costo mana di colore <img src="Resources/Red_Mana.png" alt="Rosso" /></label>
          <input class="inputArea" id="rosso" type="number" name="" value="" />
        </div>
        <div class="form_sez">
          <label for="verde">Costo mana di colore <img src="Resources/Green_Mana.png" alt="Verde" /></label>
          <input class="inputArea" id="verde" type="number" name="" value="" />
        </div>
        <div class="form_sez">
          <label for="nocolor">Costo mana di nessun colore</label>
          <input class="inputArea" id="nocolor" type="number" name="" value="" />
        </div>
      </fieldset>
      <fieldset class="new_card_fl">
        <legend class="frm_title">Testo carta</legend>
        <div class="form_sez">
          <label for="card_desc">Descrizione</label>
          <textarea class="inputArea" id="card_desc" rows="10" cols="18"></textarea>
        </div>
        <div class="form_sez">
          <label for="card_fltext"><span xml:lang="eng">Flavour Text</span></label>
          <textarea class="inputArea" id="card_fltext" rows="10" cols="18"></textarea>
        </div>
      </fieldset>
      <div class="btn_box">
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <input class="btn nc_btn" type="submit" name="" value="Salva" />
        <input class="btn nc_btn" type="reset" name="" value="Resetta" />
      </div>
    </fieldset>
  </form>
</div>

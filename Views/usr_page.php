<div class="content" id="content">
  <?php if (isset($_GET["error"]) && !empty($_GET["error"])): ?>
    <p class="error"><?php echo $errors($_GET["error"]); ?></p>
  <?php endif; ?>
  <div class="usr_intro">
    <h1><?php echo "Benvenuto ".$curr_usr."!";?></h1>
    <button class="btn" id="usr_form_btn" type="button" name="edit_profile" onclick="show_and_hide('usr_form', 'usr_form_btn')">
      Modifica le tue informazioni
    </button>
    <button class="btn" type="button" name="logout" onclick="window.location.href='logout.php'">Logout</button>
    <button class="btn" type="button" name="new_deck" onclick="window.location.href='new_deck.php'">Crea un nuovo mazzo</button>
    <form class="usr_form hidden" id="usr_form" action="Models/usr_mod_account.php" method="post" onsubmit="return edit_info_check()">
      <fieldset class="box">
        <legend class="frm_title box">Modifica i tuoi dati:</legend>
        <div class="form_sez">
          <label for="usrname">Username</label>
          <input class="inputArea" id="usrname" type="text" name="usrname" value="" />
        </div>
        <div class="form_sez">
          <label for="mail">Email</label>
          <input class="inputArea" id="mail" type="text" name="mail" value="" />
        </div>
        <div class="form_sez">
          <label for="pwd">Password</label>
          <input class="inputArea" id="pwd" type="password" name="pwd" value="" />
        </div>
        <div class="form_sez">
          <input class="formButton btn" type="submit" name="save" value="Salva" />
          <input class="formButton btn" type="reset" name="cancel" value="Annulla" onclick="show_and_hide('usr_form_btn','usr_form')" />
          <input class="formButton btn" type="reset" name="reset" value="Resetta i campi" />
        </div>
      </fieldset>
    </form>
  </div>
  <div class="deck_nav">
    <h1>I mazzi creati da te!</h1>
    <div class="wiki" id="usr_deck_list">
      <?php if($usr_deck!=0){
          foreach ($usr_deck as $key => $value) { ?>
            <div id="deck_box_<?php echo $value["Id"];?>" class="deck_box">
              <a class="linkedDeck link" href="single_deck.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"];?>">
                <?php
                if($value["Colore_verde"]) {?>
                  <img src='Resources/Green_Mana.png' alt='colore mazzo verde' />
                <?php } if($value["Colore_rosso"]) {?>
                  <img src='Resources/Red_Mana.png' alt='colore mazzo rosso' />
                <?php } if($value["Colore_blu"]) { ?>
                  <img src='Resources/Blue_Mana.png' alt='colore mazzo blu' />
                <?php } if($value["Colore_nero"]) { ?>
                  <img src='Resources/Black_Mana.png' alt='colore mazzo nero' />
                <?php } if($value["Colore_bianco"]) { ?>
                  <img src='Resources/White_Mana.png' alt='colore mazzo bianco' />
                <?php } ?>
                <span class="deck_title"> <?php echo $value["Nome"]; ?> </span>
                <span class="deck_info"> <?php echo $value["Tipo"]; ?> </span>
              </a>
              <button class="btn" type="button" name="delete_use_deck" onclick="delete_deck(<?php echo $value["Id"]; ?>)">Elimina il mazzo</button>
            </div>
      <?php }
      } else { ?>
      <p>Non sono ancora stati creati mazzi</p>
    <?php } ?>
    </div>
  </div>
</div>
<script type="text/javascript">
function validForm() { //controlli js per il form di inserimento di una carta
  var x = document.forms["new_db_card"];
    if (isNaN(x["card_def"].value) || isNaN(x["card_atk"].value) ||
    isNaN(x["bianco"].value) || isNaN(x["nero"].value) ||
    isNaN(x["blu"].value) || isNaN(x["verde"].value) ||
    isNaN(x["rosso"].value) || isNaN(x["nocolor"].value))
    {
        alert("Il costo mana di una carta deve essere un numero");
        return false;
    }

  if (document.forms["new_db_card"]["card_name"].value == "") {
    alert("Il campo 'Nome' non puo' essere vuoto");
    return false;
  }

  if (document.forms["new_db_card"]["card_type"].value == "") {
    alert("Il campo 'Tipo' non puo' essere vuoto");
    return false;
  }

  if (document.forms["new_db_card"]["card_exp"].value == "") {
    alert("Il campo 'Espansione' non puo' essere vuoto");
    return false;
  }

  if (document.forms["new_db_card"]["card_rar"].value == "") {
    alert("Il campo 'Rarita'' non puo' essere vuoto");
    return false;
  }

  if (document.forms["new_db_card"]["card_art"].value == "") {
    alert("Il campo 'Artista' non puo' essere vuoto");
    return false;
  }

  if (document.forms["new_db_card"]["card_color"].value == "") {
    alert("Il campo 'Colore della carta' non puo' essere vuoto");
    return false;
  }

  if (document.getElementById("fileToUpload").files.length == 0) {
    alert("E' necessario caricare un'immagine della carta");
    return false;
  }
}
</script>
<script type="text/javascript">
function edit_info_check() {
 if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.forms["registration_frm"]["mail"].value))){
    alert("You have entered an invalid email address!")
    return false;
  }
}
</script>

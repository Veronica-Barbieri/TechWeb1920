<div class="content" id="content">
  <?php if (isset($_GET["success"]) && !empty($_GET["success"])): ?>
    <p class="success"><?php echo $_GET["success"]; ?></p>
  <?php endif; ?>
  <div class="usr_intro">
    <h1><?php echo "Benvenuto ".$curr_usr."!";?></h1>
    <button class="btn" id="usr_form_btn" type="button" name="edit_profile" onclick="show_and_hide('usr_form', 'usr_form_btn')">
      Modifica le tue informazioni
    </button>
    <button class="btn" type="button" name="logout" onclick="window.location.href='logout.php'">Logout</button>
    <button class="btn" type="button" name="new_deck" onclick="window.location.href='new_deck.php'">Crea un nuovo mazzo</button>
    <form class="usr_form hidden" id="usr_form" action="Models/usr_mod_account.php" method="post">
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
              <a class="link" href="single_deck.php?id=<?php echo $value["Id"];?>&amp;name=<?php echo $value["Nome"];?>">
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
                <h1> <?php echo $value["Nome"]; ?> </h1>
                <p> <?php echo $value["Tipo"]; ?> </p>
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

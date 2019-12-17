<div class="content">
  <h1><?php echo "Benvenuto ".$curr_usr."!";?></h1>
  <button type="button" name="edit_profile" onclick="show('usr_form')">
    Modifica le tue informazioni
  </button>
  <button type="button" name="logout" onclick="window.location.href='logout.php'">Logout</button>
  <button type="button" name="new_deck" onclick="window.location.href='new_deck.php'">Crea un nuovo mazzo</button>
  <!--<form action="logout.php">
    <button type="submit">Logout</button>
  </form> || primo metodo usato, non praticabile
  perché poco accessibile-->
  <form class="usr_form hidden" id="usr_form" action="Models/usr_mod_account.php" method="post">
    <fieldset>
      <legend for="filter">Modifica i tuoi dati:</legend>
      <label>Username</label>
      <input type="text" name="usrname" value="">
      <label>Email</label>
      <input type="email" name="mail" value="">
      <label>Password</label>
      <input type="password" name="pwd" value="">
      <input type="submit" name="save" value="Salva">
      <input type="reset" name="reset" value="Resetta i campi">
      <input type="reset" name="cancel" value="Cancella" onclick="hide('usr_form')">
    </fieldset>
  </form>
  <div class="wiki_nav deck_nav">
  <h1>I mazzi creati da te!</h1>
    <div class="wiki" id="usr_deck_list">
      <?php if($usr_deck!=0){
          foreach ($usr_deck as $key => $value) { ?>
          <div class="deck_box" id="deck_box_<?php echo $value["Id"]; ?>">
              <a href="single_deck.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"];?>">
              <?php
              if($value["Colore_verde"]) {?>
                <img src='Resources/Green_Mana.png' alt='colore mazzo verde'>
              <?php } if($value["Colore_rosso"]) {?>
                <img src='Resources/Red_Mana.png' alt='colore mazzo rosso'>
              <?php } if($value["Colore_blu"]) { ?>
                <img src='Resources/Blue_Mana.png' alt='colore mazzo blu'>
              <?php } if($value["Colore_nero"]) { ?>
                <img src='Resources/Black_Mana.png' alt='colore mazzo nero'>
              <?php } if($value["Colore_bianco"]) { ?>
                <img src='Resources/White_Mana.png' alt='colore mazzo bianco'>
              <?php } ?>
              <h1> <?php echo $value["Nome"]; ?> </h1>
              <p> <?php echo $value["Tipo"]; ?> </p>
            </a>
          <button type="button" name="delete_use_deck" onclick="delete_deck(<?php echo $value["Id"]; ?>)">Elimina il mazzo</button>
        </div>
      <?php }
      } else { ?>
      <p>Non sono ancora stati creati mazzi</p>
    <?php } ?>
    </div>
  </div>
</div>

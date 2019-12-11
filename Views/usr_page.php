<div class="content">
  <h1><?php echo "Benvenuto ".$curr_usr."!";?></h1>
  <button class="btn" type="button" name="edit_profile" onclick="show('usr_form')">
    Modifica le tue informazioni
  </button>
  <button class="btn" type="button" name="logout" onclick="window.location.href='logout.php'">Logout</button>
  <!--<form action="logout.php">
    <button type="submit">Logout</button>
  </form> || primo metodo usato, non praticabile
  perché poco accessibile-->
  <form class="usr_form hidden" id="usr_form" action="Models/usr_mod_account.php" method="post">
    <fieldset class="box">
      <legend class="frm_title box" for="filter">Modifica i tuoi dati:</legend>
      <label>Username</label>
        <input class="inputArea" type="text" name="usrname" value="">
      <label>Email</label>
        <input class="inputArea" type="email" name="mail" value="">
      <label>Password</label>
        <input class="inputArea" type="password" name="pwd" value="">
      <input class="formButton btn" type="submit" name="save" value="Salva">
      <input class="formButton btn" type="reset" name="reset" value="Resetta i campi">
      <input class="formButton btn" type="reset" name="cancel" value="Cancella" onclick="hide('usr_form')">
    </fieldset>
  </form>
  <div class="deck_nav">
  <h1>I mazzi creati da te!</h1>
    <div class="wiki" id="usr_deck_list">
      <?php if($usr_deck!=0){
          foreach ($usr_deck as $key => $value) { ?>
          <a class="link" href="single_deck.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"];?>">
            <div class="deck_box">
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
            </div>
          </a>
      <?php }
      } else { ?>
      <p>Non sono ancora stati creati mazzi</p>
    <?php } ?>
    </div>
  </div>
</div>

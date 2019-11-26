<h1><?php echo "Benvenuto ".$curr_usr."!";?></h1>
<button type="button" name="edit_profile" onclick="show('usr_form')">
  Modifica le tue informazioni
</button>
<form class="usr_form hidden" id="usr_form" action="usr_page.php" method="post">
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
<h1>I mazzi creati da te!</h1>
<div class="wiki_nav deck_nav">
  <div class="wiki" id="usr_deck_list">
    <?php foreach ($usr_deck as $key => $value) {
        ?>
        <a href="single_deck.php?id=<?php echo $value["Id"];?>&name=<?php echo $value["Nome"];?>">
          <div class="deck_box">
            <?php
            if($value["Colore_verde"])
              echo "<img src='Resources/Green_Mana.png' alt='colore mazzo verde'>";
            if($value["Colore_rosso"])
              echo "<img src='Resources/Red_Mana.png' alt='colore mazzo rosso'>";
            if($value["Colore_blu"])
              echo "<img src='Resources/Blue_Mana.png' alt='colore mazzo blu'>";
            if($value["Colore_nero"])
              echo "<img src='Resources/Black_Mana.png' alt='colore mazzo nero'>";
            if($value["Colore_bianco"])
              echo "<img src='Resources/White_Mana.png' alt='colore mazzo bianco'>";
            ?>
            <h1> <?php echo $value["Nome"]; ?> </h1>
            <p> <?php echo $value["Autore"]; ?> </p>
            <p> <?php echo $value["Tipo"]; ?> </p>
          </div>
        </a>
    <?php
    } ?>
  </div>
</div>

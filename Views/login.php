<div class=content>
<form class="form" id="login_frm" action="Models/usr_check.php" method="post">
  <fieldset class="box">
    <legend class="frm_title box">Accedi al tuo account</legend>
    <label for="username">Username:</label>
	   <input class="inputArea" type="text" name="username"  placeholder="Inserisci il tuo username">
    <label for="password">Password:</label>
      <input class="inputArea" type="password" name="pwd"  placeholder="Inserisci la tua password">
    <input class="formButton btn" type="submit" name="login_input" value="Login">
  </fieldset>
  <p>Non hai un account?</p>
  <button class="btn" type="button" name="" onclick="show_and_hide('registration_frm', 'login_frm')">Registrati!</button>
</form>
<form id="registration_frm" class="registration_frm" action="Models/usr_add.php" method="post">
  <fieldset class="box">
    <legend class="frm_title box">Inserisci i tuoi dati</legend>
    <input class="inputArea" type="text" name="username" placeholder="Il tuo Username qui" required>
    <input class="inputArea" type="email" name="mail" placeholder="La tua mail qui" required>
    <input class="inputArea" type="password" name="pwd" placeholder="La tua Password qui" required>
    <input class="formButton btn" type="submit" name="registration_submit" value="Conferma" required>
  </fieldset>
  <button class="btn" type="button" name="login_back" onclick="show_and_hide('login_frm', 'registration_frm')">Ho già un account</button>
</form>
</div>

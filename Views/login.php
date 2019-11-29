<form id="login_frm" class="login_frm" action="Models/usr_check.php" method="post">
  <fieldset>
    <legend>Accedi al tuo account</legend>
    <input type="text" name="username" placeholder="Il tuo Username">
    <input type="password" name="pwd" placeholder="La tua Password">
    <input type="submit" name="login_input" value="Login">
  </fieldset>
  <p>Non hai un account?</p>
  <button type="button" name="registration_frm" onclick="show_and_hide('registration_frm', 'login_frm')">Registrati!</button>
</form>
<form id="registration_frm" class="registration_frm" action="Functions/usr_add.php" method="post">
  <fieldset>
    <legend>Inserisci i tuoi dati</legend>
    <input type="text" name="username" placeholder="Il tuo Username qui">
    <input type="email" name="mail" placeholder="La tua mail qui">
    <input type="password" name="pwd" placeholder="La tua Password qui">
    <input type="submit" name="registration_submit" value="Conferma">
  </fieldset>
  <button type="button" name="login_back" onclick="show_and_hide('login_frm', 'registration_frm')">Ho già un account</button>
</form>


<style media="screen">
  .registration_frm {
    display: none;
  }
</style>

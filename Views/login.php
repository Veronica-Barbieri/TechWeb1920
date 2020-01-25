<div class="content" id="content">
  <?php if (isset($_GET["error"]) && !empty($_GET["error"])) {?>
      <p class="error"><?php echo $_GET["error"]; ?></p>
    <?php }?>
<form class="form login_frm" id="login_frm" action="Models/usr_check.php" method="post" onsubmit="return login_check()">
  <fieldset class="box">
    <legend class="frm_title box">Accedi al tuo account</legend>
    <div class="form_sez">
      <label for="username">Username:</label>
      <input class="inputArea" type="text" name="username" placeholder="Inserisci il tuo username" value="">
    </div>
    <div class="form_sez">
      <label for="password">Password:</label>
      <input class="inputArea" type="password" name="pwd" placeholder="Inserisci la tua password" value="">
    </div>
    <div class="form_sez">
      <input class="formButton btn" type="submit" name="login_input" value="Login">
    </div>
  </fieldset>
  <p>Non hai un account?</p>
  <button class="btn" type="button" name="" onclick="show_and_hide('registration_frm', 'login_frm')">Registrati!</button>
</form>
<form id="registration_frm" class="registration_frm hidden" action="Models/usr_add.php" method="post">
  <fieldset class="box">
    <legend class="frm_title box">Inserisci i tuoi dati</legend>
    <div class="form_sez">
      <label for="username">Username:</label>
      <input class="inputArea" type="text" name="username" placeholder="Il tuo Username qui" required>
    </div>
    <div class="form_sez">
      <label for="mail">Email:</label>
      <input class="inputArea" type="email" name="mail" placeholder="La tua mail qui" required>
    </div>
    <div class="form_sez">
      <label for="password">Password:</label>
      <input class="inputArea" type="password" name="pwd" placeholder="La tua Password qui" required>
    </div>
    <div class="form_sez">
      <input class="formButton btn" type="submit" name="registration_submit" value="Conferma" required>
    </div>
  </fieldset>
  <button class="btn" type="button" name="login_back" onclick="show_and_hide('login_frm', 'registration_frm')">Ho già un account</button>
</form>
</div>
<script type="text/javascript">
function login_check() {
  return true;
}
</script>
<!--
if (document.forms["login_frm"]["username"].value == "") {
  alert("Inserire uno username");
  return false;
}
if (document.forms["login_frm"]["pwd"].value == "") {
  alert("Inserire la password");
  return false;
}
-->

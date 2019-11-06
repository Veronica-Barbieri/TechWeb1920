<img src="Resources/carta1.jpg" alt="robba">
<h1>Username</h1>
<button type="button" name="edit_profile" onclick="show('usr_form')">
  Modifica le tue informazioni
</button>
<form class="usr_form" id="usr_form" action="usr_page.php" method="post">
  <fieldset>
    <legend for="filter">Modifica i tuoi dati:</legend>
    <label>Username</label>
    <input type="text" name="usrname" value="">
    <label>Email</label>
    <input type="email" name="mail" value="">
    <label>Password</label>
    <input type="password" name="pwd" value="">
    <textarea name="bio" rows="8" cols="50" placeholder="Una breve descrizione di te"></textarea>
    <input type="submit" name="save" value="Salva">
    <input type="submit" name="cancel" value="Cancella">
  </fieldset>
</form>
<h1>I mazzi creati da te!</h1>

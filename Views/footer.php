<div class="footer">
  <div class="sez-footer">
    <ul>
		<li class="footerTextTitle">Sviluppato da</li>
		<li class="footerText">Giacomo Bulbarelli</li>
		<li class="footerText">Veronica Barbieri</li>
		<li class="footerText">Martina Carbonara</li>
		<li class="footerText">Enrico Galdeman</li>
    </ul>
  </div>
  <div class="sez-footer">
    <div class="explore">
      <ul class="pg-nav">
		<li class="footerTextTitle">Esplora</li>
        <li class="fo-item"> <a class="nb-link link" href="index.php" xml:lang="en">Home</a> </li>
        <li class="fo-item"> <a class="nb-link link" href="regole.php">Regole</a> </li>
        <li class="fo-item"> <a class="nb-link link" href="cardwiki.php">Wiki Carte</a> </li>
        <li class="fo-item"> <a class="nb-link link" href="deck_forum.php" xml:lang="en">Forum</a> </li>
      </ul>
    </div>
  </div>
  <div class="sez-footer">
  	<ul>
  		<li class="footerTextTitle">Contattaci</li>
  		<li class="fo-item"> <a class="nb-link link" href="contacts.php" xml:lang="en">About us</a> </li>
      <?php if(isset($_SESSION["Username"]) && isset($_SESSION["Admin"])) { ?>
          <li class="fo-item"> <a class="nb-link link" href="admin_page.php" xml:lang="en">Amministrazione</a> </li>
      <?php } else {  ?>
          <li class="fo-item"> <a class="nb-link link" href="login.php" xml:lang="en">Amministrazione</a> </li>
      <?php } ?>
    </ul>
  </div>
</div>
</body>

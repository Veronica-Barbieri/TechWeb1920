<div class="footer">
  <ul class="sez-footer">
	  <li class="footerTextTitle">Esplora</li>
    <li class="fo-item"> <a class="fo-link link" href="index.php" xml:lang="en">Home</a> </li>
    <li class="fo-item"> <a class="fo-link link" href="regole.php">Regole</a> </li>
    <li class="fo-item"> <a class="fo-link link" href="cardwiki.php">Wiki Carte</a> </li>
    <li class="fo-item"> <a class="fo-link link" href="deck_forum.php" xml:lang="en">Forum</a> </li>
  </ul>
  <ul class="sez-footer">
  	<li class="footerTextTitle">Contattaci</li>
  	<li class="fo-item"> <a class="fo-link link" href="contacts.php" xml:lang="en">About us</a> </li>
    <?php if(isset($_SESSION["Username"]) && isset($_SESSION["Admin"])) { ?>
        <li class="fo-item"> <a class="fo-link link" href="admin_page.php" xml:lang="en">Amministrazione</a> </li>
    <?php } else {  ?>
        <li class="fo-item"> <a class="fo-link link" href="login.php" xml:lang="en">Amministrazione</a> </li>
    <?php } ?>
  </ul>
  <ul class="sez-footer">
    <li class="footerTextTitle">Sviluppato da</li>
    <li class="footerText">Giacomo Bulbarelli</li>
    <li class="footerText">Veronica Barbieri</li>
    <li class="footerText">Martina Carbonara</li>
    <li class="footerText">Enrico Galdeman</li>
  </ul>
</div>
</body>
</html>

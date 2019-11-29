<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <title xml:lang="en"><?php echo $pagein['Namepage']; ?> - MTG Deck Builder</title>
  <meta name="title" content="Magic the Gathering - Costruttore di mazzi e wiki" />
  <meta name="description" content="Costruttore ed organizzatore di mazzi per il gioco di carte Magic the Gathering" />
  <meta name="language" content="italian it" />
  <meta name="author" content="" />
  <meta name="keywords" content="gioco, carte, Magic the Gathering, MTG,
                                  mazzo, deck, regole" />

  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="Styles/index.css">
  <script type="text/javascript" src="Scripts/home.js"></script>
</head>

<body>
  <div class="header" id="header">
    <div class="nb-col1">
      <a class="nb-logo link" href="index.php">
        <i class="fab fa-wizards-of-the-coast" style="font-size: 7em;"></i>
      </a>
      <!-- Rivedere gli href per i nomi delle pagine -->
      <ul class="navbar">
        <li class="nb-item link"> <a class="nb-link link" href="index.php" xml:lang="en">Home</a> </li>
        <li class="nb-item link"> <a class="nb-link link" href="regole.php">Regole</a> </li>
        <li class="nb-item link"> <a class="nb-link link" href="cardwiki.php">Wiki Carte</a> </li>
        <li class="nb-item link"> <a class="nb-link link" href="deck_forum.php" xml:lang="en">Forum</a> </li>
        <li class="nb-item link"> <a class="nb-link link" href="contacts.php" xml:lang="en">About us</a> </li>
      </ul>

    </div>
    <?php if(isset($_SESSION["Username"])) {
      echo "<a class='nb-login link' href='usr_page.php'>";
      echo "<i class='fas fa-sign-in-alt' xml:lang='en'>".$_SESSION["Username"]."</i>";
      echo "</a>";
    } else {
      echo "<a class='nb-login link' href='login.php'>";
      echo "<i class='fas fa-sign-in-alt' xml:lang='en'>Login</i>";
      echo "</a>";
  } ?>
  </div>
</body>
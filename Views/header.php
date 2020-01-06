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
  <!--<link rel="stylesheet" href="Styles/index.css" media='all'>-->
  <link rel="stylesheet" type="text/css" href="Styles/mobile.css" media="all"/>
  <link rel="stylesheet" type="text/css" href='Styles/mobile.css' media="handheld,screen"/>
  <link rel="stylesheet" type="text/css" href='Styles/mobile.css' media="handheld,screen and (max-width:900px),
  only screen and (max-device-width: 600px)"/>

  <script type="text/javascript" src="Scripts/home.js"></script>
</head>

<body>
  <nav role="navigation">
    <div id="menuToggle">
      <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </input>
    </div>
    <ul id="menu">
        <a href="#"><li>Menu</li>
        <a href="index.php"><li>Home</li></a>
        <a href="cardwiki.php"><li>Hot decks</li>
        <a href="cardwiki.php"><li>Collezionale tutte</li>
        <a href="cardwiki.php"><li>Cerca la tua carta</li>
        <a href="regole.php"><li>Regole</li></a>
        <a href="cardwiki.php"><li>Wiki Carte</li></a>
        <a href="deck_forum.php"><li>Forum</li></a>
        <a href="contacts.php" xml:lang="en"><li>About us</li></a>
    </ul>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a>-->
  </nav>
    <div class="header" id="header">
    <div class="nb-col1">
      <a class="nb-logo" href="index.php">
        <i class="fab fa-wizards-of-the-coast" style="font-size: 5em;"></i>
      </a>
      <!-- Rivedere gli href per i nomi delle pagine -->
      <div class="title">Magic The Gathering</div>
      <ul class="navbar">
        <li class="nb-item"> <a class="nb-link" href="index.php" xml:lang="en">Home</a> </li>
        <li class="nb-item"> <a class="nb-link" href="regole.php">Regole</a> </li>
        <li class="nb-item"> <a class="nb-link" href="cardwiki.php">Wiki Carte</a> </li>
        <li class="nb-item"> <a class="nb-link" href="deck_forum.php">Forum</a> </li>
        <li class="nb-item"> <a class="nb-link" href="contacts.php" xml:lang="en">About us</a> </li>
      </ul>
    </div>
    <?php if(isset($_SESSION["Username"])) { ?>
      <a class='nb-login' href='usr_page.php'>
      <i class='fas fa-sign-in-alt' xml:lang='en'><?php echo $_SESSION["Username"] ?></i>
      </a>
    <?php } else {  ?>
      <a class='nb-login' href='login.php'>
      <i class='fas fa-sign-in-alt' xml:lang='en'>Login</i>
      </a>
  <?php } ?>
  </div>
</body>

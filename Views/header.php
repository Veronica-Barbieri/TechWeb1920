<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title xml:lang="en"><?php echo $pagein['Namepage']; ?> - MTG Deck Builder</title>
  <meta name="title" content="Magic the Gathering - Costruttore di mazzi e wiki" />
  <meta name="description" content="Costruttore ed organizzatore di mazzi per il gioco di carte Magic the Gathering" />
  <meta name="language" content="italian it" />
  <meta name="author" content="" />
  <meta name="keywords" content="gioco, carte, Magic the Gathering, MTG,
                                  mazzo, deck, regole" />
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="Styles/index.css" media='all' />
  <link rel="stylesheet" type="text/css" href="Styles/print.css" media="print" />
  <link rel="stylesheet" type="text/css" href='Styles/mobile.css' media="handheld,screen and (max-width:900px),
  only screen and (max-device-width: 600px)"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/><!-- WTF -->

  <script type="text/javascript" src="Scripts/home.js"></script><!-- da togliere -->
  <script defer="defer" type="text/javascript" src="Scripts/new_deck.js"></script><!-- da togliere -->
</head>
<body onload="enableTop()">
  <div id="skip_to_content">
    <a href="#content" tabindex="1">Salta al contenuto</a>
  </div>
  <div class="">
    <button onclick="topFunction()" id="totop" title="Go to top"><span xml:lang="eng">Back to Top</span></button>
  </div>
  <div class="navigation">
    <div id="menuToggle">
      <input type="checkbox" />
        <span class="hb_line"></span>
        <span class="hb_line"></span>
        <span class="hb_line"></span>
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="regole.php">Regole</a></li>
        <li><a href="cardwiki.php">Wiki Carte</a></li>
        <li><a href="deck_forum.php">Forum</a></li>
        <li><a href="contacts.php" xml:lang="en">About us</a></li>
      </ul>
    </div>
  </div>
  <div class="header hb_header">
    <h1 id="title">Magic The Gathering</h1>
    <?php if(isset($_SESSION["Username"])) { ?>
      <?php if(isset($_SESSION["Admin"])){ ?>
      <a class='nb-login nb-link' href='admin_page.php'>
      <?php } else {?>
        <a class='nb-login nb-link' href='usr_page.php'>
      <?php } ?>
      <span class="fas fa-user" xml:lang='en'></span>
      <?php echo $_SESSION["Username"] ?>
      </a>
    <?php } else {  ?>
      <a class='nb-login nb-link' href='login.php'>
      <span class="fas fa-user" xml:lang='en'></span>
      </a>
  <?php } ?>
  </div>
  <div class="header dt_menu">
    <div class="nb-logo">
      <img src="Resources/m-logo.png" alt="" />
    </div>
    <div class="nb-col1">
      <ul class="navbar">
        <li class="nb-item"><a class="nb-link" href="index.php" xml:lang="en"><span class="fas fa-home"></span>Home</a>
        </li><li class="nb-item"><a class="nb-link" href="regole.php"><span class="fas fa-scroll"></span>Regole</a></li>
        <li class="nb-item"><a class="nb-link" href="cardwiki.php"><span class="fas fa-hat-wizard"></span>Wiki Carte</a></li>
        <li class="nb-item"><a class="nb-link" href="deck_forum.php" xml:lang="en"><span class="fas fa-archive"></span>Forum</a></li>
        <li class="nb-item"><a class="nb-link" href="contacts.php" xml:lang="en"><span class="fas fa-users"></span>About us</a></li>
      </ul>
    </div>
    <?php if(isset($_SESSION["Username"])) { ?>
      <?php if(isset($_SESSION["Admin"])){ ?>
      <a class='nb-login' href='admin_page.php'>
      <?php } else {?>
        <a class='nb-login' href='usr_page.php'>
      <?php } ?>
      <span class='fas fa-sign-in-alt' xml:lang='en'></span>
      <?php echo $_SESSION["Username"] ?>
      </a>
    <?php } else {  ?>
      <a class='nb-login' href='login.php'>
      <span class='fas fa-sign-in-alt' xml:lang='en'></span>
      Login
      </a>
  <?php } ?>
  </div>

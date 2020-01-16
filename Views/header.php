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
  <script defer type="text/javascript" src="Scripts/new_deck.js"></script>
</head>
<body>
  <div class="header" id="header">
    <div class="nb-logo">
      <img src="Resources/m-logo.png" alt="">
    </div>
    <div class="nb-col1">
      <ul class="navbar">
         <li class="nb-item"><a class="nb-link" href="index.php" xml:lang="en"><i class="fas fa-home"></i>Home</a></li><li class="nb-item"><a class="nb-link" href="regole.php"><i class="fas fa-scroll"></i>Regole</a></li><li class="nb-item"><a class="nb-link" href="cardwiki.php"><i class="fas fa-hat-wizard"></i>Wiki Carte</a></li><li class="nb-item"><a class="nb-link" href="deck_forum.php" xml:lang="en"><i class="fas fa-archive"></i>Forum</a></li><li class="nb-item"><a class="nb-link" href="contacts.php" xml:lang="en"><i class="fas fa-users"></i>About us</a></li>
      </ul>
    </div>
    <?php if(isset($_SESSION["Username"])) { ?>
      <?php if(isset($_SESSION["Admin"])){ ?>
      <a class='nb-login nb-link' href='admin_page.php'>
      <?php } else {?>
        <a class='nb-login nb-link' href='usr_page.php'>
      <?php } ?>
      <i class='fas fa-sign-in-alt' xml:lang='en'></i>
      <?php echo $_SESSION["Username"] ?>
      </a>
    <?php } else {  ?>
      <a class='nb-login nb-link' href='login.php'>
      <i class='fas fa-sign-in-alt' xml:lang='en'></i>
      Login
      </a>
  <?php } ?>
  </div>

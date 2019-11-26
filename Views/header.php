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
      <a class="nb-logo" href="index.php">
        <i class="fab fa-wizards-of-the-coast" style="font-size: 7em;"></i>
      </a>
      <!-- Rivedere gli href per i nomi delle pagine -->
      <ul class="navbar">
        <li class="nb-item"> <a class="nb-link" href="index.php" xml:lang="en">Home</a> </li>
        <li class="nb-item"> <a class="nb-link" href="regole.php">Regole</a> </li>
        <li class="nb-item"> <a class="nb-link" href="cardwiki.php">Wiki Carte</a> </li>
        <li class="nb-item"> <a class="nb-link" href="deck_forum.php" xml:lang="en">Forum</a> </li>
        <li class="nb-item"> <a class="nb-link" href="contacts.php" xml:lang="en">About us</a> </li>
      </ul>

    </div>
    <a class="nb-login" href="login.php">
      <i class="fas fa-sign-in-alt" xml:lang="en">Login</i>
    </a>
  </div>
</body>

<style>

	.header{
		min-height:10%;
		background-color:#383838;
	}
	
	.nb-item{
		font-size:150%;
		margin-bottom:2%;
	}
	
	.fab fa-wizards-of-the-coast{
		top:0;
		height:auto;
		width:auto;
	}
	
	.nb-link{
		text-decoration: underline;
		text-decoration-color:burlywood;
	}
	
	.nb-logo{
		padding-top:2em;
		vertical-align:middle;
	}
	
	.nb-logo,.navbar{
		text-align: center;
	}
	.nb-login{
		text-align:right;
	}
	
	.nb-logo,.nb-link,.nb-login{
		color:burlywood;
	}
	
	.nb-link:visited,.nb-login:visited{
		color:chocolate;
		text-decoration-color:chocolate;
	}
	
	
	.nb-link:hover,.nb-login:hover,.nb-logo:hover{
		color:white;
		text-decoration-color:white;
	}
	
	.nb-login{
		font-size:150%;
	}
	
</style>
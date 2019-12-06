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
    <div class="nb-logo">
      <img src="Resources/m-logo.png" alt="">
    </div>
    <div class="nb-col1">
      <ul class="navbar">
         <li class="nb-item"><a class="nb-link" href="index.php" xml:lang="en">Home</a></li><li class="nb-item"><a class="nb-link" href="regole.php">Regole</a></li><li class="nb-item"><a class="nb-link" href="cardwiki.php">Wiki Carte</a></li><li class="nb-item"><a class="nb-link" href="deck_forum.php" xml:lang="en">Forum</a></li><li class="nb-item"><a class="nb-link" href="contacts.php" xml:lang="en">About us</a></li>
      </ul>
    </div>
    <div class="nb-login">
      <?php if(isset($_SESSION["Username"])) {
        echo "<a class='nb-link' href='usr_page.php'>";
        echo "<i class='fas fa-sign-in-alt' xml:lang='en'></i>";
        echo $_SESSION["Username"]."</a>";
      } else {
        echo "<a class='nb-link' href='login.php'>";
        echo "<i class='fas fa-sign-in-alt' xml:lang='en'></i>";
        echo "Login</a>";
      } ?>
    </div>
  </div>

<style>
  .header{
    width: 100%;
    text-align: center;
    background-color: #383838;
    border-bottom: 3px solid;
    box-shadow: inset 0px -2px 31px 0.1em black;
  }

  .nb-col1, .nb-login, .nb-logo, .nb-item{
    display: inline-block;
  }
  .nb-logo{
    text-align: left;
    vertical-align: middle;
    padding: 1.1em;
  }
  .nb-logo img{
    width: 4em;
  }
  .nb-col1{
    width: 85%;
    margin: 0 auto;
    text-align: center;
    vertical-align: middle;
  }
  .nb-login{
    text-align: right;
  }
  .nb-item{
    padding: 0.7em 0;
    border-right: 2px solid #d2691e;
  }
  .nb-item:first-child{
    border-left: 2px solid #d2691e;
  }
  .nb-item:hover{
    background-color: #d2691e;
    transition: 0.3s;
  }
  .nb-link{
    padding: 0.7em 1em;
    font-size: 1.2em;
    color: #fff8dc;
  }
/*
	.header{
		background-color:#383838;
	}
  .nb-col1 {
    display: inline-block;
    width: 80%;
  }
  .navbar {
    display: inline-block;
    text-align: center;
    width: 80%;
  }
  .nb-logo , .nb-login{
    display: inline-block;
    width: 19%;
  }
  .nb-logo {
    text-align: left;
  }
  .nb-login{
    text-align:right;
  }

	.nb-item, .nb-login{
		font-size: 1.3em;
	}
  .nb-item{
    display: inline-block;
    padding: 1em;
    border-right: 1px solid #d2691e;
  }
  .nb-item:first-child{
    border-left: 1px solid #d2691e;
  }

	.nb-logo, .navbar, .nb-login{
		vertical-align:middle;
    color:burlywood;
	}

	.nb-link:visited,.nb-login:visited{
		color:chocolate;
		text-decoration-color:chocolate;
	}


	.nb-link:hover,.nb-login:hover,.nb-logo:hover{
		color:white;
	}
*/
</style>

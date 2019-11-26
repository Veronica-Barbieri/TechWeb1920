<div class="content">
	<div class="box" id="presentation">
		<h1> Benvenuto giovane avventuriero!</h1>
		<p class="simpleText"> Vi diamo il benvenuto nella nostra pagina di informazioni riguardanti il nostro sito.
		Il nostro sito di <span xml:lang="en"> Magic: The Gathering </span> &eacute; stato creato per aiutare giovani ed esperti a creare i propri deck personalizzati in modo facile e veloce.
		Se avete domande particolari che volete chiederci basta contattarci nella<span xml:lang="en"> form</span> sottostante;
		Buon Divertimento!
		</p>
	</div>

	<div class="box" id="form">
		<form action="contacts.php" method="post">
		<fieldset>
			<legend><span xml:lang="en">Form </span>di contatto</legend>
				<p class="simpleText">Nome:<input type="text" name="nome"><br></p>
				<p class="simpleText">Cognome:<input type="text" name="cognome"><br></p>
				<p class="simpleText">E-mail:<input type="email" name="email"><br></p>
				<p class="simpleText">Oggetto:<input type="text" name="oggetto"><br></p>
				<p class="simpleText">Commento:<textarea rows="6" cols="40" input type="text" name="testo" placeholder="Scrivi qui il tuo commento"></textarea><br></p>
			<input class="button" type="submit" name="contacts_input" value="Invia il tuo commento">
		</fieldset>
		</form>
	</div>
</div>

<style>

	body{
		background:#383838;
	}

	legend{
		padding:0.3em;
		text-align:center;
		color:cornsilk;
	}
	
	fieldset{
		color:cornsilk;
		width:50%;
		text-align:center;
		margin:auto;
	}
	
	#form .simpleText{
		margin:0.5em;
	}
	
	#form .button{
		margin:1em;
	}
	
	.simpleText{
		padding-left: 8em;
		padding-right:8em;
	}
  
	
	h1,h2,ul li{
		color:cornsilk;
	}
	
	p{
		color:white;
	}
</style>
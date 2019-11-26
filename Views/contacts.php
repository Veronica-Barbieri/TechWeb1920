<div class="content">
	<div class="box" id="presentation">
		<h1> Benvenuto giovane avventuriero!</h1>
		<p> Vi diamo il benvenuto nella nostra pagina di informazioni riguardanti il nostro sito.
		Il nostro sito di <span xml:lang="en"> Magic: The Gathering </span> &eacute; stato creato per aiutare giovani ed esperti a creare i propri deck personalizzati in modo facile e veloce.
		Se avete domande particolari che volete chiederci basta contattarci nella<span xml:lang="en"> form</span> sottostante;
		Buon Divertimento!
		</p>
	</div>

	<div class="box" id="form">
		<form action="contacts.php" method="post">
		<fieldset>
			<legend><span xml:lang="en">Form </span>di contatto</legend>
				Nome:<input type="text" name="nome"><br>
				Cognome:<input type="text" name="cognome"><br>
				E-mail:<input type="email" name="email"><br>
				Oggetto:<input type="text" name="oggetto"><br>
				Commento:<textarea rows="6" cols="40" input type="text" name="testo" placeholder="Scrivi qui il tuo commento"></textarea><br>
			<input type="submit" name="contacts_input" value="Contacts">
		</fieldset>
		</form>
	</div>
</div>

<style>
	body{
		background:#383838;
	}

	legend{
		text-align:center;
		color:cornsilk;
	}
	
	fieldset{
		color:cornsilk;
		width:50%;
		text-align:center;
		margin:auto;
	}
	
	h1,p{
		text-align:center;
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
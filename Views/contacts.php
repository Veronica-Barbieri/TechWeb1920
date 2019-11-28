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
				<label for="nome" class="simpleText">Nome:</label>
				<input class="inputArea"type="text" name="nome">
				<label for="cognome" class="simpleText">Cognome:</label>
				<input class="inputArea" type="text" name="cognome">
				<label for="e-mail" class="simpleText">E-mail:</label>
				<input class="inputArea" type="email" name="email">
				<label for="oggetto" class="simpleText">Oggetto:</label>
				<input class="inputArea" type="text" name="oggetto">
				<label for="commento" class="simpleText">Commento:</label>
				<textarea class="inputArea" rows="6" cols="40" input type="text" name="testo"></textarea>
			    <input class="button" type="submit" name="contacts_input" value="Invia il tuo commento">
		</fieldset>
		</form>
	</div>
</div>

<style>
	body{
		background:#383838;
	}

	fieldset{
    margin: auto;
    width: 50%;
    text-align: center;
	color:cornsilk;
  }
  
  fieldset > input {
    display: inline-block;
    margin: 0.5em;
  }
  
  fieldset > legend {
    padding: 0.3em;
    margin-left: 0.5em;
  }
 
  legend{
	  padding:0.3em;
	  text-align:center;
	  color:cornsilk;
  }
  
	
	#form .simpleText{
		margin:0.5em;
		display:block;
	}
	
	#form .button{
		margin:1em;
		display:block;
		margin:auto;
		margin-top:2em;
		margin-bottom:2em;
	}
	
	#presentation .simpleText{
		padding-left:8em;
		padding-right:8em;
	}
	
	.inputArea{
		color:white;
		background-color:grey;
	}
	
	h1,h2,ul li{
		color:cornsilk;
	}
	
	p{
		color:white;
	}
</style>
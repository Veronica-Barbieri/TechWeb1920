<div class="content">
	<div class="box" id="rules">
		<h1> Insegui nuove sfide! </h1>
			<p> Benvenuto nel mondo di <span xml:lang="en"> Magic: The Gathering </span>, il gioco di carte collezionabili di maggior successo al mondo. Stai per scoprire i motivi che spingono
			milioni di persone in tutto il pianeta a giocare a Magic: profondità strategica, mondi fantastici, personaggi carismatici e una community globale.
			Esistono migliaia di carte tra cui scegliere: da dove iniziare? Ogni giocatore deve possedere un mazzo contenente almeno 60 carte e un intropack è
			un ottimo modo per procurarsene uno. Gli intro pack ti forniscono tutto il necessario per iniziare a giocare: un mazzo di 60 carte, pronto per
			essere usato, pieno di creature, terre e altre magie. Troverai anche due buste da 15 carte che potrai sfruttare per personalizzare il tuo mazzo.
			In alternativa, puoi sempre registrarti sul sito di <span xml:lang="en"> Magic: The Gathering Arena </span> e scaricare una versione digitale del gioco,
			ottenendo i mazzi di base gratuitamente e lanciandoti in una sfida contro giocatori da tutto il mondo.
		</p>
	</div>

	<div class="box" id="hot_decks">
		<h1> Hot Decks </h1>
		<?php foreach ($deck as $num => $value) { ?>
			<div class="deck">
				<p><?php echo $value["Nome"] ?><p>
				<p><?php echo $value["Autore"] ?></p>
				<p><?php echo $value["Tipo"] ?></p>
			</div>
		<?php } ?>
	</div>

	<div class="box" id="card_panel">
		<h1>Collezionale tutte!</h1>
		<div class="color_container">
			<?php foreach ($trisample as $key => $value) { ?>
			<button id="manaButton<?php echo $key?>" type="button" name="button<?php echo $key ?>" onclick="changeCards('pannel<?php echo $key ?>')" alt="<?php echo $Colori[$key] ?>">
			</button>
			<?php } ?>
				<div class="pannelcarte">
					<?php foreach ($trisample as $key => $pannel) { ?>
					<div class="singlepannel <?php echo "".($key==0) ? "active" : ""; ?> " id="pannel<?php echo $key ?>">
						<?php foreach ($pannel as $card) { ?>
							<div class="carta">
								<h1><?php echo $card["Nome"]?></h1>
								<img class="immagine" src="<?php echo $card["Img_path"]?>" alt="<?php echo $card["Id"]?>">
							</div>
						<?php } ?>
					</div>
				<?php } ?>
				</div>
		</div>
	</div>
	
</div>

<style>

	<?php foreach ($trisample as $key => $value) { ?>
	#manaButton<?php echo $key?>{
		background:url('./Resources/<?php echo $ManaColors[$key]?>') no-repeat;
		cursor:pointer;
		width:2em;
		height:2em;
		border: none;
	}
	<?php } ?>
	
	.box{
		background-color:#383838;
	}
	
	.deck,#hot_decks h1{
	 text-align:center;	
	}
	
	h1,p{
		text-align:center;
		padding-left: 8em;
		padding-right:8em;
	}
	h1{
		text-align:center;
		color:cornsilk;
	}
	
	#card_panel h1{
		text-align:center;
	}
	
	p{
		color:white;
	}
	
	.carta h1{
		padding:0em;
	}
	
	.color_container{
		text-align:center;
	}
	
	.immagine{
		width:50%;
	}
	
</style>
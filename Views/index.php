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
	<div class="hot_decks inline_el box" id="hot_decks">
		<h1> Hot Decks </h1>
		<?php foreach ($deck as $num => $value) { ?>
				<h1> <?php echo $value["Nome"]; ?> </h1>
				<?php
				if($value["Colore_verde"])
					echo "<img src='Resources/Green_Mana.png' alt='colore mazzo verde'>";
				if($value["Colore_rosso"])
					echo "<img src='Resources/Red_Mana.png' alt='colore mazzo rosso'>";
				if($value["Colore_blu"])
					echo "<img src='Resources/Blue_Mana.png' alt='colore mazzo blu'>";
				if($value["Colore_nero"])
					echo "<img src='Resources/Black_Mana.png' alt='colore mazzo nero'>";
				if($value["Colore_bianco"])
					echo "<img src='Resources/White_Mana.png' alt='colore mazzo bianco'>";
				?>
				<p> <?php echo $value["Autore"]; ?> </p>
				<p> <?php echo $value["Tipo"]; ?> </p>
		<?php } ?>
	</div>
	<div class="color_container_box inline_el box" id="card_panel">
		<h1>Collezionale tutte!</h1>
		<div class="color_container">
			<div class="color_btn_box">
				<?php foreach ($trisample as $key => $value) { ?>
					<button class="manaButton" type="button" name="button<?php echo $Colori["$key"]; ?>" onclick="changeCards('pannel<?php echo $key; ?>')" alt="<?php echo $Colori["$key"]; ?>">
						<img src="Resources/<?php echo $ManaColors["$key"]; ?>" alt="<?php echo $Colori["$key"]; ?>">
					</button>
				<?php } ?>
			</div>
			<div class="pannelcarte">
				<?php foreach ($trisample as $key => $pannel) { ?>
				<div class="singlepannel <?php echo "".($key==0) ? "active" : ""; ?> " id="pannel<?php echo $key; ?>">
					<?php foreach ($pannel as $card) { ?>
						<div class="carta inline_el">
							<h1 class="card_title"><?php echo $card["Nome"];?></h1>
							<img class="card_img" src="<?php echo $card["Img_path"];?>" alt="<?php echo $card["Id"];?>">
						</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<style>

	.inline_el{
		display: inline-block;
	}
	.content{
		background-color:#383838;
	}
	.btn {
		cursor:pointer;
	}
	.manaButton{
		border: solid;
		padding: 0.5em 2em 0.2em 2em;
		color:white;
		background-color:#383838;
	}

	.content p{
		padding-left: 8em;
		padding-right:8em;
		color:white;
	}
	.content h1{
		color:cornsilk;
		font-size: 2em;
		padding-bottom: 0.5em;
	}
	.color_btn_box {
		width: 100%;
	}
	.color_container_box {
		text-align: center;
	}
	.singlepannel{
	  display: none;
	  width: 100%;
	}
	.carta{
	  margin-left:2em;
	  margin-top:0.5em;
		width: auto;
	}
	.active {
	  display: block;
	}
	.card_img{
		width: 12em;
	}
	.card_title{
		font-size: 1em;
	}
	.manaButton:focus{
		background-color:cornsilk;
	}

</style>

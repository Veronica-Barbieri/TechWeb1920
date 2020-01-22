<div class="content">
	<div class="pres_text" id="index_pres">
		<h1> Insegui nuove sfide! <i class="fas fa-trophy"></i></i></h1>
		<p class="simpleText">
			<p id="primo"> Benvenuto nel mondo di <span class="magic" xml:lang="en"> Magic: The Gathering </span>, il gioco di carte collezionabili di maggior successo al mondo!
			<span>Stai per scoprire i motivi che spingono milioni di persone in tutto il pianeta a giocare a Magic: profondità strategica, mondi fantastici, personaggi carismatici e una community globale.</span>

			<h2>Esistono migliaia di carte* tra cui scegliere: da dove iniziare?</h2>
			<p id="secondo">Ogni giocatore deve possedere un mazzo contenente almeno 60 carte e un intropack è un ottimo modo per procurarsene uno.</p>

			<h2>Cos'è un intropack?</h2>
			<p id="terzo">Gli intro pack ti forniscono tutto il necessario per iniziare a giocare: un mazzo di 60 carte, pronto per essere usato, pieno di creature, terre e altre magie.
			<span>Troverai anche due buste da 15 carte che potrai sfruttare per personalizzare il tuo mazzo.</span></p>

			<p id="alt">*In alternativa, puoi sempre registrarti sul sito di <span class="magic" xml:lang="en"> Magic: The Gathering Arena </span> e scaricare una versione digitale del gioco,
			<span>ottenendo i mazzi di base gratuitamente e lanciandoti in una sfida contro giocatori da tutto il mondo.<span></p>
		</p>
	</div>
	<div class="box inline_el" id="hot_decks">
		<h1 id="decks"> Hot Decks </h1>
		<?php foreach ($deck as $num => $value) { ?>
			<div class="single_hot_deck">
				<h2> <?php echo $value["Nome"]; ?> </h2>
				<?php if($value["Colore_verde"]) { ?>
					<img src='Resources/Green_Mana.png' alt='colore mazzo verde'>
				<?php } if($value["Colore_rosso"]) { ?>
					<img src='Resources/Red_Mana.png' alt='colore mazzo rosso'>
				<?php } if($value["Colore_blu"]) { ?>
					<img src='Resources/Blue_Mana.png' alt='colore mazzo blu'>
				<?php } if($value["Colore_nero"]) { ?>
					<img src='Resources/Black_Mana.png' alt='colore mazzo nero'>
				<?php } if($value["Colore_bianco"]) { ?>
					<img src='Resources/White_Mana.png' alt='colore mazzo bianco'>
				<?php } ?>
				<p class="simpleText"> <?php echo $value["Autore"]; ?> </p>
				<p class="simpleText"> <?php echo $value["Tipo"]; ?> </p>
			</div>
		<?php } ?>
	</div>
	<div class="color_container_box inline_el box" id="card_panel">
		<h1 id="colleziona">Collezionale tutte!</h1>
		<div class="color_container">
			<div class="color_btn_box">
				<?php foreach ($trisample as $key => $value) { ?>
					<button class="manaButton" type="button" name="button<?php echo $Colori["$key"]; ?>" onclick="changeCards('pannel<?php echo $key; ?>')" alt="<?php echo $Colori["$key"]; ?>">
						<img src="Resources/<?php echo $ManaColors["$key"]; ?>" alt="<?php echo $Colori[$key]; ?>">
					</button>
				<?php } ?>
			</div>
			<div class="pannelcarte">
				<?php foreach ($trisample as $key => $pannel) { ?>
					<div class="<?php echo "".($key==0) ? "active" : "hidden"; ?> " id="pannel<?php echo $key; ?>">
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

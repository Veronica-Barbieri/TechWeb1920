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
			<p><?php echo $value["nome"] ?><p>
			<p><?php echo $value["autore"] ?></p>
			<p><?php echo $value["param"] ?></p>
			<p><?php echo $value["note"] ?></p>
		</div>
	<?php } ?>
</div>



<div class="box" id="card_panel">
	<h1>Collezzionale tutte!</h1>
	<div class="color_container">
		<?php foreach ($button as $key => $value) { ?>
    <button type="button" name="button<?php echo $key ?>" onclick="changeCards('pannel<?php echo $key ?>')">
      Bottone <?php echo $key+1 ?>
    </button>
  <?php } ?>
  <div class="pannelcarte">
    <?php foreach ($button as $key => $pannel) { ?>
      <div class="singlepannel <?php echo "".($key==0) ? "active" : ""; ?> " id="pannel<?php echo $key ?>">
        <?php foreach ($pannel as $card) { ?>
          <div class="carta">
            <h1><?php echo $card["titolo"]?></h1>
            <img src="<?php echo $card["img"]?>" alt="<?php echo $card["alt"]?>">
					</div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
	</div>
</div>

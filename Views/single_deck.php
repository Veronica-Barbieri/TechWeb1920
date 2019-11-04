<div class="deck_about">
  <h1> <?php echo $info_deck["nome"] ?> </h1>
  <h2> <?php echo $info_deck["autore"] ?> </h2>
  <p> <?php echo $info_deck["param"] ?> </p>
  <p> <?php echo $info_deck["note"] ?> </p>
</div>

<div class="deck_cards">
  <div class="card_type">
      <h1>Artefatto</h1>
      <ul> <!-- aggiungere anteprima carta on hover -->
        <?php foreach ($cards_in_deck as $key => $value) {
          if ($value["tipo"] == "tipo carta") { ?>
          <li>
            <p> <?php echo $value["nome"]; ?> </p>
            <p> <?php echo $value["q.ta"]; ?> </p>
            <img src="<?php echo $value["costo"]; ?>" alt="costo carta">
          </li>
        <?php }
      } ?>
      </ul>
  </div>

  <h1>Creatura</h1>
  <h1>Incantesimo</h1>
  <h1>Istantaneo</h1>
  <h1>Planeswalker</h1>
  <h1>Stregoneria</h1>
  <h1>Terra</h1>
  <h1>Tribale</h1>
</div>

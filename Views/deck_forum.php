<form class="src_form" action="deck_forum.php" method="get"><!-- da implementare la gestione del form -->
  <fieldset class="src_col1">
    <legend for="filter">Cerca un mazzo:</legend>
    <div class="src_field_group">
      <div class="input">
        <label>Nome del mazzo</label>
        <input type="text" name="nomemazzo" value="">
      </div>
      <div class="input">
        <label>Nome dell'autore</label>
        <input type="text" name="nomeautore" value="">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/White_Mana.png" alt="Bianco">
        </label>
        <input type="checkbox" name="color" value="Bianco">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Blue_Mana.png" alt="Blu">
        </label>
        <input type="checkbox" name="color" value="Blu">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Black_Mana.png" alt="Nero">
        </label>
        <input type="checkbox" name="color" value="Nero">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Red_Mana.png" alt="Rosso">
        </label>
        <input type="checkbox" name="color" value="Rosso">
      </div>
      <div class="color_checkbox">
        <label for="color">
          <img src="Resources/Green_Mana.png" alt="Verde">
        </label>
        <input type="checkbox" name="color" value="Verde">
      </div>
    </div>
    <legend for="filter">Filtra per:</legend>
    <div class="src_field_group">
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Tipo di mazzo:</label>
        <select class="src_dropdown" name="Tipo">
          <option value="None">Nessuna scelta</option>
          <option value="Aggro">Aggro</option>
          <option value="Creatura">Creatura</option>
          <option value="Incantesimo">Incantesimo</option>
          <option value="Istantaneo">Istantaneo</option>
          <option value="Planeswalker">Planeswalker</option>
          <option value="Stregoneria">Stregoneria</option>
          <option value="Terra">Terra</option>
          <option value="Tribale">Tribale</option>
        </select>
      </div>
      <div class="src_dropdown_group">
        <label class="dropdown_text" for="order">Ordina per:</label>
        <select class="src_dropdown" name="Order" id="order">
          <option value="None">Nessuna scelta</option>
          <option value="Nome">Nome del mazzo</option>
          <option value="Public">Pubblicazione</option>
        </select>
      </div>
    </div>
  </fieldset>
  <input type="submit" value="Cerca">
</form>

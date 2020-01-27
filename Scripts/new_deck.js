//-----------------------------------------------------------------------------
// FUNZIONI PER MODIFICARE IL MAZZO IN CREAZIONE (AGGIUNGERE O ELIMINARE CARTE)
//-----------------------------------------------------------------------------

function num_card_popup(id) {
  var ris;
  var num =prompt("Scrivi la molteplicità di questa carta:","0");
  var pnum = parseInt(num, 10);
  if ((pnum == 0 || isNaN(pnum)) && num!=null) {
    window.alert('Dati errati');
  } else if (num == null){
    return;
  } else {
    ris = [id,num];
    add_card_deck(ris);
  }
}

function add_card_deck(data_array) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("current_usr_deck").innerHTML +=
      this.responseText;
    }
  };
  xhttp.open("GET", "Models/new_deck_card.php?id="+data_array[0]+"&num="+data_array[1], true);
  xhttp.send();
}

function remove_card_deck(card, id){
  var rem = new XMLHttpRequest();
  rem.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var cardToRemove = document.getElementById(card);
      cardToRemove.remove();
    }
  };
  rem.open("GET", "Models/remove_card.php?id="+id, true);
  rem.send();
}

function delete_deck(id) {
  var del = new XMLHttpRequest();
  del.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var deckToRemove = document.getElementById("deck_box_"+id);
      deckToRemove.remove();
    }
  };
  del.open("GET", "Models/remove_user_deck.php?id="+id, true);
  del.send();
  var deleting = document.createElement("p");
  deleting.innerHTML = "Eliminazione in corso <span class=\"fas fa-spinner fa-spin\"></span>";
  document.getElementById("deck_box_"+id).appendChild(deleting);
}

//-----------------------------------------------------------------------------
//FUNZIONI PER L'AGGIORNAMENTO DELLA LISTA DI CARTE DISPONIBILI PER IL MAZZO
//-----------------------------------------------------------------------------

//funzione che crea un nuovo ul a partire da un id passatigli in POST

function loadMoar(init, limit, listElm) {
  document.getElementById("infinite-spin").className = "active";
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("infinite-spin").className = "hidden";
      var toInsert = this.responseText;
      listElm.innerHTML += toInsert;
    }
  };
  req.open("GET", "Models/new_list_card.php?init="+init+"&limit="+limit, true);
  req.send();
}

//-----------------------------------------------------------------------------
// FUNZIONI PER MODIFICARE IL MAZZO IN CREAZIONE (AGGIUNGERE O ELIMINARE CARTE)
//-----------------------------------------------------------------------------

function num_card_popup(id,nome) {
  var ris;
  var num = prompt("Scrivi la molteplicità di questa carta:","0");
  if (num == 0 || num =="") {
    window.alert('Dati errati');
  } else {
    ris = [id,nome,num];
  }
  add_card_deck(ris);
}

function add_card_deck(data_array) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("current_usr_deck").innerHTML +=
      this.responseText;
    }
  };
  xhttp.open("GET", "Models/new_deck_card.php?id="+data_array[0]+"&nome="+data_array[1]+"&num="+data_array[2], true);
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
  deleting.innerHTML = "Eliminazione in corso <i class=\"fas fa-spinner fa-spin\"></i>";
  document.getElementById("deck_box_"+id).appendChild(deleting);
}

//-----------------------------------------------------------------------------
//FUNZIONI PER L'AGGIORNAMENTO DELLA LISTA DI CARTE DISPONIBILI PER IL MAZZO
//-----------------------------------------------------------------------------

//funzione che crea un nuovo ul a partire da un id passatigli in POST

function add_card_list(card, id) {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      card.innerHTML += this.responseText;
    }
  };
  req.open("GET", "Models/new_list_card.php?id="+id, true);
  req.send();
}

// aggiungo 5 carte
var cardId = 1;
var cardInDB = 43;

if(window.location.pathname=="/edsa-TechWeb1920/new_deck.php"){
  var listElm = document.querySelector('#infinite-list');
}

var loadMore = function() {
  for (var i = 0; i < 5 && cardId < cardInDB; i++) {
    var item = document.createElement('ul');
    add_card_list(item, cardId);
    cardId++;
    listElm.appendChild(item);
    item.classList.add("card_box");
  }
}

if(window.location.pathname=="/edsa-TechWeb1920/new_deck.php"){
// Controllo quando ho raggiunto la fine della scrollbar
  listElm.addEventListener('scroll', function() {
    if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
      loadMore();
    }
  });
}

// Carico degli elementi appena viene caricata la pagina
if(window.location.pathname=="/edsa-TechWeb1920/new_deck.php"){
  loadMore();
}

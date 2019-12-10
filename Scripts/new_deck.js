function num_card_popup(id,nome) {
  var ris;
  var num = prompt("Scrivi la molteplicit&grave di questa carta:","0");
  if (num == 0 || num =="") {
    //errore diopane
  }else {
    ris = [id,nome,num];
  }
  add_card(ris);
}

function add_card(data_array) {//EDIT
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("current_usr_deck").innerHTML +=
      this.responseText;
    }
  };
  xhttp.open("GET", "new_deck_card.php?id="+data_array[0]+"&nome="+data_array[1]+"&num="+data_array[2], true);
  xhttp.send();
}

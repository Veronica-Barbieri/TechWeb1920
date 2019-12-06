function changeCards(pannelid){
  document.getElementsByClassName('active')[0].className = "singlepannel";
  document.getElementById(pannelid).className = "singlepannel active";

}

function show(id) {
  document.getElementById(id).style.display = "block";
}

function hide(id) {
  document.getElementById(id).style.display = "none";
}

function show_and_hide(show_id, hide_id){
  document.getElementById(show_id).style.display = "block";
  document.getElementById(hide_id).style.display = "none";
}

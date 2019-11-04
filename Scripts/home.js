function changeCards(pannelid){
  document.getElementsByClassName('active')[0].className = "singlepannel";
  document.getElementById(pannelid).className = "singlepannel active";

}

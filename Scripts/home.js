function changeCards(pannelid){
  document.getElementsByClassName('active')[0].className = "hidden";
  document.getElementById(pannelid).className = "active";

}

function show(id) {
  var element = document.getElementById(id);
  element.classList.add("active");
  element.classList.remove("hidden");
}

function hide(id) {
  var element = document.getElementById(id);
  element.classList.add("hidden");
  element.classList.remove("active");
}

function show_and_hide(show_id, hide_id){
  var show_element = document.getElementById(show_id);
  show_element.classList.add("active");
  show_element.classList.remove("hidden");
  var hide_element = document.getElementById(hide_id);
  hide_element.classList.add("hidden");
  show_element.classList.remove("active");
}

function enableTop() {
  var mybutton = document.getElementById("totop");
  window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }};
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

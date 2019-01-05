function showPanel() {
    var hideElement = document.getElementById("hidden");
    var hideSvg1 = document.getElementById("feather-chevrons-down");
    var hideSvg2 = document.getElementById("feather-chevrons-up");
    if (hideElement.style.display == 'none') {
        hideElement.style.display = "flex";
        hideSvg1.style.display = "none";
        hideSvg2.style.display = "flex";
    } else {
        hideElement.style.display = "none";
        hideSvg1.style.display = "flex";
        hideSvg2.style.display = "none";
    }
}

//manual and automatic slideshow
var slideIndex = 1;
var timer = null;
window.onload = function() {
    showSlides(slideIndex);
    console.log(document.referrer);
}

function plusSlides(n) {
    clearTimeout(timer);
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("photosection");
    var dots = document.getElementsByClassName("slideshowButton");
    if (n == undefined) { n = ++slideIndex }
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
    timer = setTimeout(showSlides, 9000);
}
//gjuhet
function dropdownMenu() {
    var menu = document.getElementById("dropdownMenu");
    var chvrd = document.getElementById("chevdown1")
    var chvru = document.getElementById("chevup1")
    if (menu.style.display == "none") {
        menu.style.display = "flex";
        menu.style.flexDirection = "column";
        chvrd.style.display = "none";
        chvru.style.display = "flex";
    } else {
        menu.style.display = "none";
        chvru.style.display = "none";
        chvrd.style.display = "flex";
    }
}
//kuizet
function dropdownMenu2() {
    var menu = document.getElementById("dropdownMenu2");
    var chvrd = document.getElementById("chevdown2")
    var chvru = document.getElementById("chevup2")
    if (menu.style.display == "none") {
        menu.style.display = "flex";
        menu.style.flexDirection = "column";
        chvrd.style.display = "none";
        chvru.style.display = "flex";
    } else {
        menu.style.display = "none";
        chvru.style.display = "none";
        chvrd.style.display = "flex";
    }
}

//geolocation
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

//drag and drop
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}


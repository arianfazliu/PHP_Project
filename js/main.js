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
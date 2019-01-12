\
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
<<<<<<< HEAD
window.onload = function() {+---------
=======

window.onload = function() {
>>>>>>> 219402df0b365f12031053379e31b715a873fe35
    showSlides(slideIndex);

    //search input regex
    var input = document.getElementById("search-inputi");
    var regex = /[d-o]/g;
    input.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            var vleraeinputit = input.value;
            var n;
            var mypa1 = document.getElementsByClassName("heyyou");
            for (n = 0; n < mypa1.length; n++) {
                var mypa2 = mypa1[n];
                var mypar = mypa2.innerHTML;
                var i;
                var result = [];
                if (new RegExp(vleraeinputit).test(mypar)) {
                    var index = mypar.split(" ");
                    for (i = 0; i < index.length; i++) {
                        if (vleraeinputit.match(index[i])) {
                            var h = index[i];
                            result.push(h);
                        }
                    }
                    var x = result.join(" ");
                    console.log(x);
                    var uniqueItems = [...new Set(x)];
                    console.log(uniqueItems);
                    mypa2.style.color = "pink";
                    mypa2.scrollIntoView();
                    window.scrollBy(0, -100);
                }
            }
        }
    });
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
        navigator.geolocation.getCurrentPosition(showPosition, showError);
        console.log("there must be a problem with the position")
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    console.log("geolocation not supported ")
    x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
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

//Ndrrimi i backgroundit pergjate dites
window.addEventListener('load', function() {
    var today = new Date();
    var hr = today.getHours();
    var body = document.getElementById("backgroundColor");
    if (hr < 10) {
        body.style.backgroundColor = "#36434a";

    } else if (hr >= 10 && hr < 19) {
        body.style.backgroundColor = "#2f3d44";

    } else if (hr >= 19) {
        body.style.backgroundColor = "black";

    }

});

function comeIntoView() {
    var tips = document.getElementById("tips");
    tips.style.boxShadow = "6px 6px 5px 1px #4B616F";
    setTimeout(function() { tips.style.boxShadow = 'none'; }, 1000);
}

function comeIntoView1() {
    var learners = document.getElementById("learners");
    learners.style.boxShadow = "6px 6px 5px 1px #4B616F ";
    setTimeout(function() { learners.style.boxShadow = 'none'; }, 1000);
}

window.addEventListener('load', function() {
    function date() {
        var date = new Date();
        console.log("working");
        document.getElementById("date").innerHTML = date;
    }
});

//WINDOW START WEB WORKER

/*var w;
function startWorker() {
    console.log("punon");
    if (typeof(Worker) !== "undefined") {
        if (typeof(w) == "undefined") {
            w = new Worker("demo_workers.js");
        }
        w.onmessage = function(event) {
            document.getElementById("result").innerHTML = event.data;
        };
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
    }
}

<<<<<<< HEAD
window.onload = function(){
    date();gf
} 
function date(){
    var date= new Date();
    console.log("working");
    document.getElementById("date").innerHTML=date;
    console.log("not working");
}
=======
function stopWorker() {
    w.terminate();
    w = undefined;
}*/
>>>>>>> 219402df0b365f12031053379e31b715a873fe35


function leaveLogIn(){
  /*var popup2 = document.getElementById("myLoginPopup");
  popup2.style.display="none";*/
  window.location.href = "index.html";
}
$(document).ready(function(){
  $("form").submit(function(){
    console.log("Submitted");
  });
});
function toFacebook(){
	window.location.href = "homepage.html";
}
function toGoogle(){
	window.location.href = "homepage.html";
}
function leaveLogIn() {
    /*var popup2 = document.getElementById("myLoginPopup");
    popup2.style.display="none";*/
    window.location.href = "index.html";
}
$(document).ready(function() {
    $("form").submit(function() {
        if ($("#loginusername").val() == 'selimi.aurora@gmail.com' && $("#loginpassword").val() == 'password') {
			document.getElementById("myLoginPopup").action = "homepage.html";
        } else {
            alert("Error password or email!");
        }
    });
});

function toFacebook() {
    window.location.href = "homepage.html";
}

function toGoogle() {
    window.location.href = "homepage.html";
}
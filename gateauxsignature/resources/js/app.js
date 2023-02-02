import './bootstrap';

window.modalView = function (element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}

window.onscroll = function () {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "ddev-bar" + " ddev-card" + " ddev-animate-top" + " ddev-white";
    } else {
        navbar.className = navbar.className.replace(" ddev-card ddev-animate-top ddev-white", "");
    }
}

window.toggleFunction = function () {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("ddev-show") == -1) {
        x.className += " ddev-show";
    } else {
        x.className = x.className.replace(" ddev-show", "");
    }
}
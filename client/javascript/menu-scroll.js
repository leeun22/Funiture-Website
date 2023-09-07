var navbar = document.getElementById("scrollMenu");
var sticky = navbar.offsetTop;

window.onscroll = function($M) {
    $M = scrollFunctionMenu()
};

function scrollFunctionMenu() {
    if (window.pageYOffset >= sticky) {
        // add class sticky on the navbar when scroll window, class sticky will be visible
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
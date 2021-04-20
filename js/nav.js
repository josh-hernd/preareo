
// Add event for open mobile menu
var op = document.getElementById('toggler').addEventListener("click", openNav);
// Event Listener for body click
var bodyClo = document.getElementById('main').addEventListener("click", closeNav);

// Mobile Toggeling 
var mobile = document.getElementById("mobile_menu_wrap");
var active = [];
var unset = [];
var getBod = document.getElementsByTagName('body')[0];


function openNav() {

    if (unset.includes('unset;') || getBod.getAttribute("style") === null && !active.includes("toggle_on")) {
        mobile.classList.add('toggle_on');
        getBod.style.overflow = "hidden";
        document.getElementById('toggler').classList.add('tog_close');

        active = mobile.getAttribute("class").split(" ");
        unset = getBod.getAttribute("style").split(" ");
        var add = true;
        burgerTog(add);
    } else if (getBod.getAttribute("style") !== null && active.includes("toggle_on")) {
        mobile.classList.remove('toggle_on');
        getBod.style.overflow = "unset";
        document.getElementById('toggler').classList.remove('toggle_on');
        unset = getBod.getAttribute("style").split(" ");
        var add = false;
        burgerTog(add);
    }
};


function closeNav() {
    if (getBod.getAttribute("style") !== null && !unset.includes('unset;')) {
        mobile.classList.remove('toggle_on');
        getBod.style.overflow = "unset";
        document.getElementById('toggler').classList.remove('tog_close');
        unset = getBod.getAttribute("style").split(" ");
        var add = false;
        burgerTog(add);
    }
};


function burgerTog(add) {
    var lines = document.getElementsByTagName('line');
    if (add === true) {
        for (let i = 0; i < lines.length; i++) {
            lines[i].classList.add('burger');

        }
    } else if (add === false) {
        for (let i = 0; i < lines.length; i++) {
            lines[i].classList.remove('burger');

        }
    }
};

// Greate Navigation bar
var header = document.getElementById('header_Nav');

// Make Navbar fixed on scroll
var mBody = document.getElementById('main');

window.onscroll = function () { myFunction() };
function myFunction() {
    if (window.pageYOffset >= 1) {
        mBody.style.paddingTop = header.offsetHeight + "px";
        header.classList.add("fixed");

    } else {
        mBody.style.paddingTop = "0px";
        header.classList.remove("fixed");

    }
};

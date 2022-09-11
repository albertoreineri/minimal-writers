
var $ = jQuery.noConflict();

$( document ).ready(function() {
    controlloNightMode();

    document.getElementById("night").onclick = function () {
        toggleTheme();
    }
});

function controlloNightMode() {
    var ora = new Date().getHours()
    ora = Number(ora);
    if (ora >= 20 || ora <= 7) {
        var theme = document.getElementById('main-css');
        theme.setAttribute('href', templateUri + '/assets/css/night.css');
        $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
    }

    var tema = sessionStorage.getItem("theme");
    if (tema == "night") {
        var theme = document.getElementById('main-css');
        theme.setAttribute('href', templateUri + '/assets/css/night.css');
        $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
    } else {
        var theme = document.getElementById('main-css');
        theme.setAttribute('href', templateUri + '/assets/css/main.css');
        $("#switch-icon").addClass("fa-moon").removeClass("fa-sun");
    }

}


function toggleTheme() {
    var theme = document.getElementById('main-css');
    path = templateUri + '/assets/css/main.css';

    if (theme.getAttribute('href') == path) {
        theme.setAttribute('href', templateUri + '/assets/css/night.css');
        $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
        sessionStorage.setItem("theme", "night");
        var tema = sessionStorage.getItem("theme");
    } else {
        theme.setAttribute('href', templateUri + '/assets/css/main.css');
        $("#switch-icon").addClass("fa-moon").removeClass("fa-sun");
        sessionStorage.setItem("theme", "day");
    }
}

// import Swup from 'swup';
// const swup = new Swup()

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.back-to-top').fadeIn();
    } else {
        $('.back-to-top').fadeOut();
    }
});

$(".back-to-top").click(function() {
    $("html, body").animate({scrollTop: 0}, 300);
 });
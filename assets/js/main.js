
var $ = jQuery.noConflict();

$(document).ready(function () {
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
        // $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
    }

    var temaC = getCookie('theme');

    if (temaC == "night") {
        var theme = document.getElementById('main-css');
        theme.setAttribute('href', templateUri + '/assets/css/night.css');
        // $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
    } else {
        var theme = document.getElementById('main-css');
        theme.setAttribute('href', templateUri + '/assets/css/main.css');
        // $("#switch-icon").addClass("fa-moon").removeClass("fa-sun");
    }

}


function toggleTheme() {
    var theme = document.getElementById('main-css');
    path = templateUri + '/assets/css/main.css';

    if (theme.getAttribute('href') == path) {
        theme.setAttribute('href', templateUri + '/assets/css/night.css');
        $("#switch-icon").addClass("fa-sun").removeClass("fa-moon");
        setCookie('theme', 'night', 30);
    } else {
        theme.setAttribute('href', templateUri + '/assets/css/main.css');
        $("#switch-icon").addClass("fa-moon").removeClass("fa-sun");
        setCookie('theme', 'day', 30);
    }
}

$(window).scroll(function () {
    if ($(this).scrollTop()) {
        $('.back-to-top').fadeIn();
    } else {
        $('.back-to-top').fadeOut();
    }
});

$(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 300);
});

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
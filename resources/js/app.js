require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import "flowbite";

// toogle theme
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}
console.log(localStorage.getItem("color-theme"));

// Change the icons inside the button based on previous settings

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
    themeToggleBtn.addEventListener();
    console.log(localStorage.getItem("color-theme"));
});
// search input shortcuts
document.onkeydown = checkShortcuts;
function checkShortcuts(event) {
    if (event.keyCode == 191) {
        // 191 == "/" key
        var text_input = document.getElementById("searchInput");
        text_input.focus();
        text_input.select();
        return false;
    }
    if (event.keyCode == 27) {
        // 27 == "esc" key
        var text_input = document.getElementById("searchInput");
        text_input.value = "";
        text_input.blur();
        text_input.classList.remove("input-with-value");
        text_input.classList.add("input-without-value");
        return false;
    }
}

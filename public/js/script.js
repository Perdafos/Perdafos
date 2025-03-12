let stars = document.getElementById("stars");
let bulan = document.getElementById("bulan");
let gunung_belakang = document.getElementById("gunung-belakang");
let awan = document.getElementById("awan");
let text = document.getElementById("text");
let btn = document.getElementById("btn");
let gunung = document.getElementById("gunung");
let header = document.querySelector("header");

window.addEventListener("scroll", function () {
    let value = window.scrollY;
    stars.style.left = value * 0.25 + "px";
    bulan.style.top = value * 1.5 + "px";
    awan.style.left = value * -0.8 + "px";
    awan.style.top = value * 1.5 + "px";
    gunung_belakang.style.top = value * 0.8 + "px";
    gunung.style.top = value * 0 + "px";
    text.style.marginRight = value * 4 + "px";
    btn.style.marginTop = value * 1.5 + "px";
    header.style.top = value * 0.5 + "px";
});

document.getElementById("btn").addEventListener("click", function (event) {
    event.preventDefault();
    document.querySelector("#dua").scrollIntoView({
        behavior: "smooth",
    });
});

document.getElementById("burger-menu").addEventListener("click", function () {
    document.getElementById("nav-links").classList.toggle("active");
});

document
    .getElementById("language-toggle")
    .addEventListener("click", function () {
        const aboutMeEn = document.getElementById("about-me-en");
        const aboutMeId = document.getElementById("about-me-id");
        const toggleButton = document.getElementById("language-toggle");

        if (aboutMeEn.style.display === "none") {
            aboutMeEn.style.display = "block";
            aboutMeId.style.display = "none";
            toggleButton.textContent = "Switch to Indonesian";
        } else {
            aboutMeEn.style.display = "none";
            aboutMeId.style.display = "block";
            toggleButton.textContent = "Switch to English";
        }
    });

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("[data-section]");
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach((section) => {
        observer.observe(section);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const loadingScreen = document.getElementById("loading-screen");
    const homeSection = document.querySelector("[data-section='home']");

    homeSection.addEventListener("load", function () {
        loadingScreen.style.display = "none";
    });

    setTimeout(() => {
        loadingScreen.style.display = "none";
    }, 3000); // Fallback in case the load event doesn't fire
});

window.addEventListener("load", function () {
    document.querySelector("#home").scrollIntoView({
        behavior: "smooth",
    });
});

function activateLink(element) {
    element.classList.add("active");
    const link = element.querySelector("a");
    if (link) {
        window.location.href = link.href;
    }
    setTimeout(() => {
        element.classList.remove("active");
    }, 1000);
}

let stars = document.getElementById('stars')
let bulan = document.getElementById('bulan')
let gunung_belakang = document.getElementById('gunung-belakang')
let awan = document.getElementById('awan')
let text = document.getElementById('text')
let btn = document.getElementById('btn')
let gunung = document.getElementById('gunung')
let header = document.querySelector('header')

window.addEventListener('scroll', function () {
    let value = window.scrollY;
    stars.style.left = value * 0.25 + 'px';
    bulan.style.top = value * 1.5 + 'px';
    awan.style.left = value * -0.8 + 'px';
    awan.style.top = value * 1.5 + 'px';
    gunung_belakang.style.top = value * 0.8 + 'px';
    gunung.style.top = value * 0 + 'px';
    text.style.marginRight = value * 4 + 'px';
    btn.style.marginTop = value * 1.5 + 'px';
    header.style.top = value * 0.5 + 'px';
})

document.getElementById("btn").addEventListener("click", function (event) {
    event.preventDefault();
    document.querySelector("#dua").scrollIntoView({
        behavior: "smooth",
    });
});

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Perdafos</title>
    </head>

    <body>
        <header>
            <a href="#home" class="logo">Perdafos</a>
            <button class="burger-menu" id="burger-menu">&#9776;</button>
            <ul id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#dua">About</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </header>
        <section id="#home">
            <img src="{{ asset('img/stars.png') }}" id="stars">
            <img src="{{ asset('img/bulan.png') }}" id="bulan">
            <img src="{{ asset('img/gunung-belakang.png') }}" id="gunung-belakang">
            <h2 id="text">Hi..</h2>
            <a href="#dua" id="btn">Selengkapnya</a>
            <img src="{{ asset('img/gunung.png') }}" id="gunung">
            <img src="{{ asset('img/awan.png') }}" id="awan">
        </section>
        <div id="dua" class="dua">
            <div class="isi-dua">
                <h2>About Me</h2>
                <p>Perkenalkan nama saya Dafa Ghaitsa Yogatama. Saya mendalami bahasa pemrograman javascript, saya
                    sangat tertarik dengan UI/UX makanya saya belajar javascript. Framework CSS yang saya suka yaitu
                    tailwind, sebatas lebih cepat aja sih. Lalu untuk framework PHP saya mendalami laravel.</p>
                <br><br>
                <p>
                    Saya sudah berpengalaman bekerja dalam tim, karena saya di SMK pernah mengikuti project yang di buat
                    langsung oleh sekolah. Saya biasanya menggunakan git hub untuk bekerja secara kelompok, sehingga
                    mudah dan cepat untuk mengerjakan sebuah web. Saat ini saya ingin memahami cara github bekerja,
                    karena saya masih belum paham betul.
                </p>
            </div>
            <img src="{{ asset('img/teamwork.png') }}" id="teamwork">
        </div>
        <div class="tiga">
            <div class="isi-tiga">
                <div class="header-tiga">
                    <div class="content01">
                        <h2>Check Out</h2>
                        <h2>My Project</h2><br>
                        <p>Here is my recent works, every peroject will be</p>
                        <p>displayed your with case study</p>
                    </div>
                    <div class="see-more">
                        <button>See More</button>
                    </div>
                </div>
                <div class="content-garage">
                    <div class="card-event">
                        <div class="small-box">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>  
                        </div>
                    </div>
                    <div class="card-event">
                        <div class="small-box">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="card-event">
                        <div class="small-box">
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>

</html>

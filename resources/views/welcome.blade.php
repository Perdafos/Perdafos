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
        <div id="loading-screen">
            <!-- From Uiverse.io by StealthWorm -->
            <div class="loader">
                <div class="blackhole">
                    <div class="blackhole-circle"></div>
                    <div class="blackhole-disc"></div>
                </div>

                <div class="curve">
                    <svg viewBox="0 0 500 500">
                        <path id="loading" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97">
                        </path>
                        <text width="500">
                            <textPath xlink:href="#loading">
                                loading...
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
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
        <section id="home" data-section="home">
            <img id="falling_star" src="{{ asset('img/falling_star.png') }}" alt="">
            <img src="{{ asset('img/stars.png') }}" id="stars">
            <img src="{{ asset('img/bulan.png') }}" id="bulan">
            <img src="{{ asset('img/gunung-belakang.png') }}" id="gunung-belakang">
            <h2 id="text">Hi..</h2>
            <a href="#dua" id="btn">

                <!-- From Uiverse.io by mrhyddenn -->
                <div class="scrolldown" style="--color: white">
                    <div class="chevrons">
                        <div class="chevrondown"></div>
                        <div class="chevrondown"></div>
                    </div>
                </div>

            </a>
            <img src="{{ asset('img/meteor.png') }}" class="meteor">
            <img src="{{ asset('img/gunung.png') }}" id="gunung">
            <img src="{{ asset('img/awan.png') }}" id="awan">
        </section>
        <div id="dua" class="dua" data-section="dua">
            <div class="kotak-dua">
                <div class="kotak-judul-dua">
                    <h1>Perdafos </h1>
                    <h1>Dafa Ghaitsa.</h1>
                </div>
                <img src="{{ asset('img/killua.png') }}" alt="">
                <p>FRONTEND DEVELOPER</p>
                <div class="jumlah-project">
                    <h1 data-text="01">01</h1>
                    <h2>PROJECT</h2>
                </div>
            </div>
            <div class="about-me-dua">
                <h1 id="about-me-en">ABOUT ME</h1>
                <h1 id="about-me-id" style="display: none;">TENTANG SAYA</h1><br>
                <div id="about-me-en">
                    <p>Hello, everyone! My name is Dafa Ghaitsa Yogatama. I am a 11th-grade student in the SIJA (System
                        Informatics, Network, and Application) department.</p><br>
                    <p>I specialize in front-end development and have experience working with HTML, CSS, and JavaScript.
                        For
                        styling, I use Bootstrap and Tailwind CSS frameworks. Additionally, I also have knowledge of
                        Laravel
                        for back-end development.</p><br>
                    <p>I am passionate about learning new technologies and improving my skills in web development. I
                        look
                        forward to collaborating and sharing knowledge with others.</p><br>
                </div>
                <div id="about-me-id" style="display: none;">
                    <p>Halo semuanya! Nama saya Dafa Ghaitsa Yogatama. Saya adalah siswa kelas 11 di jurusan SIJA
                        (Sistem
                        Informatika, Jaringan, dan Aplikasi).</p><br>
                    <p>Saya mengkhususkan diri dalam pengembangan front-end dan memiliki pengalaman bekerja dengan HTML,
                        CSS, dan JavaScript. Untuk
                        styling, saya menggunakan framework Bootstrap dan Tailwind CSS. Selain itu, saya juga memiliki
                        pengetahuan tentang Laravel
                        untuk pengembangan back-end.</p><br>
                    <p>Saya sangat antusias dalam mempelajari teknologi baru dan meningkatkan keterampilan saya dalam
                        pengembangan web. Saya berharap
                        dapat berkolaborasi dan berbagi pengetahuan dengan orang lain.</p><br>
                </div>
                <div class="language-social">
                    <button id="language-toggle">Switch to Indonesian</button>
                    <div class="social-media">
                        <a id="github" href="https://github.com/Perdafos" target="blank"><i
                                class="fa-brands fa-github"></i></a>
                        <a id="linkedin" href="https://www.linkedin.com/in/dafa-ghaitsa-2b9886351/" target="blank"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a id="instagram" href="https://www.instagram.com/dafcantdrawing" target="blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tiga" data-section="tiga">
            <div class="isi-tiga">
                <div class="header-tiga">
                    <div class="content01">
                        <h2>Check Out</h2>
                        <h2>My Project</h2><br>
                        <p>Here is my recent works, every peroject will be</p>
                        <p>displayed your with case study</p>
                    </div>
                    <div class="see-more">
                        <a href="#">
                            <button>
                                MORE
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="content-garage">
                    <div class="card-event">
                        <div class="small-box" onclick="activateLink(this)">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card-event">
                        <div class="small-box" onclick="activateLink(this)">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="card-event">
                        <div class="small-box" onclick="activateLink(this)">
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>

</html>

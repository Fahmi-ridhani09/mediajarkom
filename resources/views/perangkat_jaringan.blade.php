<x-layout>
    <x-slot:title>Materi Pembelajaran</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perangkat Jaringan Komputer</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/controls/OrbitControls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.min.js"></script>
        <link rel="stylesheet" href="materi/materijaringan.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuis</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .gambar-container {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
                /* center container secara horizontal jika dibatasi */
                text-align: center;
                /* alternatif jika gambar pakai inline */
            }

            .gambar {
                width: 100%;
                /* atau ukuran spesifik seperti 300px */
                height: auto;
                display: block;
                /* agar margin auto bisa berfungsi */
                margin: 0 auto;
                /* center gambar */
            }

            .video-container {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
            }

            .video-container iframe {
                max-width: 100%;
                width: 80%;
                height: auto;
                aspect-ratio: 16 / 9;
            }
        </style>
    </head>

    <body>
        <div class="page-container">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="javascript:void(0);" data-topic="topik1" class="active">Mengenal Komponen</a></li>
                    <li><a href="/perangkat-jaringan" data-topic="topik2">Perangkat Jaringan</a></li>
                    <li><a href="/LatihanPerangkatJaringan" data-topic="topik3">Latihan</a></li>
                </ul>
            </div>
            <div class="content-container">
                <div class="material-title">Perangkat Jaringan Komputer</div>

                <!-- Topik 1: Pengenalan -->
                <div id="topik1" class="topic active">
                    <!-- Video YouTube di bagian atas -->
                    <p style="text-align: center; font-weight: bold;"><strong>Simak video berikut ini:</strong></p>
                    <br>
                    <div class="video-container">
                        <video width="650" height="315" controls>
                            <source src="video/konsep.mp4" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>

                    <br>
                    <h2>Mengenal Komponen</h2>
                    <br>
                    <div class ="paragraph-container">
                        <p>Komponen jaringan komputer adalah semua perangkat dan perangkat lunak yang diperlukan untuk
                            menghubungkan beberapa komputer dan perangkat lain, sehingga mereka dapat saling bertukar
                            informasi dan berbagi sumber daya.</p>
                    </div>
                    <br>
                    <div class="gambar-container">
                        <img src="images/materi_perangkat_jaringan/materi_perangkat_jaringan.png" alt=""
                            class="gambar">
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <p>
                            Suatu jaringan komputer dibangun menggunakan perangkat-perangkat yang mendukung kinerja dari
                            jaringan komputer itu sendiri. Perangkatperangkat jaringan tersebut memiliki karakteristik
                            yang berbeda-beda namun sifatnya umum.
                        </p>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <p>
                            Perangkat jaringan komputer adalah komponen fisik yang berperan penting dalam membangun,
                            menghubungkan, mengelola, dan memelihara jaringan komputer. Jaringan komputer sendiri
                            merupakan sistem yang menghubungkan dua atau lebih perangkat untuk berbagi data, sumber
                            daya, dan informasi. Tanpa adanya perangkat jaringan, komunikasi antar perangkat dalam
                            jaringan tidak akan mungkin terjadi. Oleh karena itu, perangkat ini menjadi fondasi utama
                            dalam menciptakan sistem jaringan yang handal dan efisien.
                        </p>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <p>
                            Fungsi utama dari perangkat jaringan komputer adalah untuk memastikan bahwa data dapat
                            ditransmisikan dengan cepat, aman, dan efisien antara satu perangkat dengan perangkat
                            lainnya, baik dalam jaringan lokal (LAN) maupun jaringan yang lebih luas seperti internet.
                            Selain itu, perangkat jaringan juga membantu dalam mengatur alokasi bandwidth, keamanan
                            jaringan, dan pemantauan lalu lintas data agar jaringan tetap stabil dan optimal.
                        </p>
                    </div>
                    <br>
                    <br>
                    <div class="button-container">
                        <a href="/perangkat-jaringan" class="next-button">Selanjutnya</a>
                    </div>
                </div>

                <!-- Topik 2: Lapisan TCP/IP -->
                <div id="topik2" class="topic">
                    <h2>Perangkat Jaringan</h2>
                    <br>
                    <div class="button-container">
                        <button class="next-button" data-next="topik3">Selanjutnya</button>
                    </div>
                </div>

                <!-- Topik 3: Protokol Penting -->
                <div id="topik3" class="topic">
                    <nav class="navbar text-white sticky-top" style="background-color: #d2b48c;">
                        <div class="container">
                            <a class="navbar-brand text-white" href="/LatihanPerangkatJaringan">
                                <h4>Kuis</h4>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <script>
                const topics = document.querySelectorAll('.topic');
                const menuLinks = document.querySelectorAll('.sidebar-menu ul li a');
                const nextButtons = document.querySelectorAll('.next-button');

                menuLinks.forEach((link, index) => {
                    link.addEventListener('click', () => {
                        showTopic(index);
                    });
                });

                nextButtons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        const nextIndex = index + 1 < topics.length ? index + 1 : 0;
                        showTopic(nextIndex);
                    });
                });

                function showTopic(index) {
                    // Tampilkan topik yang sesuai
                    topics.forEach((topic, i) => {
                        topic.classList.toggle('active', i === index);
                    });

                    // Aktifkan menu sidebar yang sesuai
                    menuLinks.forEach((menu, i) => {
                        menu.classList.toggle('active', i === index);
                    });
                }
            </script>
    </body>

    </html>
</x-layout>

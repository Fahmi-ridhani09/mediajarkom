<x-layout>
    <x-slot:title>Materi Pembelajaran TCP/IP</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">
    @php
        $materi = 'latihantcpip';
    @endphp

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materi Pembelajaran TCP/IP</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/controls/OrbitControls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.min.js"></script>
        <link rel="stylesheet" href="materi/materijaringan.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuis</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>
        <div class="page-container">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="javascript:void(0);" data-topic="topik1" class="active">Pengenalan TCP/IP</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik2">Cara Kerja TCP/IP</a></li>
                    <li><a href="/latihantcpip" data-topic="topik3">Latihan</a></li>
                </ul>
            </div>
            <div class="content-container">
                <div class="material-title">Materi Pembelajaran TCP/IP</div>

                <!-- Topik 1: Pengenalan -->
                <div id="topik1" class="topic active">
                    <h2>Pengenalan TCP/IP</h2>
                    <br>
                    <div class ="paragraph-container">
                        <p>TCP/IP adalah protokol dan standar komunikasi data yang digunakan pada jaringan internet.
                            Protokol ini merupakan protokol yang paling banyak digunakan. Protokol TCP/ IP dikembangkan
                            pada awal 1980-an sebagai protokol yang menghubungkan komputer-komputer dan jaringan yang
                            membentuk jaringan internet yang luas (WAN). TCP/ IP membentuk jaringan terbuka dan
                            independen terhadap mekanisme transport jaringan fisik dan standar komunikasi data yang
                            digunakan pada jaringan internet. Protokol ini merupakan protokol yang paling banyak
                            digunakan</p>
                    </div>
                    <br>
                    <div class="gambar-container">
                        <img src="images/materi_tcpip/tcp.png" alt="Topologi Bus" class="gambar">
                    </div>
                    <div class ="paragraph-container">
                        <p>Protokol TCP/ IP dikembangkan pada awal 1980-an sebagai protokol yang menghubungkan
                            komputer-komputer dan jaringan yang membentuk jaringan internet yang luas (WAN). TCP/ IP
                            membentuk jaringan terbuka dan independen terhadap mekanisme transport jaringan fisik yang
                            digunakan.</p>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <P>TCP/IP menggunakan cara pengalamatan sederhana yang dinamakan IP address yang dapat
                            menghubungkan jutaan komputer dengan sistem yang heterogen (seperti Windows, UNIX, Linux,
                            dan lain-lain). Protokol TCP/IP merupakan kumpulan protokol (protocol suite) yang terdiri
                            atas banyak protokol yang didukung perangkat lunak yang biasa disebut TCP/IP stack.</P>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <P>Keunggulan TCP/IP adalah standar protokol yang terbuka, sehingga tersedia secara bebas dan
                            dikembangkan independen terhadap perangkat keras komputer maupun sistem operasi apapun.
                            Karena didukung secara meluas, TCP/IP sangat ideal untuk menyatukan bermacam perangkat keras
                            dan perangkat lunak, walaupun tidak berkomunikasi lewat internet.</P>
                    </div>
                    <br>
                    <div class="gambar-container">
                        <img src="images/materi_tcpip/tcpip2.png" alt="Topologi Bus" class="gambar">
                    </div>
                    <br>
                    <div class="button-container">
                        <button class="next-button" data-next="topik2">Selanjutnya</button>
                    </div>
                </div>

                <!-- Topik 2: Lapisan TCP/IP -->
                <div id="topik2" class="topic">
                    <h2>Cara Kerja TCP/IP</h2>
                    <br>
                    <div class ="paragraph-container">
                        <p>Contoh dari penggunaan Cara Kerja TCP/IP adalah pengiriman data antara komputer pengirim dan
                            penerima dalam suatu jaringan yang memiliki banyak komputer diperlukan alamat tujuan dan
                            perantara untuk perjalanan bit stream yang akan dikirimkan. Internet protocol (IP) akan
                            menjamin data sampai ke tempat tujuan secara aman dan tepat. Saat seorang pengguna internet
                            mengirim data ke komputer lain, protokol TCP/IP mulai diikuti. TCP membagi data menjadi
                            paket-paket data kecil, menambahkan beberapa informasi untuk error checking, dan IP
                            menambahkan label yang berisikan informasi alamat pada paket tersebut.</p>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <p>Paket-paket data dalam bentuk bit stream dikirim menuju perangkat tujuan yang dapat melalui
                            jalur yang berbeda. Perangkat perantara seperti router dapat digunakan untuk mencari jalur
                            tercepat menuju perangkat tujuan. Router juga digunakan untuk membantu pengaturan beban lalu
                            lintas jaringan sehingga beban dapat terbagi rata</p>
                    </div>
                    <br>
                    <div class ="paragraph-container">
                        <p>Saat paket-paket data dengan TCP/IP sampai pada perangkat tujuan, alamat IP akan dibuka dari
                            daftar pengiriman. Paket data akan disusun kembali sesuai dengan urutan jika paket data
                            tidak corrupted. Saat perangkat penerima mengetahui ada data yang corrupted, perangkat akan
                            meminta kiriman data ulang. Pada TCP/IP juga terdapat perangkat khusus yang disebut gateway
                            yang memungkinkan berbagai tipe jaringan berkomunikasi dengan internet. Internet menjadi
                            jaringan global.</p>
                    </div>
                    <br>
                    <br>
                    <div class="button-container">
                        <button class="next-button" data-next="topik3">Selanjutnya</button>
                    </div>
                </div>

                <!-- Topik 3: Protokol Penting -->
                <div id="topik3" class="topic">
                    <nav class="navbar text-white sticky-top" style="background-color: #d2b48c;">
                        <div class="container">
                            <a class="navbar-brand text-white" href="/latihantcpip">
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

@extends('guru.layout.layout_guru')

@section('main-content')
    <style>
        body {
            
        }
        .page-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
        }

        .sidebar-menu {
            width: 250px;
            background-color: #F5DEB3; /* sidebar warna coklat muda */
            padding: 20px;
            border-radius: 10px;
        }

        .sidebar-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-menu li a {
            display: block;
            padding: 10px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .sidebar-menu li a.active,
        .sidebar-menu li a:hover {
            background-color: #deb887;
        }

        .content-container {
            flex: 1;
            background-color: #F5DEB3;
            padding: 30px;
            border-radius: 10px;
            margin-left: 20px;
        }

        .material-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: black;
        }

        .paragraph-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.2);
            color: black;
        }

        .gambar-container {
            text-align: center;
        }

        .gambar {
            max-width: 100%;
            height: auto;
        }

        .topic {
            display: none;
        }

        .topic.active {
            display: block;
        }

        .button-container {
            text-align: right;
        }

        .next-button {
            background-color: #a0522d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .next-button:hover {
            background-color: #8b4513;
        }
    </style>

    <div class="page-container">
        <div class="sidebar-menu">
            <ul>
                <li><a href="javascript:void(0);" data-topic="topik1" class="active">Pengenalan TCP/IP</a></li>
                <li><a href="javascript:void(0);" data-topic="topik2">Cara Kerja TCP/IP</a></li>
            </ul>
        </div>

        <div class="content-container">
            <div class="material-title">Materi Pembelajaran TCP/IP</div>

            <!-- Topik 1 -->
            <div id="topik1" class="topic active">
                <h2>Pengenalan TCP/IP</h2><br>
                <div class="paragraph-container">
                    <p>TCP/IP adalah protokol dan standar komunikasi data yang digunakan pada jaringan internet.
                            Protokol ini merupakan protokol yang paling banyak digunakan. Protokol TCP/ IP dikembangkan
                            pada awal 1980-an sebagai protokol yang menghubungkan komputer-komputer dan jaringan yang
                            membentuk jaringan internet yang luas (WAN). TCP/ IP membentuk jaringan terbuka dan
                            independen terhadap mekanisme transport jaringan fisik dan standar komunikasi data yang
                            digunakan pada jaringan internet. Protokol ini merupakan protokol yang paling banyak
                            digunakan</p>
                </div><br>
                <div class="gambar-container">
                    <img src="{{ asset('images/materi_tcpip/tcp.png') }}" alt="TCP/IP" class="gambar">
                </div><br>
                <div class="paragraph-container">
                    <p>Protokol TCP/ IP dikembangkan pada awal 1980-an sebagai protokol yang menghubungkan
                            komputer-komputer dan jaringan yang membentuk jaringan internet yang luas (WAN). TCP/ IP
                            membentuk jaringan terbuka dan independen terhadap mekanisme transport jaringan fisik yang
                            digunakan.</p>
                </div><br>
                <div class="paragraph-container">
                    <p>TCP/IP menggunakan cara pengalamatan sederhana yang dinamakan IP address yang dapat
                            menghubungkan jutaan komputer dengan sistem yang heterogen (seperti Windows, UNIX, Linux,
                            dan lain-lain). Protokol TCP/IP merupakan kumpulan protokol (protocol suite) yang terdiri
                            atas banyak protokol yang didukung perangkat lunak yang biasa disebut TCP/IP stack.</p>
                </div><br>
                <div class="paragraph-container">
                    <p>Keunggulan TCP/IP adalah standar protokol yang terbuka, sehingga tersedia secara bebas dan
                            dikembangkan independen terhadap perangkat keras komputer maupun sistem operasi apapun.
                            Karena didukung secara meluas, TCP/IP sangat ideal untuk menyatukan bermacam perangkat keras
                            dan perangkat lunak, walaupun tidak berkomunikasi lewat internet.</p>
                </div><br>
                <div class="gambar-container">
                    <img src="{{ asset('images/materi_tcpip/tcpip2.png') }}" alt="Ilustrasi TCP/IP" class="gambar">
                </div><br>
                <div class="button-container">
                    <button class="next-button" data-next="topik2">Selanjutnya</button>
                </div>
            </div>

            <!-- Topik 2 -->
            <div id="topik2" class="topic">
                <h2>Cara Kerja TCP/IP</h2><br>
                <div class="paragraph-container">
                    <p>Contoh dari penggunaan Cara Kerja TCP/IP adalah pengiriman data antara komputer pengirim dan
                            penerima dalam suatu jaringan yang memiliki banyak komputer diperlukan alamat tujuan dan
                            perantara untuk perjalanan bit stream yang akan dikirimkan. Internet protocol (IP) akan
                            menjamin data sampai ke tempat tujuan secara aman dan tepat. Saat seorang pengguna internet
                            mengirim data ke komputer lain, protokol TCP/IP mulai diikuti. TCP membagi data menjadi
                            paket-paket data kecil, menambahkan beberapa informasi untuk error checking, dan IP
                            menambahkan label yang berisikan informasi alamat pada paket tersebut.</p>
                </div><br>
                <div class="paragraph-container">
                    <p>Paket-paket data dalam bentuk bit stream dikirim menuju perangkat tujuan yang dapat melalui
                            jalur yang berbeda. Perangkat perantara seperti router dapat digunakan untuk mencari jalur
                            tercepat menuju perangkat tujuan. Router juga digunakan untuk membantu pengaturan beban lalu
                            lintas jaringan sehingga beban dapat terbagi rata</p>
                </div><br>
                <div class="paragraph-container">
                    <p>Saat paket-paket data dengan TCP/IP sampai pada perangkat tujuan, alamat IP akan dibuka dari
                            daftar pengiriman. Paket data akan disusun kembali sesuai dengan urutan jika paket data
                            tidak corrupted. Saat perangkat penerima mengetahui ada data yang corrupted, perangkat akan
                            meminta kiriman data ulang. Pada TCP/IP juga terdapat perangkat khusus yang disebut gateway
                            yang memungkinkan berbagai tipe jaringan berkomunikasi dengan internet. Internet menjadi
                            jaringan global.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuLinks = document.querySelectorAll('.sidebar-menu a');
        const topics = document.querySelectorAll('.topic');
        const nextButtons = document.querySelectorAll('.next-button');

        function showTopicById(topicId) {
            topics.forEach(topic => {
                topic.classList.remove('active');
                if (topic.id === topicId) {
                    topic.classList.add('active');
                }
            });

            menuLinks.forEach(link => {
                link.classList.remove('active');
                if (link.dataset.topic === topicId) {
                    link.classList.add('active');
                }
            });
        }

        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                const topicId = link.dataset.topic;
                showTopicById(topicId);
            });
        });

        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                const nextId = button.dataset.next;
                showTopicById(nextId);
            });
        });
    </script>
@endsection

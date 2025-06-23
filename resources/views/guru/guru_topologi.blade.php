@extends('guru.layout.layout_guru')


@section('main-content')
    <style>
        .h1 {
            color: #000000
        }

        .page-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
        }

        .sidebar-menu {
            width: 250px;
            background-color: #F5DEB3;
            /* sidebar warna coklat muda */
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.2);
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
                <li><a href="javascript:void(0);" data-topic="topik1" class="active">Apa itu Topologi?</a></li>
                <li><a href="javascript:void(0);" data-topic="topik2">Jenis Topologi Jaringan</a></li>
            </ul>
        </div>

        <div class="content-container">
            <div class="material-title">Materi Pembelajaran Topologi Jaringan</div>

            <!-- Topik 1 -->
            <div id="topik1" class="topic active">
                <h2>Apa itu Topologi?</h2><br>
                <div class="paragraph-container">
                    <p>Topologi (dari bahasa Yunani <em>topos</em>, "tempat", dan <em>logos</em>, "ilmu") merupakan
                        cabang matematika
                        yang berkaitan dengan tata ruang yang tidak berubah dalam deformasi dwikontinu, yaitu ruang
                        yang dapat ditekuk, dilipat, disusut, direntangkan, dan dipilin, tetapi tidak boleh
                        dipotong,
                        dirobek, ditusuk, atau dilekatkan. Topologi muncul melalui pengembangan konsep dari geometri
                        dan teori himpunan, seperti ruang, dimensi, bentuk, dan transformasi.</p>
                </div><br>
                <div class="gambar-container">
                    <img src="{{ asset('images/icon_topologi.png') }}" alt="" class="gambar">
                </div><br>
                <h1>Topologi Jaringan Komputer</h1>
                <br>
                <div class="paragraph-container">
                    <p>Topologi jaringan komputer adalah suatu cara menghubungkan komputer yang satu dengan
                        komputer lainnya sehingga membentuk jaringan. Dalan suatu jaringan komputer jenis topologi
                        yang dipilih akan mempengaruhi kecepatan komunikasi. Untuk itu maka perlu dicermati
                        kelebihan / keuntungan dan kekurangan / kerugian dari
                        masing – masing topologi berdasarkan kateristiknya..</p>
                </div><br>
                <div class="paragraph-container">
                    <p>Topologi pada dasarnya adalah peta dari sebuah jaringan. Topologi jaringan terbagi lagi
                        menjadi dua yaitu topologi secara fisik (physical topology) dan topologi secara logika
                        (logical topology). Topologi secara fisik menjelaskan bagaimana susunan dari label, komputer
                        dan lokasi dari semua komponen jaringan. Sedangkan topologi secara logika menetapkan
                        bagaimana informasi atau aliran data dalam jaringan..</p>
                </div><br>

                <div class="button-container">
                    <button class="next-button" data-next="topik2">Selanjutnya</button>
                </div>
            </div>

            <!-- Topik 2 -->
            <div id="topik2" class="topic">
                <h2>1. Topologi Bus</h2>
                <br>
                <div class ="paragraph-container">
                    <p>Topologi bus adalah topologi dimana setiap node terkoneksi melalui kabel utama
                        atau bus atau backbone. Topologi bus ini sangat efisien digunakan untuk jaringan
                        komputer dengan jumlah node yang tidak banyak (small network). </p>
                </div>
                <br>
                <div class="paragraph-container">
                    <p>Topologi bus ini sering juga disebut sebagai topologi backbone, dimana ada sebuah kabel
                        coaxial
                        yang dibentang kemudian beberapa komputer dihubungkan pada kabel tersebut.
                        Secara sederhana pada topologi bus, satu kabel media transmisi dibentang dari ujung ke
                        ujung,
                        kemudian kedua ujung ditutup dengan “terminator” atau terminating-resistance
                        (biasanya berupa tahanan listrik sekitar 60 ohm).</p>
                </div><br>
                
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/bus.png') }}" alt=""
                            class="gambar"> </div><br>
            
                <div class ="paragraph-container">
                    <p>Kelebihan Topologi Bus:</p>
                    <br>
                    <ol>
                        <li>Instalasi lebih murah</li><br>
                        <li>Kerusakan satu komputer client tidak akan mempengaruhi komunikasi antar client lainnya
                        </li>
                        <br>
                        <li>Biaya Relativ murah</li><br>
                    </ol>
                    <p>Kekurangan Topologi Bus:</p>
                    <br>
                    <ol>
                        <li>Jika kabel utama (bus) atau backbone putus maka komunikasi gagal</li><br>
                        <li>Bila kabel utama sangat panjang maka pencarian gangguan menjadi sulit Kemungkinan akan
                            terjadi tabrakan data (data collision) apabila banyak client yang mengirim pesan dan ini
                            akan menurunkan kecepatan komunikasi.</li><br>
                        <li>Biaya Relativ murah</li><br>
                    </ol>
                </div>
                <br>
                <h2> 2. Topologi Star</h2><br>
                <div class ="paragraph-container">
                    <p>Topologi star atau yang juga disebut sebagai topologi bintang adalah topologi dimana setiap
                        node
                        terkoneksi melalui
                        node konektor pusat (tengah). Proses pengiriman data antar node dilakukan dari node tertentu
                        ke
                        pusat yang selanjutnya
                        dikirimkan ke node tujuan. Topologi ini banyak dipakai karena kemudahannya.</p>
                    <br>
                    <p>Disebut topologi star karena bentuknya seperti bintang, sebuah alat yang disebut concentrator
                        bisa berupa hub atau
                        switch menjadi pusat, dimana semua komputer dalam jaringan dihubungkan ke concentrator ini.
                    </p>
                    <p>Pada topologi Bintang (Star) sebuah terminal pusat bertindak sebagai pengatur dan pengendali
                        semua komunikasi yang terjadi. Terminal-terminal lainnya melalukan komunikasi melalui
                        terminal
                        pusat ini</p>
                </div>
                <br>
                
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/star.png') }}" alt=""
                            class="gambar"> </div><br>
                
                <div class="paragraph-container">
                    <p>Terminal kontrol pusat bisa berupa sebuah komputer yang difungsikan sebagai pengendali tetapi
                        bisa juga berupa “HUB” atau “MAU” (Multi Accsess Unit).</p>
                    <br>
                    <p>Kelebihan Topologi Star:</p>
                    <ol>
                        <li>Karena setiap komponen dihubungkan langsung ke simpul pusat maka pengelolaan menjadi
                            mudah,
                            kegagalan komunikasi mudah ditelusuri</li>
                        <li>Kegagalan pada satu komponen/terminal tidak mempengaruhi komunikasi terminal lain.</li>
                    </ol>
                    <br>
                    <p>Kekurangan Topologi Star:</p>
                    <ol>
                        <li>Kegagalan pusat kontrol (simpul pusat) memutuskan semua komunikasi.</li>
                        <li>Bila yang digunakan sebagai pusat kontrol adalah HUB maka kecepatan akan berkurang
                            sesuai
                            dengan penambahan komputer, semakin banyak semakin lambat.</li>
                    </ol>
                </div>
                <br>
                <h2>3. Topologi Ring</h2>
                <br>
                <div class ="paragraph-container">
                    <p>Topologi ring adalah topologi dengan hubungan antar node terjadi antara satu node dengan node
                        tetangganya dan membentuk konfigurasi lingkaran atau cincin.
                        Pengiriman data pada topologi ini diatur dengan prinsip token passing (pengiriman token).
                        Token
                        berupa data kecil yang dikirimkan dari satu node ke node lainnya dalam satu arah
                        untuk menunjukkan node mana yang bisa dapat mengirimkan data pada waktu tertentu.</p>
                    <br>
                </div><br>
               
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/ring.png') }}" alt=""
                            class="gambar"> </div><br>
               
                <div class="paragraph-container">
                    <p>Topologi ring biasa juga disebut sebagai topologi cincin karena bentuknya seperti cincin yang
                        melingkar. Semua komputer dalam jaringan akan di hubungkan pada sebuah cincin.
                        Cincin ini hampir sama fungsinya dengan concenratorpada topologi star yang menjadi pusat
                        berkumpulnya ujung kabel dari setiap komputer yang terhubung
                        Secara lebih sederhana lagi topologi cincin merupakan untaian media transmisi dari satu
                        terminal
                        ke terminal lainnya hingga membentuk suatu lingkaran, dimana
                        jalur transmisi hanya “satu arah”. Tiga fungsi yang diperlukan dalam topologi cincin :
                        penyelipan data, penerimaan data, dan pemindahan data.
                    </p>
                </div>
                <br>
                <h2>4. Topologi Tree</h2>
                <br>
                <div class ="paragraph-container">
                    <p>Topologi tree adalah topologi yang membentuk hubungan antar node seperti cabang pada pohon.
                        Topologi ini biasanya digunakan untuk pengaturan jaringan pada
                        institusi yang memiliki hirarki.Topologi pohon adalah pengembangan atau generalisasi
                        topologi
                        bus. Media transmisi merupakan satu kabel yang bercabang namun loop tidak tertutup.</p>
                    <br>
                    <p>Topologi pohon dimulai dari suatu titik yang disebut “headend”. Dari headend beberapa kabel
                        ditarik menjadi cabang, dan pada setiap cabang terhubung beberapa terminal dalam bentuk bus,
                        atau dicabang lagi hingga menjadi rumit.</p><br>
                </div>
                <br>
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/tree.png') }}" alt=""
                            class="gambar"> </div><br>
               
                <div class ="paragraph-container">
                    <p>Ada 2 kesulitan pada Topologi:</p>
                    <ol>
                        <li>• Karena bercabang maka diperlukan cara untuk menunjukkan kemana data dikirim, atau
                            kepada
                            siapa transmisi data ditujukan.</li>
                        <li>• Perlu suatu mekanisme untuk mengatur transmisi dari terminal terminal dalam jaringan.
                    </ol>
                </div>
                <br>
                <h2>5. Topologi Mesh</h2>
                <br>
                <div class="paragraph-container">
                    <p>Topologi Mesh adalah topologi yang tidak memiliki aturan dalam koneksi. Topologi ini biasanya
                        timbul akibat tidak adanya perencanaan awal ketika membangun suatu jaringan.
                        Karena tidak teratur maka kegagalan komunikasi menjadi sulit dideteksi, dan ada kemungkinan
                        boros dalam pemakaian media transmisi. </p>
                    <br>
                </div>
                <br>
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/mesh.png') }}" alt=""
                            class="gambar"> </div><br>
               
                <div class ="paragraph-container">
                    <p>Topologi ini menerapkan hubungan antar sentral secara penuh. Jumlah saluran yang harus
                        disediakan
                        untuk membentuk jaringan Mesh adalah jumlah sentral dikurangi 1.
                        Tingkat kerumitan jaringan sebanding dengan meningkatnya jumlah sentral yang terpasang.
                        Topologi
                        ini merupakan teknologi khusus yang tidak dapat dibuat dengan pengkabelan,
                        karena sistem yang rumit. Namun dengan teknologi wireless, topologi ini sangat memungkinkan
                        untuk diwujudkan.</p>
                </div>

                <br>
                <h2>6. Topologi Hybrid</h2>
                <br>
                <div class="paragraph-container">
                    <p>Topologi hybrid adalah topologi yang menggabungkan dua atau lebih topologi jaringan, seperti
                        topologi bintang, cincin, dan mesh. Pemilihan penggabungan topologi tergantung pada
                        kebutuhan
                        kinerja jaringan,
                        banyaknya komputer yang akan dihubungkan, dan lokasinya.</p>
                    <br>
                </div>
                <br>
                    <div class="gambar-container"> <img src="{{ asset('images/materi_topologi/hybrid.png') }}" alt=""
                            class="gambar"> </div><br>
               
                <br>
                <br>
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

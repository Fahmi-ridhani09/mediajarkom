<x-layout>
    <x-slot:title>Materi Pembelajaran</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materi Pembelajaran Jaringan Komputer & Internet</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/controls/OrbitControls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.min.js"></script>
        <link rel="stylesheet" href="materi/materijaringan.css">
    </head>
    <style>
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

    <body>
        <div class="page-container">
            <div class="sidebar-menu" id="sidebar">
                <div class="sidebar-logo">
                    <img src="images/profil.png" alt="Logo" class="logo-img">
                </div>
                <ul>
                    <li><a href="javascript:void(0);" data-topic="topik1" class="active">Topologi</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik2">Jenis Topologi Jaringan</a></li>
                    <li><a href="#" id="quizLink">Kuis</a></li>
                    <li><a href="/latihantopologi" id="latihan">Latihan</a></li>

                </ul>
            </div>
            <div class="content-container">
                <div class="material-title"></div>

                <!-- Topik 1: Topologi -->
                <div id="topik1" class="topic active">
                    <!-- Video YouTube di bagian atas -->
                    <p style="text-align: center; font-weight: bold;"><strong>Simak video berikut ini:</strong></p>
                    <br>
                    <div class="video-container">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/niL_EfuEHIg?si=U4Fw81jD8-mrwfgR"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <!-- Judul dan Konten -->
                    <h2>Topologi</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Topologi (dari bahasa Yunani <em>topos</em>, "tempat", dan <em>logos</em>, "ilmu") merupakan
                            cabang matematika
                            yang berkaitan dengan tata ruang yang tidak berubah dalam deformasi dwikontinu, yaitu ruang
                            yang dapat ditekuk, dilipat, disusut, direntangkan, dan dipilin, tetapi tidak boleh
                            dipotong,
                            dirobek, ditusuk, atau dilekatkan. Topologi muncul melalui pengembangan konsep dari geometri
                            dan teori himpunan, seperti ruang, dimensi, bentuk, dan transformasi.
                        </p>
                    </div>

                    <!-- Gambar -->
                    <div class="gambar-container">
                        <img src="images/icon_topologi.png" alt="Ilustrasi topologi" class="gambar">
                    </div>
                    <br>
                    <h2>Topologi Jaringan Komputer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Topologi jaringan komputer adalah suatu cara menghubungkan komputer yang satu dengan
                            komputer lainnya sehingga membentuk jaringan. Dalam suatu jaringan komputer jenis topologi
                            yang dipilih akan mempengaruhi kecepatan komunikasi. Untuk itu maka perlu dicermati
                            kelebihan / keuntungan dan kekurangan / kerugian dari
                            masing – masing topologi berdasarkan kateristiknya.
                        </p>
                    </div>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Topologi pada dasarnya adalah peta dari sebuah jaringan. Topologi jaringan terbagi lagi
                            menjadi dua yaitu topologi secara fisik (physical topology) dan topologi secara logika
                            (logical topology). Topologi secara fisik menjelaskan bagaimana susunan dari label, komputer
                            dan lokasi dari semua komponen jaringan. Sedangkan topologi secara logika menetapkan
                            bagaimana informasi atau aliran data dalam jaringan.
                            <br>
                            <br>
                        </p>
                    </div>
                    
                </div><br><br>


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
                    </div>
                    <div class="gambar-container">
                        <img src="images/materi_topologi/bus.png" alt="Topologi Bus" class="gambar">
                    </div>
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
                    <div class="gambar-container">
                        <img src="images/materi_topologi/star.png" alt="Topologi Bus" class="gambar">
                    </div>\
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
                    </div>
                    <div class="gambar-container">
                        <img src="images/materi_topologi/ring.png" alt="Topologi Bus" class="gambar">
                    </div>
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
                    <div class="gambar-container">
                        <img src="images/materi_topologi/tree.png" alt="Topologi Bus" class="gambar">
                    </div>
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
                    <div class="gambar-container">
                        <img src="images/materi_topologi/mesh.png" alt="Topologi Bus" class="gambar">
                    </div>
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
                    <div class="gambar-container">
                        <img src="images/materi_topologi/hybrid.png" alt="Topologi Bus" class="gambar">
                    </div>
                    <br>
                    <br>
                </div>
                <button id="nextBtn" class="next-button">Selanjutnya</button>
            </div>


            <!-- Topik 3 -->
            <div id="topik3" class="topic">
                <h2>Kuis</h2>
                <p>Kuis Topologi Jaringan.</p>
            </div>
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

            document.addEventListener("DOMContentLoaded", function() {
                const links = ["/kuistopologi1" /* "/kuistopologi2" */, "/kuistopologi3"];
                const randomLink = links[Math.floor(Math.random() * links.length)];
                document.getElementById("quizLink").setAttribute("href", randomLink);
            });


            function toggleSidebar() {
                document.getElementById("sidebar").classList.toggle("active");
            }
        </script>
    </body>

    </html>
</x-layout>

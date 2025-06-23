<x-layout>
    <x-slot:title>Materi Pembelajaran</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Model OSI Layer</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/controls/OrbitControls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.min.js"></script>
        <link rel="stylesheet" href="materi/materijaringan.css">
    </head>

    <body>
        <div class="page-container">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="javascript:void(0);" data-topic="topik1" class="active">Pendahuluan</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik2">Physical Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik3">Data Link Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik4">Network Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik5">Transport Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik6">Session Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik7">Presentation Layer</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik8">Application Layer</a></li>
                    <li><a href="/latihan_osi" data-topic="topik9">Latihan</a></li>
                </ul>
            </div>
            <div class="content-container">
                <div class="material-title">Model OSI Layer</div>

                <!-- Topik 1: Pendahuluan -->
                <div id="topik1" class="topic active">
                    <h2>Pendahuluan</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Jaringan komputer dari tahun ke tahun selalu mengalami perkembangan. Sehingga setiap user di
                            seluruh penjuru dunia dapat melakukan komunikasi dengan cepat dan optimal. Saat ini, sudah
                            ada standarisasi khusus yang mengatur penggunaan jaringan komputer, yaitu OSI Layer.
                        </p>
                    </div>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Pada tahun 1970, terdapat sebuah organisasi yang berlokasi di Eropa bernama ISO atau
                            International Organization for Standardization. Mereka mengembangkan sebuah model arsitektur
                            jaringan bernama OSI Reference Model for Open Networking (Model Jaringan Terbuka OSI) yang
                            terdiri dari 7 layer dengan fungsinya masing-masing.
                        </p>
                    </div>
                    <br>
                    <div class="paragraph-container">
                        <p>Open System Interconnection (OSI) Model adalah model yang diciptakan oleh “International
                            Organization for Standardization (ISO)”
                            untuk mengatur standar protokol dan format data yang berbeda dari banyak perusahaan penyedia
                            jaringan komputer. Model ini menyediakan
                            kerangka yang terbuka dan standar untuk sistem komunikasi melalui jaringan komputer. Model
                            ini menggunakan model lapisan yang terdiri atas 7 lapisan,
                            seperti tampak pada gambar dibawah.</p>
                    </div>
                    <br>
                    <div class="gambar-container">
                        <img src="images/materi_osi/osi1.png" alt="Topologi Bus"style="height:500px;" class="gambar">
                        <br>
                    </div>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            OSI layer adalah sistem yang berperan dalam pengiriman tersebut, sehingga pesan yang di
                            kirim oleh A melalui perangkatnya akan sampai atau di terima oleh B di dalam perangkatnya
                            juga.
                        </p>
                    </div>
                    <br>
                    <div class="paragraph-container">
                        <p>
                            Fungsi dari konsep OSI layer adalah memudahkan proses pencarian titik awal permasalahan,
                            sehingga meminimalkan waktu yang di perlukan untuk melacak masalah jaringan. Dengan begitu,
                            masalah jaringan bisa diatasi dengan lebih mudah.
                        </p>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik2">Selanjutnya</button>
                </div>

                <!-- Topik 2: Physical Layer -->
                <div id="topik2" class="topic">
                    <h2>Physical Layer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>Lapisan ini mendefinisikan perangkat keras pada transmisi jaringan seperti Network Interface
                            Card (NIC), repeater,hub, dan lain sebagainya.
                            Lapisan ini menentukan bagaimana cara sinkronisasi bit, arsitektur jaringan seperti
                            Ethernet, topologi jaringan dan sistem pengkabelan.
                            Pengiriman data dalam bentuk bit (biner) juga menjadi tanggung jawab lapisan ini, termasuk
                            encoding. Protokol yang digunakan pada lapisan
                            ini termasuk di dalamnya adalah: Ethernet, USB, Bluetooth, dan lain sebagainya. </p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/physical.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik3">Selanjutnya</button>
                </div>

                <!-- Topik lainnya -->
                <div id="topik3" class="topic">
                    <h2>Data Link Layer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>Lapisan ini bertanggung jawab untuk membaca dan menulis data dari dan ke jalur komunikasi,
                            mengelompokkan data dalam frame, melakukan error checking
                            dan correction, control flow, melakukan pengalamatan perangkat keras (MAC Address). Lapisan
                            ini juga menentukan operasi perangkat jaringan seperti hub,
                            switch, bridge, dan lain sebagainya pada level 2. Protokol pada lapisan ini seperti
                            Pointto-Point Protocol (PPP), dan lain sebagainya: </p>
                        <br>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/data-link.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik4">Selanjutnya</button>
                </div>

                <div id="topik4" class="topic">
                    <h2>Network Layer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>Lapisan ini bertanggung jawab untuk pengalamatan host pengirim dan penerima secara unik pada
                            jaringan. Protokol pada lapisan ini adalah Internet Protocol (IP) yang menciptakan IP
                            Address, ARP, ICMP, dan lain sebagainya.</p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/network.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik5">Selanjutnya</button>
                </div>

                <div id="topik5" class="topic">
                    <h2>Transport Layer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>Lapisan ini bertanggung jawab untuk pengiriman end-to-end antara pengirim dan penerima,
                            seperti memecah data ke dalam paket-paket data, memberikan nomor urut ke paket-paket
                            tersebut sehingga dapat disusun kembali pada komputer penerima.
                            Selain itu, pada lapisan ini juga diciptakan acknowledgement sebagai penanda sukses tidaknya
                            pengiriman data. Protokol pada lapisan ini adalah User Datagram Protocol (UDP) dan
                            Transmission Control Protocol (TCP). Lapisan ini memiliki
                            kemampuan transfer data yang andal dan transparan antara pengirim dan penerima. Lapisan ini
                            juga melakukan multiplexing, pengendalian aliran, dan error checking data.</p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/transport.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik6">Selanjutnya</button>

                </div>

                <div id="topik6" class="topic">
                    <h2>Session Layer</h2>
                    <br>
                    <div class ="paragraph-container">
                        <p>Lapisan ini mendefinisikan koneksi antar dua komputer saat dimulai, dipelihara, dan diakhiri
                            yang disebut dengan sesi. Sebagai contoh, setelah otentikasi pengguna/ kata sandi selesai,
                            komputer jarak jauh mempertahankan sesi ini
                            untuk sementara waktu dan tidak meminta otentikasi lagi dalam rentang waktu tertentu. Contoh
                            protokol pada lapisan ini adalah NetBIOS (IBM), Point-to-point Tunneling Protocol (PPTP),
                            dan lain sebagainya.</p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/session.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik7">Selanjutnya</button>
                </div>

                <div id="topik7" class="topic">
                    <h2>Presentation Layer</h2>
                    <br>
                    <div class ="paragraph-container">
                        <p>Lapisan ini mendefinisikan format dan mentranslasikan data yang akan ditransmisikan oleh
                            aplikasi melalui jaringan dari pengirim ke penerima. Protokol yang digunakan pada lapisan
                            ini adalah Secure Socket Layer (SSL), Transport Layer Security
                            (TLS), Remote Desktop Protocol (RDP), dan lain sebagainya.</p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/presentaition.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik8">Selanjutnya</button>

                </div>

                <div id="topik8" class="topic">
                    <h2>Application Layer</h2>
                    <br>
                    <div class="paragraph-container">
                        <p>Lapisan ini bertanggung jawab untuk menyediakan antarmuka ke pengguna aplikasi. Protokol yang
                            digunakan pada lapisan ini adalah protokol yang berinteraksi langsung dengan pengguna,
                            seperti hypertext transfer protocol (HTTP), file transfer protocol (FTP), domain name
                            services (DNS), dan lain sebagainya.rtanggung jawab untuk menyediakan antarmuka ke pengguna
                            aplikasi. Protokol yang digunakan
                            pada lapisan ini adalah protokol yang berinteraksi langsung dengan pengguna, seperti
                            hypertext transfer protocol (HTTP), file transfer protocol (FTP), domain name services
                            (DNS), dan lain sebagainya.</p>
                    </div>
                    <div class="paragraph-container">
                        <div class="gambar-container">
                            <img src="images/materi_osi/application.png" alt=""style="height:800px;"
                                class="gambar">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button class="next-button" data-next="topik9">Selanjutnya</button>

                </div>

                <div id="topik9" class="topic" style="cursor: pointer;">
                    <h2>Klik untuk memulai latihan</h2>
                </div>


            </div>
        </div>

        <script>
            const topics = document.querySelectorAll('.topic');
            const menuLinks = document.querySelectorAll('.sidebar-menu ul li a');
            const nextButtons = document.querySelectorAll('.next-button');

            document.getElementById("topik9").addEventListener("click", function() {
                window.location.href = "/latihan_osi";
            });

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

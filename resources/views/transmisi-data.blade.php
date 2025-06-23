<x-layout>
    <x-slot:title>Materi Pembelajaran Transmisi Data</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materi Pembelajaran Transmisi Data</title>
        <style>
            .page-container {
                display: flex;
                max-width: 1200px;
                margin: 20px auto;
            }

            .sidebar-menu {
                width: 250px;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .sidebar-menu ul {
                list-style-type: none;
                padding: 0;
            }

            .sidebar-menu ul li {
                margin-bottom: 10px;
            }

            .sidebar-menu ul li a {
                text-decoration: none;
                font-size: 1.1rem;
                color: #333;
                padding: 10px 15px;
                display: block;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .sidebar-menu ul li a:hover,
            .sidebar-menu ul li a.active {
                background-color: #d4a373;
                color: white;
            }

            .content-container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                flex-grow: 1;
                margin-left: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            .material-title {
                font-size: 2rem;
                font-weight: bold;
                color: #333;
                margin-bottom: 20px;
                text-align: center;
            }

            .topic {
                display: none;
            }

            .topic.active {
                display: block;
            }

            .next-button {
                position: absolute;
                bottom: 20px;
                right: 20px;
                background-color: #d4a373;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 1rem;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .next-button:hover {
                background-color: #8b2e00;
            }

            p {
                text-align: justify;
            }

            h2 {
                font-size: 2.5rem;
                font-weight: bold;
            }

            .gambar-container {
            display: flex;
            justify-content: center; /* Memusatkan secara horizontal */
            align-items: center;    /* Memusatkan secara vertikal */
            height: 80vh;          /* Tinggi penuh viewport */
            background-color: #ffffff; /* Opsional, untuk visual */
            }

            .gambar {
            width: 500px;
            height: auto;
            border: 2px solid #fcfcfc;
            border-radius: 1px;
            }
        </style>
    </head>
    <body>
        <div class="page-container">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="javascript:void(0);" data-topic="topik1" class="active">Pengenalan Transmisi Data</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik2">Paket Data</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik3">Struktur Paket</a></li>
                    <li><a href="javascript:void(0);" data-topic="topik4">Latihan</a></li>
                </ul>
            </div>
            <div class="content-container">
                <div class="material-title">Materi Pembelajaran Transmisi Data</div>

                <!-- Topik 1: Pengenalan -->
                <div id="topik1" class="topic active">
                    <h2>Pengenalan Transmisi Data</h2>
                    <br>
                    <p>Transmisi data adalah proses penting pada jaringan komputer dan internet. Ketika kita mengirimkan email atau mengakses situs web dan kita mendapatkan informasi maka terjadi transmisi data. Transmisi data adalah proses berbagi atau bertukar data antara dua objek, alat, atau sistem. Komunikasi data memiliki bagian penting yaitu pengirim yang melakukan proses pengiriman data, penerima yang menerima data, dan medium/kanal yang merupakan saluran transmisi dari data atau informasi dari dua objek berbeda tersebut. Bagian penting dari komunikasi data dapat dilihat pada gambar berikut</p>
                    <br>
                    <div class="gambar-container">
                        <img src="images/materi_transmisi/transmisi.png" alt="Topologi Bus" class="gambar">
                    </div>
                    <p>Secara umum, medium atau kanal adalah benda dimana data akan bergerak dari pengirim menuju penerima. Medium ini dapat berupa udara jika data yang dikirimkan adalah data suara dari mulut ke telinga, dari radio pemancar ke pesawat radio di rumah dalam bentuk gelombang elektromagnetis, kabel tembaga, atau kabel serat optik jika data berupa cahaya yang dikirim dari satu tempat ke tempat lain. Transmisi data dari pengirim ke penerima dapat terjadi kesalahan. Kesalahan data ini dapat dideteksi dan dapat dikembalikan dengan cara tertentu.</p>
                    <br>
                    <br>
                    <a href="javascript:void(0);" class="next-button" data-next="topik2">Selanjutnya</a>
                </div>

                <!-- Topik 2 -->
                <div id="topik2" class="topic">
                    <h2>Paket Data</h2>
                    <p>Transmisi data pada jaringan komputer dan internet biasanya tidak dikirim dalam ukuran yang besar karena akan terkendala oleh kemampuan medium dan untuk kepentingan keandalan pengiriman. Data dikirimkan dalam bentuk sekumpulan paket data yang berukuran kecil yang dinamakan data packets atau juga biasa disebut dengan datagram. Paket data dapat memiliki ukuran yang tetap atau dinamis tergantung kebutuhan sistem, namun biasanya paket data berukuran kecil, yaitu sekitar 64 KiB sehingga dapat dengan mudah dikelola.</p>
                    <br>
                    <p>Kumpulan paket data kemudian bisa dikirimkan melalui jalur yang berbeda-beda. Paket data ke-i, misalnya dapat melalui jalur X, namun kemudian jika suatu jalur X menjadi sangat sibuk, maka paket ke-i+1 dapat melewati jalur lain menuju tujuan dari pengiriman paket. Sama seperti ketika kurir akan mengirimkan paket belanja daring yang kita beli, tentu kurir akan mencari jalur tercepat untuk sampai ke rumah kita. Metode dengan memecah paket dalam bentuk paket-paket kecil ini sebenarnya memiliki kelemahan, yaitu dengan adanya proses penyusunan kembali paket-paket data tersebut (reassemble).</p>
                    <br>
                    <br>
                    <a href="javascript:void(0);" class="next-button" data-next="topik3">Selanjutnya</a>
                </div>

                <!-- Topik 3: -->
                <div id="topik3" class="topic">
                    <h2>Struktur Paket</h2>
                    <br>
                    <p>Paket terdiri atas tiga bagian penting, yaitu: packet header, packet payload, dan packet trailer. Packet header adalah alamat paket ketika suatu paket akan dikirimkan ke tujuan tertentu. Packet payload adalah paket data sebenarnya yang berisi informasi yang ditransmisikan dari sumber ke tujuan, sedangkan packet trailer berisi informasi penutup dari suatu paket data yang menandakan paket berakhir. Packet trailer dapat berisi protokol untuk pengecekan terjadinya pengiriman data.</p>
                    <br>
                    <h2>Packet Switching</h2>
                    <p>Packet switching adalah salah satu cara transmisi paket data yang paling banyak digunakan, dimana data akan dipecah ke dalam beberapa paket data dan dikirimkan secara independen dari titik awal ke titik tujuan. Sesampainya di tujuan paket paket data tersebut akan disusun kembali dengan urutan yang sesuai dengan menggunakan informasi yang ada pada header packet. Pada setiap tahapan pengiriman data akan sampai pada node yang berisi router, yang akan melanjutkan proses pengiriman ke tujuan.</p>
                    <br>
                    <p>Sebagai contoh, misalnya kita sedang mengirimkan sebuah surel berisi foto dari laptop ke ponsel teman. Surel dan foto tersebut akan dipecah menjadi beberapa paket data sebelum dikirimkan.</p>
                    <br>
                    <p>Paket-paket data akan dikirim melalui rute dari komputer A ke komputer B, melewati node yang bisa berupa router, switch, komputer, dan lainnya. Saat sebuah paket data mencapai node tertentu, node tersebut akan meneruskannya berdasarkan packet header yang terdapat pada paket tersebut.paket data dari komputer A akan melalui jalur independen untuk mencapai komputer B.</p>
                    <br>
                    <br>
                    <br>
                    <a href="javascript:void(0);" class="next-button" data-next="topik4">Selanjutnya</a>
                </div>

                <!-- Topik 4: Latihan -->
                <div id="topik4" class="topic">
                    <h2>Latihan</h2>
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

        </script>
    </body>
    </html>
</x-layout>

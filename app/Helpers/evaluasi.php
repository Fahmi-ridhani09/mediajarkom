<?php

namespace App\Helpers;


class evaluasi {

    protected static $questions = [
        [
            "question"=>"Yang dimaksud dengan Topologi adalah….",
            "choice"=>[
                "A"=>"Cabang matematika yang mempelajari pola angka",
                "B"=>"Cabang matematika yang berhubungan dengan bentuk dan ukuran",
                "C"=>"Cabang matematika yang berhubungan dengan tata ruang yang tidak berubah dalam deformasi dwikontinu",
                "D"=>"Cabang matematika yang mempelajari sistem bilangan kompleks",
                "E"=>"Cabang matematika yang berhubungan dengan statistik dan probabilitas",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Topologi Jaringan Komputer adalah…..",
            "choice"=>[
                "A"=>"Cara menghubungkan perangkat keras komputer satu dengan yang lainnya melalui internet",
                "B"=>"Metode untuk meningkatkan kecepatan prosesor dalam sebuah komputer",
                "C"=>"Suatu cara menghubungkan komputer yang satu dengan komputer lainnya sehingga membentuk jaringan",
                "D"=>"Proses pengaturan perangkat lunak dalam jaringan komputer",
                "E"=>"Teknik pengelolaan data dalam sebuah jaringan local",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Yang perlu dicermati saat memilih jenis topologi jaringan komputer adalah…. ",
            "choice"=>[
                "A"=>"Harga perangkat keras jaringan",
                "B"=>"Kelebihan/keuntungan dan kekurangan/kerugian dari masing-masing topologi berdasarkan karakteristiknya",
                "C"=>"Jenis kabel yang digunakan dalam jaringan",
                "D"=>"Jumlah pengguna dalam jaringan",
                "E"=>"Jarak fisik antara komputer dalam jaringan",
            ],
            "answer"=> "B"

            
        ],
        [
            "question"=>"Topologi bus adalah topologi dimana setiap node terkoneksi melalui kabel utama atau bus atau backbone. Topologi bus ini sangat efisien digunakan untuk jaringan komputer dengan jumlah node yang tidak banyak (small network). Manakah pernyataan berikut yang benar tentang topologi bus…",
            "choice"=>[
                "A"=>"Setiap node terkoneksi secara langsung dengan node lain tanpa menggunakan kabel utama.",
                "B"=>"Setiap node terkoneksi melalui kabel utama atau bus atau backbone.",
                "C"=>"Topologi ini tidak cocok untuk jaringan komputer dengan jumlah node yang sedikit.",
                "D"=>"Topologi bus sangat efisien digunakan untuk jaringan komputer dengan jumlah node yang banyak (large network).",
                "E"=>"Dalam topologi bus, jika salah satu node rusak, seluruh jaringan tetap berfungsi normal.",
            ],
            "answer"=> "B"

            
        ],
        [
            "question"=>"Disebut topologi star karena bentuknya seperti bintang, sebuah alat yang disebut concentrator bisa berupa hub atau switch menjadi pusat, dimana semua komputer dalam jaringan dihubungkan ke concentrator ini. Pernyataan berikut yang benar tentang Topologi Star adalah…..",
            "choice"=>[
                "A"=>"Semua komputer dalam jaringan dihubungkan satu sama lain tanpa menggunakan alat pusat.",
                "B"=>"Topologi star menggunakan kabel utama sebagai backbone untuk menghubungkan semua komputer.",
                "C"=>"Sebuah alat yang disebut concentrator, seperti hub atau switch, menjadi pusat dari topologi star.",
                "D"=>"Topologi star tidak memerlukan hub atau switch untuk menghubungkan komputer.",
                "E"=>"Bentuk jaringan topologi star menyerupai lingkaran, dengan setiap komputer terhubung ke dua komputer lainnya.",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Yang dimaksud dengan Open System Interconnection (OSI) Model ialah…. ",
            "choice"=>[
                "A"=>"Model yang diciptakan oleh perusahaan-perusahaan jaringan komputer untuk mengatur standar perangkat keras.",
                "B"=>"Model yang diciptakan oleh International Organization for Standardization (ISO) untuk mengatur standar protokol dan format data yang berbeda dari banyak perusahaan penyedia jaringan komputer.",
                "C"=>"Model yang digunakan untuk meningkatkan kecepatan jaringan dengan mengurangi jumlah lapisan komunikasi.",
                "D"=>"Model yang hanya digunakan untuk mengatur komunikasi dalam jaringan lokal (LAN).",
                "E"=>"Model yang berfungsi untuk mengelola perangkat lunak dalam jaringan komputer.",
            ],
            "answer"=> "B"

            
        ],
        [
            "question"=>"Fungsi utama dari Application Layer dalam OSI adalah…..",
            "choice"=>[
                "A"=>"Mengelola perangkat keras jaringan seperti switch dan router.",
                "B"=>"Mengatur aliran data antara node jaringan.",
                "C"=>"Menyediakan antarmuka ke pengguna aplikasi.",
                "D"=>"Mengamankan jaringan dari serangan cyber.",
                "E"=>"Menjaga kestabilan daya listrik dalam jaringan komputer.",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Yang menjadi tanggung jawab utama dari Presentation Layer dalam model OSI adalah…",
            "choice"=>[
                "A"=>"Mentranslasikan data ke dalam format yang sesuai untuk ditransmisikan melalui jaringan",
                "B"=>"Mengatur aliran data antara node jaringan.",
                "C"=>"Mengamankan koneksi jaringan dari serangan hacker.",
                "D"=>"Menyediakan antarmuka ke pengguna aplikasi.",
                "E"=>"Menangani manajemen bandwidth dalam jaringan.",
            ],
            "answer"=> "A"

            
        ],
        [
            "question"=>"Urutan yang benar dari lapisan-lapisan dalam model OSI (Open Systems Interconnection) dari yang paling atas (top) ke yang paling bawah (bottom) adalah….",
            "choice"=>[
                "A"=>"Physical, Data Link, Network, Transport, Session, Presentation, Application",
                "B"=>"Application, Presentation, Session, Transport, Network, Data Link, Physical",
                "C"=>"Application, Presentation, Transport, Session, Data Link, Physical, Network",
                "D"=>"Application, Presentation, Session, Transport, Network, Data Link, Physical",
                "E"=>"Application, Presentation, Transport, Network, Data Link, Session, Physical",
            ],
            "answer"=> "D"

            
        ],
        [
            "question"=>"Lapisan Data Link dalam model OSI ber tanggung jawab untuk…..",
            "choice"=>[
                "A"=>"Mengatur aliran data antara node jaringan.",
                "B"=>"Menangani enkripsi data yang ditransmisikan melalui jaringan.",
                "C"=>"Menyediakan antarmuka ke pengguna aplikasi.",
                "D"=>"Menyediakan koneksi fisik antara komputer dalam jaringan.",
                "E"=>"Membaca dan menulis data dari dan ke jalur komunikasi.",
            ],
            "answer"=> "E"

            
        ],
        [
            "question"=>"Transmission Control Protocol/Internet Protocol(TCP/IP) adalah….",
            "choice"=>[
                "A"=>"Standar komunikasi data yang digunakan pada jaringan internet.",
                "B"=>"Protokol yang digunakan untuk mengatur aliran listrik dalam jaringan komputer.",
                "C"=>"Protokol yang mengatur tata letak fisik dalam ruang server.",
                "D"=>"Sistem keamanan yang digunakan untuk melindungi data dalam jaringan.",
                "E"=>"Protokol yang digunakan untuk mengatur transmisi suara dalam telepon.",
            ],
            "answer"=> "A"

            
        ],
        [
            "question"=>"Protocol TCP/IP dikembangkan sejak…..",
            "choice"=>[
                "A"=>"Pertengahan 1990-an",
                "B"=>"Awal 2000-an",
                "C"=>"Awal 1980-an",
                "D"=>"Akhir 1970-an",
                "E"=>"Tidak pernah dikembangkan",
            ],
            "answer"=> "D"

            
        ],
        [
            "question"=>"Keunggulan utama dari TCP/IP ialah….",
            "choice"=>[
                "A"=>"Kompatibilitas dengan semua jenis perangkat keras komputer.",
                "B"=>"Kemampuan untuk mengamankan data dalam jaringan.",
                "C"=>"Kemampuan untuk mendukung transmisi data berkecepatan tinggi.",
                "D"=>"Standar protokol yang terbuka, tersedia secara bebas, dan dikembangkan independen terhadap perangkat keras komputer dan sistem operasi.",
                "E"=>"Kinerja yang lebih tinggi dibandingkan protokol jaringan lainnya",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Peran Utama dari TCP dalam proses pengiriman data dalam jaringan adalah….",
            "choice"=>[
                "A"=>"Membagi data menjadi paket-paket data kecil.",
                "B"=>"Menambahkan label alamat pada paket data.",
                "C"=>"Menjamin data sampai ke tempat tujuan secara aman dan tepat.",
                "D"=>"Mengatur aliran data antara komputer pengirim dan penerima.",
                "E"=>"Menambahkan informasi untuk error checking pada paket-paket data.",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Apa peran yang dimainkan oleh IP (Internet Protocol) dalam pengiriman data menggunakan TCP/IP adalah...",
            "choice"=>[
                "A"=>"Menambahkan label alamat pada paket data.",
                "B"=>"Mengirim data dengan kecepatan tinggi dalam jaringan.",
                "C"=>"Memecah data menjadi paket-paket data kecil.",
                "D"=>"Menjamin pengiriman data sampai ke tempat tujuan secara aman dan tepat.",
                "E"=>"Menyediakan antarmuka pengguna aplikasi.",
            ],
            "answer"=> "A"

            
        ],
        [
            "question"=>"Perangkat jaringan yang berfungsi menghubungkan paket data antara dua segmen jaringan atau lebih dengan Net ID berbeda adalah…",
            "choice"=>[
                "A"=>"Switch",
                "B"=>"Router",
                "C"=>"Hub",
                "D"=>"Repeater",
                "E"=>"Access Point",
            ],
            "answer"=> "B"

            
        ],
        [
            "question"=>"Perangkat yang dipasang pada komputer atau laptop untuk memungkinkan komunikasi antar komputer dalam jaringan disebut….",
            "choice"=>[
                "A"=>"Modem",
                "B"=>"Ethernet Card",
                "C"=>"Access Point",
                "D"=>"Kabel Twisted Pair",
                "E"=>"Switch",
            ],
            "answer"=> "B"

            
        ],
        [
            "question"=>"Perangkat yang digunakan untuk mengubah sinyal analog ke digital atau sebaliknya, agar komputer dapat terhubung dengan internet, adalah…",
            "choice"=>[
                "A"=>"Router",
                "B"=>"Switch",
                "C"=>"Modem",
                "D"=>"Hub",
                "E"=>"Repeater",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"Kabel yang sering disebut sebagai kabel antena oleh orang awam dan memiliki lima bagian bertingkat adalah…",
            "choice"=>[
                "A"=>"Twisted Pair",
                "B"=>"Fiber Optik",
                "C"=>"Coaxial",
                "D"=>"HDMI",
                "E"=>"Kabel Power",
            ],
            "answer"=> "C"

            
        ],
        [
            "question"=>"20.	Perangkat jaringan yang berfungsi memperluas jangkauan sinyal Wi-Fi di sebuah area disebut…",
            "choice"=>[
                "A"=>"Router",
                "B"=>"Switch",
                "C"=>"Access Point",
                "D"=>"Repeater",
                "E"=>"Access Point",
            ],
            "answer"=> "D"

            
        ]
        ];

        static public function getQuestion(){
            return self::$questions;
        }
        

}
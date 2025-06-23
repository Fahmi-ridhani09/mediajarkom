<?php

namespace App\Helpers;


class tcpip {

    protected static $questions = [
        [
            "question" => "Apa fungsi utama dari protokol TCP dalam model TCP/IP?",
            "choice" => [
                "A" => "Mengatur pengalamatan IP dalam jaringan",
                "B" => "Mengirim data tanpa memastikan keandalan pengiriman",
                "C" => "Memastikan data diterima dengan lengkap dan urut",
                "D" => "Mengkonversi nama domain menjadi alamat IP",
                "E" => "Semua benar",
            ],
            "answer" => "C"


        ],
        [
            "question" => "Manakah dari berikut ini yang merupakan lapisan aplikasi dalam model TCP/IP?",
            "choice" => [
                "A" => "HTTP",
                "B" => "Android",
                "C" => "Linux",
                "D" => "Semua benar",
                "E" => "Semua salah",
            ],
            "answer" => "A"


        ],
        [
            "question" => "Lapisan jaringan dalam model TCP/IP bertanggung jawab untuk..",
            "choice" => [
                "A" => "Enkripsi dan dekripsi data",
                "B" => "Mengontrol sesi komunikasi",
                "C" => "Menentukan jalur dan pengalamatan data",
                "D" => "Memastikan data diterima dengan benar",
                "E" => "Mengelola port untuk aplikasi",
            ],
            "answer" => "C"


        ],
        [
            "question" => "Transmission Control Protocol/Internet Protocol(TCP/IP) adalah….",
            "choice" => [
                "A" => "Standar komunikasi data yang digunakan pada jaringan internet.",
                "B" => "Protokol yang digunakan untuk mengatur aliran listrik dalam jaringan komputer.",
                "C" => "Protokol yang mengatur tata letak fisik dalam ruang server.",
                "D" => "Sistem keamanan yang digunakan untuk melindungi data dalam jaringan.",
                "E" => "Protokol yang digunakan untuk mengatur transmisi suara dalam telepon.",
            ],
            "answer" => "A"


        ],
        [
            "question" => "Keunggulan utama dari TCP/IP ialah….",
            "choice" => [
                "A" => "Kompatibilitas dengan semua jenis perangkat keras komputer.",
                "B" => "Kemampuan untuk mengamankan data dalam jaringan.",
                "C" => "Kemampuan untuk mendukung transmisi data berkecepatan tinggi.",
                "D" => "Standar protokol yang terbuka, tersedia secara bebas, dan dikembangkan independen terhadap perangkat keras komputer dan sistem operasi.",
                "E" => "Kinerja yang lebih tinggi dibandingkan protokol jaringan lainnya",
            ],
            "answer" => "D"


        ],
    ];

    static public function getQuestion()
    {
        return self::$questions;
    }
}

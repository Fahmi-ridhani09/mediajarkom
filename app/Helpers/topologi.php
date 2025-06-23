<?php

namespace App\Helpers;


class topologi {

    protected static $questions = [
        [
            "question" => "Yang dimaksud dengan Topologi adalah….",
            "choice" => [
                "A" => "Cabang matematika yang mempelajari pola angka",
                "B" => "Cabang matematika yang berhubungan dengan bentuk dan ukuran",
                "C" => "Cabang matematika yang berhubungan dengan tata ruang yang tidak berubah dalam deformasi dwikontinu",
                "D" => "Cabang matematika yang mempelajari sistem bilangan kompleks",
                "E" => "Cabang matematika yang berhubungan dengan statistik dan probabilitas",
            ],
            "answer" => "C"
        ],
        [
            "question" => "Topologi Jaringan Komputer adalah…..",
            "choice" => [
                "A" => "Cara menghubungkan perangkat keras komputer satu dengan yang lainnya melalui internet",
                "B" => "Metode untuk meningkatkan kecepatan prosesor dalam sebuah komputer",
                "C" => "Suatu cara menghubungkan komputer yang satu dengan komputer lainnya sehingga membentuk jaringan",
                "D" => "Proses pengaturan perangkat lunak dalam jaringan komputer",
                "E" => "Teknik pengelolaan data dalam sebuah jaringan local",
            ],
            "answer" => "C"
        ],
        [
            "question" => "Yang perlu dicermati saat memilih jenis topologi jaringan komputer adalah….",
            "choice" => [
                "A" => "Harga perangkat keras jaringan",
                "B" => "Kelebihan/keuntungan dan kekurangan/kerugian dari masing-masing topologi berdasarkan karakteristiknya",
                "C" => "Jenis kabel yang digunakan dalam jaringan",
                "D" => "Jumlah pengguna dalam jaringan",
                "E" => "Jarak fisik antara komputer dalam jaringan",
            ],
            "answer" => "B"
        ],
        [
            "question" => "Manakah pernyataan berikut yang benar tentang topologi bus…",
            "choice" => [
                "A" => "Setiap node terkoneksi secara langsung dengan node lain tanpa menggunakan kabel utama.",
                "B" => "Setiap node terkoneksi melalui kabel utama atau bus atau backbone.",
                "C" => "Topologi ini tidak cocok untuk jaringan komputer dengan jumlah node yang sedikit.",
                "D" => "Topologi bus sangat efisien digunakan untuk jaringan komputer dengan jumlah node yang banyak (large network).",
                "E" => "Dalam topologi bus, jika salah satu node rusak, seluruh jaringan tetap berfungsi normal.",
            ],
            "answer" => "B"
        ],
        [
            "question" => "Pernyataan berikut yang benar tentang Topologi Star adalah…..",
            "choice" => [
                "A" => "Semua komputer dalam jaringan dihubungkan satu sama lain tanpa menggunakan alat pusat.",
                "B" => "Topologi star menggunakan kabel utama sebagai backbone untuk menghubungkan semua komputer.",
                "C" => "Sebuah alat yang disebut concentrator, seperti hub atau switch, menjadi pusat dari topologi star.",
                "D" => "Topologi star tidak memerlukan hub atau switch untuk menghubungkan komputer.",
                "E" => "Bentuk jaringan topologi star menyerupai lingkaran, dengan setiap komputer terhubung ke dua komputer lainnya.",
            ],
            "answer" => "C"
        ],
    ];

    static public function getQuestion()
    {
        return self::$questions;
    }
}

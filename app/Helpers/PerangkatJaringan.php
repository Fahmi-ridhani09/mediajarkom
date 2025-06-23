<?php

namespace App\Helpers;


class PerangkatJaringan
{

    protected static $questions = [
        [
            "question" => "Suatu jaringan komputer dibangun menggunakan perangkat-perangkat yang mendukung kinerja jaringan. Perangkat-perangkat jaringan tersebut memiliki karakteristik berbeda-beda namun bersifat umum. Manakah perangkat berikut yang termasuk ke dalam perangkat jaringan?",
            "choice" => [
                "A" => "Modem,Router, Switch",
                "B" => "Printer, Monitor, Keyboard",
                "C" => "Power Supply, Hard Disk, Processor",
                "D" => "Kamera, Mikrofon, Speaker",
                "E" => "Semua benar",
            ],
            "answer" => "A"


        ],
        [
            "question" => "Sebuah kampus memiliki dua gedung terpisah, yaitu Kampus 1 dengan jaringan IP 192.168.1.0 dan Kampus 2 dengan jaringan IP 202.100.10.0. Agar komputer client di Kampus 1 dapat berkomunikasi dengan client di Kampus 2, maka perangkat yang diperlukan adalah…..",
            "choice" => [
                "A" => "Switch untuk menghubungkan kedua jaringan",
                "B" => "Hub untuk menggabungkan semua perangkat dalam satu jaringan",
                "C" => "Repeater untuk memperkuat sinyal jaringan antar gedung",
                "D" => "Router untuk menghubungkan jaringan dengan Net ID berbeda",
                "E" => "Access Point untuk memperluas jangkauan sinyal Wi-Fi",
            ],
            "answer" => "D"


        ],
        [
            "question" => "Ethernet card adalah perangkat jaringan yang dipasang pada komputer atau laptop. Fungsi utamanya adalah….",
            "choice" => [
                "A" => "Memperkuat sinyal jaringan antar komputer",
                "B" => "Menghubungkan atau berkomunikasi antara komputer satu dengan komputer lain",
                "C" => "Mengatur alokasi IP address dalam jaringan",
                "D" => "Mengelola lalu lintas data di dalam jaringan",
                "E" => "Semua Benar",
            ],
            "answer" => "B"


        ],
        [
            "question" => "Modem adalah perangkat yang digunakan untuk mengubah sinyal analog ke digital atau sebaliknya. Berdasarkan fungsinya, perangkat ini diperlukan agar…",
            "choice" => [
                "A" => "Komputer dapat berkomunikasi dengan perangkat lain dalam jaringan local",
                "B" => "Data dapat disimpan dalam format digital di komputer",
                "C" => "Komputer dapat terhubung dengan jaringan internet",
                "D" => "Sinyal Wi-Fi dapat diperkuat untuk menjangkau area yang lebih luas",
                "E" => "Aliran data dalam jaringan dapat dikelola dengan lebih efisien",
            ],
            "answer" => "C"


        ],
        [
            "question" => "Perangkat jaringan yang sering disebut kabel antena oleh orang awam dan memiliki lima bagian bertingkat adalah….",
            "choice" => [
                "A" => "Kabel Twisted Pair",
                "B" => "Fiber Optic",
                "C" => "Kabel Coaxial",
                "D" => "Kabel Hdmi",
                "E" => "Kabel Power",
            ],
            "answer" => "C"
        ],
        
    ];

    static public function getQuestion()
    {
        return self::$questions;
    }
}

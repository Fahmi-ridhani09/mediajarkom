@extends('guru.layout.layout_guru')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Perangkat Jaringan Komputer</h1>
        </div>

        <style>
            body {
                color: #000;
            }

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

            .gambar-container {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
                text-align: center;
            }

            .gambar-container img {
                width: 100%;
                height: auto;
                display: block;
                margin: 0 auto;
            }

            .paragraph-container {
                background-color: #fffefc;
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 20px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                transition: box-shadow 0.3s ease;
            }


            h2 {
                text-align: center;
                margin-bottom: 20px;
                font-weight: bold;
            }

            .section-header h1 {
                font-weight: bold;
                text-align: center;
            }
        </style>

        <p style="text-align: center; font-weight: bold;"><strong>Simak video berikut ini:</strong></p>
        <br>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N2CNS1N9gZo?si=pkotOrEctZ4jUnRW"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <br>

        <h2>Mengenal Komponen</h2>
        <br>

        <div class="paragraph-container">
            <p>Komponen jaringan komputer adalah semua perangkat dan perangkat lunak yang diperlukan untuk
                menghubungkan beberapa komputer dan perangkat lain, sehingga mereka dapat saling bertukar
                informasi dan berbagi sumber daya.</p>
        </div>

        <div class="gambar-container">
            <img src="{{ asset('images/materi_perangkat_jaringan/materi_perangkat_jaringan.png') }}" alt="Materi Jaringan">
        </div>
        <br>

        <div class="paragraph-container">
            <p>Suatu jaringan komputer dibangun menggunakan perangkat-perangkat yang mendukung kinerja dari
                jaringan komputer itu sendiri. Perangkat-perangkat jaringan tersebut memiliki karakteristik
                yang berbeda-beda namun sifatnya umum.</p>
        </div>

        <div class="paragraph-container">
            <p>Perangkat jaringan komputer adalah komponen fisik yang berperan penting dalam membangun,
                menghubungkan, mengelola, dan memelihara jaringan komputer. Jaringan komputer sendiri
                merupakan sistem yang menghubungkan dua atau lebih perangkat untuk berbagi data, sumber
                daya, dan informasi. Tanpa adanya perangkat jaringan, komunikasi antar perangkat dalam
                jaringan tidak akan mungkin terjadi. Oleh karena itu, perangkat ini menjadi fondasi utama
                dalam menciptakan sistem jaringan yang handal dan efisien.</p>
        </div>

        <div class="paragraph-container">
            <p>Fungsi utama dari perangkat jaringan komputer adalah untuk memastikan bahwa data dapat
                ditransmisikan dengan cepat, aman, dan efisien antara satu perangkat dengan perangkat
                lainnya, baik dalam jaringan lokal (LAN) maupun jaringan yang lebih luas seperti internet.
                Selain itu, perangkat jaringan juga membantu dalam mengatur alokasi bandwidth, keamanan
                jaringan, dan pemantauan lalu lintas data agar jaringan tetap stabil dan optimal.</p>
        </div>

    </section>
@endsection

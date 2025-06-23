<x-layout>
    <x-slot:title></x-slot:title>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Media Pembelajaran Jaringan Komputer & Internet</title>
        <style>
            /* Styling untuk container utama */
            .title-container {
                background-color: #ffffff;
                /* Putih */
                padding: 20px;
                border-radius: 10px;
                border: 2px solid #a46e57;
                /* Coklat gelap */
                max-width: 800px;
                margin: 20px auto;
                text-align: center;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                transition: background-color 0.3s ease;
                /* Transisi halus */
            }

            /* Hover effect untuk title-container */
            .title-container:hover {
                background-color: #c49862;
                /* Warna hover */
            }

            /* Styling untuk judul utama */
            .page-title {
                font-size: 3rem;
                font-weight: bold;
                color: #4a2c2a;
                /* Coklat gelap */
                font-family: 'Harlow Solid Italic', cursive;
                margin-bottom: 5px;
            }

            /* Styling untuk subjudul */
            .subtitle {
                font-size: 1.5rem;
                color: #4a2c2a;
                /* Coklat gelap */
                font-family: 'Harlow Solid Italic', cursive;
                margin-bottom: 0;
            }

            /* Styling untuk container menu */
            .menu-container {
                padding: 20px;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-top: 20px;
            }

            /* Styling untuk item menu */
            .menu-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px 30px;
                margin: 10px;
                text-decoration: none;
                color: #4a2c2a;
                background-color: #ffffff;
                border-radius: 25px;
                border: 2px solid #a46e57;
                transition: background-color 0.3s, color 0.3s;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                font-family: 'Comic Sans MS', cursive, sans-serif;
                font-size: 1.5rem;
                font-weight: 400;
                width: 200px;
                text-align: center;
            }

            /* Styling logo di item menu */
            .menu-item img {
                width: 50px;
                height: auto;
                margin-bottom: 10px;
            }

            /* Styling hover untuk item menu */
            .menu-item:hover {
                background-color: #c49862;
                color: #4a2c2a;
                font-weight: bold;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            }

            /* Terapkan gambar ke seluruh halaman */
            body {
                background-image: url('/images/bg/bg2.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            .materi-wrapper {
                min-height: 100vh;
                padding: 40px 20px;
                background-image: url('/images/bg/bg2.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body>
        <div class="materi-wrapper">
            <!-- Container untuk judul utama dan subjudul -->
            <div class="title-container">
                <div class="page-title">Silahkan Pilih Materi</div>
                <div class="subtitle">Jaringan Komputer & Internet</div>
            </div>

            <!-- Container untuk menu -->
            <div class="menu-container">
                @php
                    // Array menu items dengan logo
                    $menu_items = [
                        'perangkat-jaringan' => ['Perangkat Jaringan', 'images/icon_transmisidata.png'],
                        'model-osi' => ['Model OSI Layer', 'images/ikon_osi.png'],
                        'tcpip' => ['TCP/IP', 'images/icon_tcpip.png'],
                        'topologi-jaringan' => ['Topologi Jaringan', 'images/icon_topologi.png'],
                    ];
                @endphp

                @foreach ($menu_items as $key => $item)
                    <a class="menu-item" href="{{ url('materi/halamanmateri') }}">
                        <img src="{{ asset($item[1]) }}" alt="{{ $item[0] }} Logo">
                        {{ $item[0] }}
                    </a>
                @endforeach
            </div>

        </div>
    </body>

    </html>
</x-layout>

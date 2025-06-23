<x-layout>
    <x-slot:title>Selamat Datang!</x-slot:title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Media Pembelajaran Jaringan Komputer & Internet</title>
        <style>
            /* Styling untuk container utama */
            .title-container {
                background-color: #ffffff; /* Putih */
                padding: 20px;
                border-radius: 10px;
                border: 2px solid #a46e57; /* Coklat gelap */
                max-width: 800px;
                margin: 20px auto;
                text-align: center;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            }

            /* Efek hover pada container utama */
            .title-container:hover {
                background-color: #c49862; /* Coklat gelap */
                color: #ffffff; /* Putih untuk teks */
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            }

            /* Styling untuk judul utama */
            .page-title {
                font-size: 3rem;
                font-weight: bold;
                color: #4a2c2a; /* Coklat gelap */
                font-family: 'Harlow Solid Italic', cursive;
                margin-bottom: 5px;
            }

            /* Styling untuk subjudul */
            .subtitle {
                font-size: 1.5rem;
                color: #4a2c2a; /* Coklat gelap */
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
                color: #4a2c2a; /* Coklat gelap */
                background-color: #ffffff; /* Putih krem */
                border-radius: 25px;
                border: 2px solid #a46e57; /* Coklat gelap */
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
                background-color: #c49862; /* Putih */
                color: #4a2c2a; /* Coklat gelap */
                font-weight: bold;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>
    <body>
        <!-- Container untuk judul utama dan subjudul -->
        <div class="title-container">
            <div class="page-title">Media Pembelajaran</div>
            <div class="subtitle">Jaringan Komputer & Internet Kelas XI</div>
        </div>

        <!-- Container untuk menu -->
        <div class="menu-container">
            @php
                // Array menu items dengan logo
                $menu_items = [
                    'kompetensi' => ['KI & KD', 'images/x.png'],
                    'materi' => ['Materi', 'images/materi.png'],
                    'evaluasi' => ['Evaluasi', 'images/Evaluasi.png'],
                    'about' => ['About', 'images/profil.png']
                ];
            @endphp

            @foreach ($menu_items as $key => $item)
                <a class="menu-item" href="{{ url('/' . $key) }}">
                    <img src="{{ asset($item[1]) }}" alt="{{ $item[0] }} Logo">
                    {{ $item[0] }}
                </a>
            @endforeach
        </div>
    </body>
    </html>
</x-layout>

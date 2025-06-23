<x-layout>
    <x-slot:title>Selamat Datang! {{ Auth::user()->nama }} ({{ Auth::user()->role }}) </x-slot:title>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div class="hero-section">
            <h1>Media Pembelajaran</h1>
            <p>Jaringan Komputer & Internet Kelas XI</p>
        </div>

        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #ffffff;
            }

            .title-container {
                text-align: center;
                padding: 40px 20px 20px;
            }

            .title-container h1 {
                font-size: 2.8rem;
                color: #6b3e26;
                margin-bottom: 10px;
                font-family: 'Harlow Solid Italic', cursive;
            }

            .title-container p {
                font-size: 1.5rem;
                color: #8c5c3a;
                font-family: 'Harlow Solid Italic', cursive;
            }

            .grid-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 25px;
                padding: 40px;
                max-width: 1100px;
                margin: auto;
            }

            .menu-item {
                background-color: #ffffff;
                border-radius: 30px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease-in-out;
                text-decoration: none;
                color: inherit;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 15px;
                border: 2px solid #c5995e;
            }

            .menu-item:hover {
                transform: translateY(-8px);
                box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
                border-color: #c49763;
                background-color: #bd8d59;
            }

            .menu-item img {
                width: 100px;
                height: 100px;
                object-fit: contain;
                margin-bottom: 15px;
            }

            .menu-item span {
                font-size: 1.2rem;
                font-weight: bold;
                text-align: center;
                color: #5a3b2d;
            }

            .hero-section {
                background-image: url('images/log.png');
                /* ganti dengan gambar kamu */
                background-size: cover;
                background-position: center;
                color: #A0522D;
                /* agar teks tetap kontras, bisa juga pakai shadow */
                padding: 70px 20px;
                text-align: center;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
                /* opsional, membuat teks lebih terbaca */
            }

            .hero-section h1 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 10px;
                font-family: 'Harlow Solid Italic', cursive;
            }

            .hero-section p {
                font-size: 1.7rem;
                font-family: 'Harlow Solid Italic', cursive;
                color: #A0522D;
            }

            .hero-section {
                background-image: url('images/log.png');
                background-size: cover;
                background-position: center;
                color: #A0522D;
                padding: 70px 20px;
                text-align: center;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
                transition: background-color 0.5s ease-in-out, filter 0.5s ease-in-out;
                border-radius: 20px;
            }

            .hero-section:hover {
                background-image: none;
                background-color: #bd8d59;
            }
        </style>
    </head>

    <body>
        <div class="grid-container">
            @php
                $menu_items = [
                    'kompetensi' => ['KI & KD', 'images/x.png'],
                    'materijaringan' => ['Materi', 'images/materi.png'],
                    'evaluasi' => ['Evaluasi', 'images/Evaluasi.png'],
                    'about' => ['About', 'images/profil.png'],
                ];
            @endphp

            @foreach ($menu_items as $key => $item)
                <a class="menu-item" href="{{ url('/' . $key) }}">
                    <img src="{{ asset($item[1]) }}" alt="{{ $item[0] }}">
                    <span>{{ $item[0] }}</span>
                </a>
            @endforeach
        </div>
    </body>

    </html>
</x-layout>

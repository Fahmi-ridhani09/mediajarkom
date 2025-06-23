<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
        }

        .header {
            background: url('images/log3.png') center/cover no-repeat;
            color: white;
            padding: 200px 20px 60px;
            text-align: center;
            position: relative;
        }

        .header::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            z-index: 0;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .nav-tabs {
            background-color: #D2B48C;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .nav-tabs a {
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-tabs a.active,
        .nav-tabs a:hover {
            background-color: #c2a675;
            border-radius: 5px;
        }

        .content {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 10px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .video-box {
            flex: 1;
            min-width: 100px;
            text-align: left;
        }

        .video-box img {
            width: 100%;
            border-radius: 8px;
        }

        .text-box {
            flex: 1;
            min-width: 600px;
        }

        .text-box h2 {
            color: #8B4513;
            font-size: 24px;
        }

        .text-box p {
            line-height: 1.6;
            color:#8B4513;
            font-family: comic-sans;
        }
    </style>
</head>

<body>

    <div class="header">
    </div>

    <div class="nav-tabs">
        <a href="/about" class="active">About</a>
        <a href="/">Beranda</a>
        <a href="/materijaringan">Materi</a>
        <a href="/kompetensi">Capaian Pembelajaran</a>
    </div>

    <div class="content">
        <div class="video-box">
            <img src="images/ulm.png" alt="Watch Video">
        </div>
        <div class="text-box">
            <h2>Tentang Penulis</h2>
            <p>
                Website ini dikembangkan oleh saya <strong>Muhammad Fahmi Ridhani</strong>, mahasiswa dengan NIM
                <strong>2010131210014</strong>, yang saat ini sedang menempuh pendidikan pada Program Studi Pendidikan
                Komputer.
                <br><br>
                Saya memiliki ketertarikan dalam dunia teknologi informasi, khususnya di bidang jaringan komputer dan
                pengembangan web. Dalam proses pengembangan website ini, saya menggunakan kombinasi teknologi web seperti
                <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, serta framework modern untuk
                menciptakan tampilan yang interaktif dan informatif.
                <br><br>
                Tujuan dari website ini adalah untuk menyediakan media pembelajaran yang menarik dan mudah dipahami,
                sehingga dapat membantu pengguna dalam memahami konsep-konsep jaringan komputer secara lebih efektif.
            </p>
            </p>
        </div>
    </div>

</body>

</html>

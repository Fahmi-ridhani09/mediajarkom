<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan OSI Layer</title>


    <link rel="stylesheet" href="{{ asset('css/latihan_osi.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/konva@8.4.3/konva.min.js"></script>
    <script src="{{ asset('js/latihan_osi.js') }}" defer></script>
</head>

<body>
    <div class="info">
        <button class="btn" onclick="resetGame()">Reset</button>
        <button class="btn" onclick="toggleMusic()" id="musicBtn">
            <i class="fas fa-music"></i>
        </button>
        <button class="btn" onclick="showInstructions()">Petunjuk</button>
    </div>
    <div id="timer">02:00</div>

    <div id="popup">
        <h3>Petunjuk Kuis</h3>
        <p>
            Kamu akan mencocokkan protokol jaringan dengan layer OSI.<br>
            <strong>Langkah-langkah:</strong><br>
            <br>
            1️⃣ Klik salah satu <strong>kotak protokol</strong> di sebelah kanan layar.<br>
            2️⃣ Klik <strong>layer OSI</strong> yang sesuai di sebelah kiri.<br>
            3️⃣ Ulangi hingga semua protokol dicocokkan.<br><br>
            Setelah selesai, klik tombol <strong>"Cek Jawaban"</strong> untuk melihat hasilmu!
        </p>
        <img src="{{ asset('images/materi_osi/kuis.png') }}" width="100%" alt="Gambar OSI">
        <div class="popup-buttons">
            <button class="btn" onclick="closePopup()">Mulai</button>
            <button class="btn" onclick="showTutorial()">Tutorial</button>
        </div>
    </div>

    <div id="tutorialPopup">
        <h3 style="text-align: center;">Cara Bermain</h3>
        <video id="tutorialVideo" width="100%" controls loop>
            <source src="video/tutorial.mp4" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
        <div class="popup-buttons">
            <button class="btn" onclick="closeTutorial()">Tutup</button>
        </div>
    </div>


    <div id="resultPopup">
        <h3>Hasil Permainan</h3>
        <p id="scoreSummary"></p>
        <img id="resultImage" src="" alt="Hasil">
        <div class="popup-buttons">
            <button onclick="location.reload(true)">Coba Lagi</button>
            <button onclick="previous()">Kembali</button>
            <button onclick="next()">Selanjutnya</button>
        </div>
    </div>

    <div class="center-buttons">
        <button class="btn" onclick="previous()">Kembali</button>
        <button class="btn" onclick="checkAnswers()">Cek Jawaban</button>
    </div>

    <div id="container"></div>

    <audio id="correctSound" src="https://www.soundjay.com/button/sounds/button-3.mp3" preload="auto"></audio>
    <audio id="wrongSound" src="https://www.soundjay.com/button/sounds/button-10.mp3" preload="auto"></audio>
    <audio id="popupSound" src="https://www.soundjay.com/misc/sounds/bell-ringing-05.mp3" preload="auto"></audio>
    <audio id="bgMusic" src="https://www.bensound.com/bensound-music/bensound-sunny.mp3" preload="auto" loop></audio>


</body>

</html>

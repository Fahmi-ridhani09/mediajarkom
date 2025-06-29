<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Kuis Topologi Jaringan</title>
    <link rel="stylesheet" href="css/stylekuistopologi.css" />
    <script src="{{ asset('js/kuistopologi.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/konva@9.2.0/konva.min.js"></script>
</head>

<body>

    <div id="main-content">
        <div id="left-panel">
            <div class="instruction-box">
                <p><strong>Instruksi:</strong></p>
                <ol>
                    <li>Baca soal dengan saksama.</li>
                    <li>Pilih jenis topologi jaringan yang paling sesuai dari daftar.</li>
                    <li>Seret perangkat ke area kanan untuk membentuk skema jaringan sesuai soal.</li>
                </ol>
            </div>

            <div class="skema-box">
                <p><strong>Susun Skema Jaringan:</strong></p>
                <p>Seret ikon perangkat ke area kanan untuk membuat skema jaringan.</p>
                <div id="tools">
                    <div class="tool-item">
                        <img src="images/computer.png" draggable="true" data-type="PC" onclick="addDevice('PC')" />
                        <span>PC</span>
                    </div>
                    <div class="tool-item">
                        <img src="images/router.png" draggable="true" data-type="Router"
                            onclick="addDevice('Router')" />
                        <span>Router</span>
                    </div>
                </div>
            </div>

            <div class="question-box">
                <label for="topologyAnswer">Pilih Jawaban:</label>
                <select id="topologyAnswer">
                    <option value="">-- Pilih Jawaban --</option>
                    <option value="bus">Topologi Bus</option>
                    <option value="star">Topologi Star</option>
                    <option value="ring">Topologi Ring</option>
                    <option value="tree">Topologi Tree</option>
                </select>

                <div class="button-group">
                    <button onclick="checkAnswer()">Periksa Jawaban</button>
                    <button onclick="resetTopology()">Reset</button>
                </div>
            </div>

            <p id="feedback" class="feedback-message"></p>

            <div class="navigation">
                <button onclick="location.href='topologi'">⬅ ke Materi</button>
                <button onclick="location.href='latihantopologi'">Latihan ➡</button>
            </div>

            <p><strong>Skor Anda:</strong> <span id="score">0</span></p>
        </div>

        <div id="right-panel">
            <div class="soal-box">
                <h3>📘 Soal</h3>
                <p>Kantor memiliki <strong>4 komputer</strong> dan <strong>1 buah router</strong>. Semua perangkat harus
                    saling terhubung</strong>.</p>
                <p><strong>Pertanyaan:</strong> Manakah jenis topologi yang sesuai dan cocok digunakan?</p>
            </div>

            <div id="container" class="canvas-area">
                <p>Area Skema Jaringan<br><small>Perangkat akan muncul di sini</small></p>
            </div>
        </div>
    </div>

    <!-- Modal Skor -->
    <!-- Modal Skor -->
    <div id="resultModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">Tutup</span>
            <span id="modalMessage"></span>
            <p><strong>Skor Anda:</strong> <span id="modalScore">0</span></p>
            <div class="modal-buttons">
                <button onclick="closeModal()">⬅ Kembali</button>
                <button onclick="location.href='latihantopologi'">Selanjutnya ➡</button>
            </div>
        </div>
    </div>



</body>

</html>

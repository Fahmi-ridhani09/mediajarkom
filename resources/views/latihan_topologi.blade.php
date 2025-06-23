<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Jaringan Topologi Bintang</title>
    <script src="https://cdn.jsdelivr.net/npm/konva@8.4.1/konva.min.js"></script>
    <style>
    body {
        display: flex;
        flex-direction: row;
        margin: 0;
        padding: 0;
        height: 100vh;
        background-color: #ffffff; /* Putih */
    }

    #main-container {
        display: flex;
        flex-direction: column;
        flex: 3;
        padding: 20px;
        background-color: #ffffff; /* Putih */
    }

    #container {
        width: 100%;
        height: 80%;
        border: 1px solid #ffe7de;
        margin-bottom: 20px;
    }

    #toolbar {
        display: flex;
        align-items: center;
        background-color: #f3e0d7; /* Coklat terang */
        padding: 10px;
        border-radius: 8px;
    }

    #toolbar button {
        display: flex;
        align-items: center;
        padding: 8px 12px;
        margin-right: 10px;
        background-color: #dabe9f; /* Coklat terang */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    #toolbar button img.button-icon {
        width: 20px;
        height: 20px;
        margin-right: 8px;
    }

    #toolbar button:hover {
        background-color: #f3e0d7; /* Coklat terang hover */
        color: #a37a45;
    }

    #toolbar select {
        margin-left: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    #log-container {
        flex: 1;
        padding: 20px;
        background-color: #ffffff; /* Putih */
        border-left: 1px solid #c8a99e;
        height: 100vh;
        box-sizing: border-box;
        overflow-y: auto;
        font-family: monospace;
        white-space: pre;
    }

    #log {
        width: 100%;
        height: calc(100% - 40px);
        background-color: #ffffff; /* Putih */
        padding: 10px;
        border: 1px solid #c8a99e;
        overflow-y: scroll;
    }

    #configModal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    #configModalContent {
        background-color: #ffffff; /* Putih */
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #c8a99e;
        width: 300px;
        border-radius: 8px;
    }

    #configModalContent input {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        border: 1px solid #c8a99e;
        border-radius: 5px;
    }

    #configModalContent button {
        padding: 10px 15px;
        background-color: #dabe9f; /* Coklat terang */
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    #configModalContent button.close {
        background-color: #ffffff;
        color: #a37a45;
    }

    h2 {
        color: #a37a45;
        text-align: center;
    }

    p {
        color: #a37a45;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }

    /* Popup Success */
    #popupSuccess {
        display: none;
        position: fixed;
        z-index: 1001;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 20px;
        background-color: #ffffff; /* Putih */
        border: 2px solid #c8a99e;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        font-family: 'Poppins', sans-serif;
    }

    #popupSuccess h2 {
        color: #a37a45;
        font-size: 24px;
        margin: 10px 0;
    }

    #popupSuccess button {
        padding: 10px 20px;
        background-color: #dabe9f; /* Coklat terang */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 15px;
    }

    #popupSuccess button:hover {
        background-color: #f3e0d7;
        color: #a37a45;
    }

    /* Popup Error */
    #popupError {
        display: none;
        position: fixed;
        z-index: 1001;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 20px;
        background-color: #fce4e4;
        border: 2px solid #f5c2c2;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        font-family: 'Poppins', sans-serif;
    }

    #popupError h2 {
        color: #d9534f;
        font-size: 24px;
        margin: 10px 0;
    }

    #popupError button {
        padding: 10px 20px;
        background-color: #d9534f;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 15px;
    }

    #popupError button:hover {
        background-color: #c9302c;
    }

    #nextButton {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #dabe9f; /* Coklat terang */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    #nextButton:hover {
        background-color: #f3e0d7;
        color: #a37a45;
    }
</style>

</head>
<body>

<div id="main-container">
    <h2>Soal Topologi Jaringan</h2>
    <p>Bentuklah sebuah Topologi Bintang, Kemudian atur IP Address antar perangkat Supaya bisa terkoneksi dan terhubung dengan baik, jaringan ini terdiri dari router yang dihubungkan ke sebuah Komputer, Gunakan rentang IP 192.168.1.0/24.Tentukan Pengaturan IP untuk masing masing komputer dan pastikan semua perangkat dapat saling terhubung!</p>
    <div id="toolbar">
        <button onclick="addRouter()">
            <img src="images/computer.png" alt="Router" class="button-icon"> Tambah Router
        </button>
        <button onclick="addComputer()">
            <img src="images/computer.png" alt="Computer" class="button-icon"> Tambah Komputer
        </button>
        <button onclick="connectDevices()">
            <img src="images/computer.png" alt="Connect" class="button-icon"> Koneksi Perangkat
        </button>
        </button>
        <button onclick="reset()">
            <img src="images/computer.png" alt="Reset" class="button-icon"> Reset
        </button>
        <button onclick="checkConnectionStatus()">
            <img src="images/computer.png" alt="Internet" class="button-icon"> Cek Jawaban
        </button>        
        <label for="connectionType">Tipe Koneksi:</label>
        <select id="connectionType">
            <option value="router_computer">Router - Komputer</option>
        </select>
    </div>
    

    <div id="container"></div>
</div>

<div id="log-container">
    <h3>Log Paket:</h3>
    <div id="log">Log Paket:</div>
</div>

<!-- Modal untuk konfigurasi perangkat -->
<div id="configModal">
    <div id="configModalContent">
        <h3>Konfigurasi Perangkat</h3>
        <form id="configForm">
            <label for="ipAddress">IP Address:</label>
            <input type="text" id="ipAddress" name="ipAddress" placeholder="192.168.1.1">

            <label for="subnetMask">Subnet Mask:</label>
            <input type="text" id="subnetMask" name="subnetMask" placeholder="255.255.255.0">

            <button type="button" onclick="saveConfig()">Simpan</button>
            <button type="button" class="close" onclick="closeConfigModal()">Batal</button>
        </form>
    </div>
</div>

<div id="popupSuccess">
    <h2>Berhasil</h2>
    <p>Koneksi perangkat berhasil dibuat!</p>
    <button onclick="closePopup()">Tutup</button>
</div>

<div id="popupError">
    <h2>Salah</h2>
    <p>Ada koneksi yang belum dibuat dengan benar.</p>
    <button onclick="closePopup()">Tutup</button>
</div>
<button id="nextButton" onclick="goToNextPage()">Selanjutnya</button>



<script>
    var stage = new Konva.Stage({
        container: 'container',
        width: document.getElementById('container').offsetWidth,
        height: document.getElementById('container').offsetHeight
    });

    var layer = new Konva.Layer();
    stage.add(layer);

    var networkGroup = new Konva.Group();
    layer.add(networkGroup);

    var computers = [];
    var router = null;
    var connections = [];
    var packetInTransit = false;
    var selectedNode = null;

    // Fungsi untuk menambahkan log
    function addLog(message) {
        var logDiv = document.getElementById('log');
        logDiv.innerText += message + "\n";
        logDiv.scrollTop = logDiv.scrollHeight;
    }

    // Fungsi untuk membuka modal konfigurasi
    function openConfigModal(node) {
        selectedNode = node;
        document.getElementById('configModal').style.display = 'block';
        document.getElementById('ipAddress').value = node.attrs.ip || '';
        document.getElementById('subnetMask').value = node.attrs.subnet || '';
    }

    // Fungsi untuk menutup modal konfigurasi
    function closeConfigModal() {
        document.getElementById('configModal').style.display = 'none';
        selectedNode = null;
    }

    // Fungsi untuk menyimpan konfigurasi
    function saveConfig() {
        if (!selectedNode) return;

        var ip = document.getElementById('ipAddress').value;
        var subnet = document.getElementById('subnetMask').value;

        selectedNode.attrs.ip = ip;
        selectedNode.attrs.subnet = subnet;

        addLog("Konfigurasi disimpan untuk " + selectedNode.attrs.type +
        " (IP: " + ip + ", Subnet: " + subnet + ")");


        closeConfigModal();
    }

    // Fungsi untuk menambahkan router
    function addRouter() {
        if (router) {
            addLog("Router sudah ada. Hapus router sebelum menambahkannya lagi.");
            return;
        }

        var routerImg = new Image();
        routerImg.src = 'images/router.png';
        routerImg.onload = function () {
            router = new Konva.Image({
                x: stage.width() / 2 - 25,
                y: stage.height() / 2 - 25,
                image: routerImg,
                width: 50,
                height: 50,
                draggable: true,
                name: 'router',
                type: 'router'
            });
            networkGroup.add(router);
            layer.draw();

            // Buka modal konfigurasi saat router di double-click
            router.on('dblclick', function () {
                openConfigModal(router);
            });

            // Update koneksi saat router dipindahkan
            router.on('dragmove', function() {
                updateConnections();
            });
        };
    }

    // Fungsi untuk menambahkan komputer
    function addComputer() {
        if (!router) {
            addLog("Tambahkan router terlebih dahulu sebelum menambahkan komputer.");
            return;
        }

        var computerImg = new Image();
        computerImg.src = 'images/computer.png';
        computerImg.onload = function () {
            var computer = new Konva.Image({
                x: Math.random() * stage.width(),
                y: Math.random() * stage.height(),
                image: computerImg,
                width: 40,
                height: 40,
                draggable: true,
                name: 'computer',
                type: 'computer'
            });
            computers.push(computer);
            networkGroup.add(computer);
            layer.draw();

            // Buka modal konfigurasi saat komputer di double-click
            computer.on('dblclick', function () {
                openConfigModal(computer);
            });

            // Update koneksi saat komputer dipindahkan
            computer.on('dragmove', function() {
                updateConnections();
            });
        };
    }

            // Fungsi untuk menghubungkan perangkat
            // Fungsi connectDevices() setelah penghapusan fitur komputer antar komputer
        function connectDevices() {
            if (!router || computers.length === 0) {
                addLog("Tambahkan router dan setidaknya satu komputer untuk membuat koneksi.");
                return;
            }

            // Hapus koneksi yang sudah ada
            connections.forEach(function(line) {
                line.destroy();
            });
            connections = [];

            // Buat koneksi antara router dan komputer
            for (var i = 0; i < computers.length; i++) {
                if (checkConnection(router.attrs.ip, computers[i].attrs.ip, computers[i].attrs.subnet)) {
                    createConnection(router, computers[i], 'green');
                } else {
                    createConnection(router, computers[i], 'red');
                }
            }
            addLog("Koneksi dibuat antara router dan semua komputer.");

            layer.draw();
        }


    // Fungsi untuk mengecek apakah dua perangkat bisa terhubung berdasarkan IP dan subnet mask
    function checkConnection(ip1, ip2, subnetMask) {
        if (!ip1 || !ip2) return false;

        var ipParts1 = ip1.split('.').map(Number);
        var ipParts2 = ip2.split('.').map(Number);
        var maskParts = subnetMask.split('.').map(Number);

        for (var i = 0; i < 4; i++) {
            if ((ipParts1[i] & maskParts[i]) !== (ipParts2[i] & maskParts[i])) {
                return false;
            }
        }
        return true;
    }

    // Fungsi untuk membuat koneksi (menggambar kabel)
    function createConnection(device1, device2, color) {
        var line = new Konva.Line({
            points: [device1.x() + device1.width() / 2, device1.y() + device1.height() / 2,
                     device2.x() + device2.width() / 2, device2.y() + device2.height() / 2],
            stroke: color,
            strokeWidth: 2,
            lineCap: 'round',
            lineJoin: 'round'
        });
        networkGroup.add(line);
        connections.push(line);
    }

    // Fungsi untuk memperbarui posisi koneksi saat perangkat dipindahkan
    function updateConnections() {
        connections.forEach(function(line) {
            line.destroy(); // Hapus koneksi lama
        });
        connections = []; // Kosongkan daftar koneksi
        layer.draw(); // Gambarkan ulang layer
    }

    // Fungsi untuk reset simulasi
    function reset() {
        networkGroup.destroy();
        networkGroup = new Konva.Group();
        layer.add(networkGroup);
        computers = [];
        router = null;
        connections = [];
        packetInTransit = false;
        addLog("Simulasi direset.");
        layer.draw();
    }

                    // Fungsi untuk memeriksa status kabel
                    function checkConnectionStatus() {
            // Periksa apakah router dan setidaknya satu komputer telah ditambahkan
            if (!router || computers.length === 0) {
                // Jika belum ada perangkat yang ditambahkan, tampilkan popup error
                addLog("Belum ada perangkat yang ditambahkan.");
                document.getElementById('popupError').style.display = 'block';
                return;
            }

            // Periksa apakah ada koneksi yang gagal (kabel merah)
            var hasError = connections.some(function(line) {
                return line.stroke() === 'red'; // Kabel merah menandakan koneksi gagal
            });

            if (hasError) {
                // Jika ada kabel merah, tampilkan popup error
                addLog("Terdapat koneksi gagal. Silakan periksa IP dan subnet.");
                document.getElementById('popupError').style.display = 'block';
            } else {
                // Jika semua koneksi berhasil (kabel hijau), tampilkan popup success
                addLog("Semua perangkat berhasil terhubung.");
                document.getElementById('popupSuccess').style.display = 'block';
            }
        }


        // Fungsi untuk menutup popup
        function closePopup() {
            document.getElementById('popupSuccess').style.display = 'none';
        }

        // Fungsi untuk memeriksa status koneksi
            function checkConnectionStatus() {
            // Periksa apakah router dan komputer telah dikonfigurasi
            if (!router || computers.length === 0) {
                document.getElementById('popupError').style.display = 'block';
                return;
            }

            // Pastikan semua koneksi berwarna hijau
            var allGreen = connections.every(function(line) {
                return line.stroke() === 'green'; // Semua kabel harus hijau
            });

            if (allGreen) {
                document.getElementById('popupSuccess').style.display = 'block';
            } else {
                document.getElementById('popupError').style.display = 'block';
            }
        }



        // Fungsi untuk menutup popup (digunakan bersama popup success & error)
        function closePopup() {
            document.getElementById('popupSuccess').style.display = 'none';
            document.getElementById('popupError').style.display = 'none';
        }

                function goToNextPage() {
            window.location.href = '/materi'; // Arahkan ke rute Laravel
        }

                function validateIP(ip) {
            var ipPattern = /^(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[0-1]?[0-9][0-9]?)$/;
            return ipPattern.test(ip);
        }

        function validateSubnet(subnet) {
            var subnetPattern = /^(255|254|252|248|240|224|192|128|0)\.0\.0\.0$|^(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)\.0\.0$|^(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)\.0$|^(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)\.(255|254|252|248|240|224|192|128|0)$/;
            return subnetPattern.test(subnet);
        }





</script>

</body>
</html>

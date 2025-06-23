<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Kuis Topologi</title>
    <link rel="stylesheet" href="stylekuistopologi.css" />
    <script src="https://cdn.jsdelivr.net/npm/konva@9.2.0/konva.min.js"></script>
</head>

<body>

    <div id="main-content">
        <div id="left-panel">
            <p>Sebuah kantor memiliki 5 komputer. Mereka ingin data mengalir secara teratur dari
                satu komputer ke komputer lain tanpa tabrakan data, tanpa menggunakan router, dan masing-masing komputer
                terhubung ke dua komputer lainnya.</p>
            <p>Topologi jaringan apa yang sesuai?</p>
            <select id="topologyAnswer">
                <option value="">-- Pilih Jawaban --</option>
                <option value="bus">Topologi Bus</option>
                <option value="star">Topologi Star</option>
                <option value="ring">Topologi Ring</option>
                <option value="tree">Topologi Tree</option>
            </select>

            <div>
                <button onclick="checkAnswer()">Periksa Jawaban</button>
                <button onclick="resetTopology()">Reset</button>
            </div>
            <p>Buatlah Skema Topologi Jaringan berdasarkan kasus tersebut.</p>
            <div id="tools">
                <img src="images/computer.png" alt="Tambah PC" title="Tambah PC" onclick="addDevice('computer')">
                <img src="images/laptop.png" alt="Tambah Laptop" title="Tambah Laptop" onclick="addDevice('laptop')">
                <img src="images/router.png" alt="Tambah Router" title="Tambah Router" onclick="addDevice('Router')">
            </div>

            <p id="feedback"></p>
            <div id="skor">
                <p><strong>Skor Anda:</strong> <span id="score">0</span></p>
            </div>
            <button onclick="location.href='topologi'">Kembali</button>
            <button onclick="location.href='latihantopologi'">Selanjutnya</button>

        </div>

        <div id="right-panel">
            <div id="container"></div>
        </div>
    </div>

    <script>
        const width = 800;
        const height = 600;
        const stage = new Konva.Stage({
            container: 'container',
            width,
            height
        });
        const layer = new Konva.Layer();
        stage.add(layer);

        let devices = [];
        let connections = [];
        let startDevice = null;
        let drawingLine = null;
        let score = 0;

        function addDevice(type) {
            console.log(`Menambahkan perangkat: ${type}`); // Debugging log
            const group = new Konva.Group({
                x: 150 + Math.random() * 500,
                y: 100 + Math.random() * 400,
                draggable: true,
                name: type
            });

            const imageObj = new Image();
            imageObj.onload = function() {
                console.log(`${type} gambar dimuat!`); // Debugging log
                const img = new Konva.Image({
                    image: imageObj,
                    width: 50,
                    height: 50
                });

                group.add(img);
                layer.add(group);
                layer.draw();
                devices.push(group);

                group.on('mousedown touchstart', () => {
                    console.log(`${type} diklik!`); // Debugging log
                    if (!startDevice) {
                        startDevice = group;
                        img.stroke('yellow');
                        layer.draw();

                        const startPos = startDevice.getAbsolutePosition();
                        drawingLine = new Konva.Line({
                            points: [startPos.x, startPos.y, startPos.x, startPos.y],
                            stroke: 'black',
                            strokeWidth: 2
                        });
                        layer.add(drawingLine);
                        layer.draw();

                        stage.on('mousemove.temp', () => {
                            const pos = stage.getPointerPosition();
                            if (drawingLine && pos) {
                                const start = startDevice.getAbsolutePosition();
                                drawingLine.points([start.x, start.y, pos.x, pos.y]);
                                layer.batchDraw();
                            }
                        });

                    } else {
                        if (startDevice === group) {
                            img.stroke('#333');
                            startDevice = null;
                            if (drawingLine) {
                                drawingLine.destroy();
                                drawingLine = null;
                                stage.off('mousemove.temp');
                            }
                            layer.draw();
                            return;
                        }

                        const startPos = startDevice.getAbsolutePosition();
                        const endPos = group.getAbsolutePosition();
                        drawingLine.points([startPos.x, startPos.y, endPos.x, endPos.y]);

                        connections.push({
                            from: startDevice,
                            to: group,
                            line: drawingLine
                        });

                        img.stroke('#333');
                        startDevice = null;
                        drawingLine = null;
                        stage.off('mousemove.temp');
                        layer.draw();
                    }
                });

                group.on('dragmove', () => {
                    connections.forEach(conn => {
                        if (conn.from === group || conn.to === group) {
                            const start = conn.from.getAbsolutePosition();
                            const end = conn.to.getAbsolutePosition();
                            conn.line.points([start.x, start.y, end.x, end.y]);
                        }
                    });
                    layer.batchDraw();
                });
            };

            imageObj.src = `images/${type.toLowerCase()}.png`; // Pastikan gambar ada di folder yang benar
        }

        function checkAnswer() {
            let localScore = 0;
            const feedback = document.getElementById('feedback');
            const scoreDisplay = document.getElementById('score');

            const selected = document.getElementById('topologyAnswer').value;
            const isDropdownCorrect = selected === 'ring';
            if (isDropdownCorrect) localScore += 50;

            // Cek apakah ada perangkat bukan "computer"
            const hasInvalidDevice = devices.some(d => d.attrs.name !== 'computer');

            if (hasInvalidDevice) {
                feedback.innerHTML =
                    '❌ Topologi mengandung perangkat selain komputer (misalnya laptop atau router). Gunakan hanya komputer!';
                score = localScore;
                scoreDisplay.innerText = score;
                return;
            }

            // Cek jumlah perangkat harus 5
            if (devices.length !== 5) {
                feedback.innerHTML = '❌ Jumlah komputer harus tepat 5 untuk topologi ring.';
                score = localScore;
                scoreDisplay.innerText = score;
                return;
            }

            // Cek koneksi: setiap komputer harus terhubung ke 2 komputer lain
            const linkCount = new Map();

            connections.forEach(c => {
                const fromIndex = devices.indexOf(c.from);
                const toIndex = devices.indexOf(c.to);

                if (fromIndex === -1 || toIndex === -1) return;

                if (!linkCount.has(fromIndex)) linkCount.set(fromIndex, new Set());
                if (!linkCount.has(toIndex)) linkCount.set(toIndex, new Set());

                linkCount.get(fromIndex).add(toIndex);
                linkCount.get(toIndex).add(fromIndex);
            });

            const allHaveTwoLinks = devices.every((_, idx) =>
                linkCount.has(idx) && linkCount.get(idx).size === 2
            );

            if (allHaveTwoLinks) {
                feedback.innerHTML = '✅ Semua komputer terhubung membentuk topologi ring yang benar!';
                localScore += 50;
            } else {
                feedback.innerHTML =
                    '❌ Koneksi belum membentuk ring. Setiap komputer harus punya tepat 2 koneksi dan membentuk lingkaran.';
            }

            score = localScore;
            scoreDisplay.innerText = score;
        }



        function resetTopology() {
            devices.forEach(d => d.destroy());
            connections.forEach(c => c.line.destroy());
            devices = [];
            connections = [];
            startDevice = null;
            if (drawingLine) {
                drawingLine.destroy();
                drawingLine = null;
                stage.off('mousemove.temp');
            }
            layer.draw();
            document.getElementById('feedback').innerHTML = '';
            score = 0;
            document.getElementById('score').innerText = '0';
            document.getElementById('topologyAnswer').value = '';
        }
    </script>
</body>

</html>

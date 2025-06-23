<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Kuis Topologi Jaringan</title>
    <link rel="stylesheet" href="stylekuistopologi.css" />
    <script src="https://cdn.jsdelivr.net/npm/konva@9.2.0/konva.min.js"></script>
</head>

<body>

    <div id="main-content">
        <div id="left-panel">
            <p>Kantor memiliki 4 komputer dan 1 buah router. Semua perangkat harus saling terhubung dengan biaya
                minimal.</p>
            <p>Manakah jenis topologi yang sesuai dan cocok digunakan?</p>
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

            <p>Buatlah Skema Jaringan Sederhana dari Pertanyaan tersebut!</p>


            <div id="tools">
                <img src="images/computer.png" alt="Tambah PC" title="Tambah PC" onclick="addDevice('PC')">
                <img src="images/router.png" alt="Tambah Router" title="Tambah Router" onclick="addDevice('Router')">
            </div>
            <p id="feedback"></p>
            <button onclick="location.href='topologi'">Kembali</button>
            <button onclick="location.href='latihantopologi'">Selanjutnya</button>
            <p><strong>Skor Anda:</strong> <span id="score">0</span></p>
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

        // Tambah background
        const background = new Image();
        background.onload = function() {
            const bgImage = new Konva.Image({
                image: background,
                x: 0,
                y: 0,
                width: width,
                height: height,
                listening: false
            });
            layer.add(bgImage);
            bgImage.moveToBottom();
            layer.draw();
        };
        background.src = ''; // Ganti sesuai path gambar background Anda

        let devices = [];
        let connections = [];
        let startDevice = null;
        let drawingLine = null;
        let score = 0;

        const deviceLimits = {
            PC: 4,
            Router: 1
        };

        function addDevice(type) {
            const count = devices.filter(d => d.name() === type).length;
            if (count >= deviceLimits[type]) {
                alert(`Jumlah maksimum ${type} sudah ditambahkan.`);
                return;
            }

            const group = new Konva.Group({
                x: 100 + Math.random() * 600,
                y: 100 + Math.random() * 400,
                draggable: true,
                name: type
            });

            const imageUrl = type === 'Router' ? 'images/router.png' : 'images/computer.png';
            const imageObj = new Image();

            imageObj.onload = function() {
                const img = new Konva.Image({
                    image: imageObj,
                    width: 50,
                    height: 50
                });

                group.add(img);
                layer.add(group);
                layer.draw();
                devices.push(group);

                group.on('mouseenter', () => stage.container().style.cursor = 'pointer');
                group.on('mouseleave', () => stage.container().style.cursor = 'default');

                group.on('mousedown touchstart', () => {
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
            imageObj.src = imageUrl;
        }

        function checkAnswer() {
            let localScore = 0;
            const feedback = document.getElementById('feedback');
            const scoreDisplay = document.getElementById('score');

            const selected = document.getElementById('topologyAnswer').value;
            const isDropdownCorrect = selected === 'star';
            if (isDropdownCorrect) localScore += 50;

            const router = devices.find(d => d.name() === 'Router');
            if (!router) {
                feedback.innerHTML = '❌ Router belum ditambahkan!';
                scoreDisplay.innerText = localScore;
                return;
            }

            const connectedToRouter = connections.filter(c => c.from === router || c.to === router).length;
            const totalPC = devices.filter(d => d.name() === 'PC').length;

            const isOnlyConnectedToRouter = connections.every(c =>
                c.from === router || c.to === router
            );

            if (connectedToRouter === totalPC && connections.length === totalPC && isOnlyConnectedToRouter) {
                feedback.innerHTML = '✅ Topologi Bintang terbentuk dengan benar!';
                localScore += 50;
            } else {
                feedback.innerHTML =
                    '❌ Topologi belum benar. Pastikan semua PC terhubung ke router dan tidak ada koneksi antar PC.';
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

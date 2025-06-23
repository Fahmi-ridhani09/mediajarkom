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
            <p>Sebuah kantor kecil memiliki 4 komputer, 1 router, 1 laptop, dan 1 server. Semua
                perangkat harus terhubung menggunakan satu kabel utama secara hemat biaya.</p>
            <p>Manakah jenis topologi yang cocok digunakan?</p>
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

            <br><br>
            <p>Buatlah Skema Jaringan Topologi berdasarkan kasus di atas.</p>
            <div id="tools">
                <img src="images/computer.png" alt="PC" title="Tambah PC" onclick="addDevice('PC')">
                <img src="images/router.png" alt="Router" title="Tambah Router" onclick="addDevice('Router')">
                <img src="images/laptop.png" alt="Laptop" title="Tambah Laptop" onclick="addDevice('Laptop')">
                <img src="images/server.png" alt="Server" title="Tambah Server" onclick="addDevice('Server')">
            </div>
            <p id="feedback"></p>
            <p><strong>Skor Anda:</strong> <span id="score">-</span></p>
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

        const kabelUtama = new Konva.Line({
            points: [50, height / 2, width - 50, height / 2],
            stroke: 'black',
            strokeWidth: 10,
            name: 'kabelUtama',
            listening: true
        });
        layer.add(kabelUtama);

        let devices = [];
        let connections = [];
        let startDevice = null;
        let drawingLine = null;
        let score = 0;

        const deviceLimits = {
            PC: 4,
            Router: 1,
            Laptop: 1,
            Server: 1
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

            const imageMap = {
                PC: 'images/computer.png',
                Router: 'images/router.png',
                Laptop: 'images/laptop.png',
                Server: 'images/server.png'
            };
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

                group.on('mousedown touchstart', (e) => {
                    e.cancelBubble = true;
                    if (!startDevice) {
                        startDevice = group;
                        img.stroke('yellow');
                        layer.draw();
                        const pos = startDevice.getAbsolutePosition();
                        drawingLine = new Konva.Line({
                            points: [pos.x, pos.y, pos.x, pos.y],
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
                            img.stroke(null);
                            startDevice = null;
                            if (drawingLine) drawingLine.destroy();
                            drawingLine = null;
                            stage.off('mousemove.temp');
                            layer.draw();
                            return;
                        }

                        const start = startDevice.getAbsolutePosition();
                        const end = group.getAbsolutePosition();
                        drawingLine.points([start.x, start.y, end.x, end.y]);
                        connections.push({
                            from: startDevice,
                            to: group,
                            line: drawingLine
                        });

                        img.stroke(null);
                        startDevice = null;
                        drawingLine = null;
                        stage.off('mousemove.temp');
                        layer.draw();
                    }
                });

                group.on('dragmove', () => {
                    connections.forEach(conn => {
                        const isFromGroup = conn.from === group;
                        const isToGroup = conn.to === group;

                        if (isFromGroup || isToGroup) {
                            const start = isFromGroup ?
                                conn.from.getAbsolutePosition() :
                                (conn.from === 'kabelUtama' ? conn.startPos : conn.from
                                    .getAbsolutePosition());

                            const end = isToGroup ?
                                conn.to.getAbsolutePosition() :
                                (conn.to === 'kabelUtama' ? conn.endPos : conn.to
                                    .getAbsolutePosition());

                            conn.line.points([start.x, start.y, end.x, end.y]);
                        }
                    });
                    layer.batchDraw();
                });

            };
            imageObj.src = imageMap[type];
        }

        kabelUtama.on('mousedown touchstart', (e) => {
            if (startDevice) {
                const pointerPos = stage.getPointerPosition();
                const start = startDevice.getAbsolutePosition();
                const end = {
                    x: pointerPos.x,
                    y: pointerPos.y
                };

                drawingLine.points([start.x, start.y, end.x, end.y]);

                // Simpan referensi koneksi dengan titik aktual
                connections.push({
                    from: startDevice,
                    to: 'kabelUtama',
                    line: drawingLine,
                    endPos: end,
                    startPos: startDevice.getAbsolutePosition()
                });


                startDevice.findOne('Image').stroke(null); // hapus border kuning
                startDevice = null;
                drawingLine = null;
                stage.off('mousemove.temp');
                layer.draw();
            }
        });


        function checkAnswer() {
            const selected = document.getElementById('topologyAnswer').value;
            const scoreDisplay = document.getElementById('score');
            const feedback = document.getElementById('feedback');
            let localScore = 0;

            if (devices.length === 0 || connections.length === 0) {
                feedback.innerHTML = '❌ Belum ada perangkat yang terhubung.';
                scoreDisplay.innerText = '-';
                return;
            }

            if (selected === 'bus') localScore += 50;
            const connectedToBus = connections.every(c => c.to === 'kabelUtama');

            if (connectedToBus && connections.length === devices.length) {
                feedback.innerHTML = '✅ Topologi Bus berhasil dibuat!';
                localScore += 50;
            } else {
                feedback.innerHTML = '❌ Topologi belum benar. Pastikan semua perangkat terhubung langsung ke kabel utama.';
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
            document.getElementById('score').innerText = '-';
            document.getElementById('topologyAnswer').value = '';
        }
    </script>
</body>

</html>

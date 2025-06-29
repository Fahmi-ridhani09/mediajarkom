
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
background.onload = function () {
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

function addDevice(type, position = null) {
    const count = devices.filter(d => d.name() === type).length;
    if (count >= deviceLimits[type]) {
        alert(`Jumlah maksimum ${type} sudah ditambahkan.`);
        return;
    }

    const group = new Konva.Group({
        x: position ? position.x : 100 + Math.random() * 600,
        y: position ? position.y : 100 + Math.random() * 400,
        draggable: true,
        name: type
    });

    const imageUrl = type === 'Router' ? 'images/router.png' : 'images/computer.png';
    const imageObj = new Image();

    imageObj.onload = function () {
        const img = new Konva.Image({
            image: imageObj,
            width: 50,
            height: 50
        });

        group.add(img);
        layer.add(group);
        layer.draw();
        devices.push(group);

        // event handlers tetap
        group.on('mouseenter', () => stage.container().style.cursor = 'pointer');
        group.on('mouseleave', () => stage.container().style.cursor = 'default');

        // koneksi garis antar perangkat tetap
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


// Drag support
document.querySelectorAll('#tools img').forEach(img => {
    img.addEventListener('dragstart', e => {
        e.dataTransfer.setData('device-type', e.target.dataset.type);
    });
});

const container = document.getElementById('container');

container.addEventListener('dragover', e => {
    e.preventDefault(); // dibutuhkan agar drop bisa terjadi
});

container.addEventListener('drop', e => {
    e.preventDefault();
    const type = e.dataTransfer.getData('device-type');
    const rect = container.getBoundingClientRect();

    // Posisi relatif terhadap canvas
    const pos = {
        x: e.clientX - rect.left,
        y: e.clientY - rect.top
    };

    addDevice(type, pos); // panggil dengan posisi drop
});


function checkAnswer() {
    let localScore = 0;
    const selected = document.getElementById('topologyAnswer').value;
    const isDropdownCorrect = selected === 'star';

    if (isDropdownCorrect) localScore += 50;

    const router = devices.find(d => d.name() === 'Router');
    if (!router) {
        showResultModal('❌ Router belum ditambahkan!', localScore);
        return;
    }

    const connectedToRouter = connections.filter(c => c.from === router || c.to === router).length;
    const totalPC = devices.filter(d => d.name() === 'PC').length;

    const isOnlyConnectedToRouter = connections.every(c =>
        c.from === router || c.to === router
    );

    if (connectedToRouter === totalPC && connections.length === totalPC && isOnlyConnectedToRouter) {
        localScore += 50;
        showResultModal('✅ Topologi Bintang terbentuk dengan benar!', localScore);
    } else {
        showResultModal('❌ Topologi belum benar. Pastikan semua PC terhubung ke router dan tidak ada koneksi antar PC.', localScore);
    }

    score = localScore;
    document.getElementById('score').innerText = score;
}

function showResultModal(message, scoreValue) {
    console.log("Memunculkan modal:", message, scoreValue); // Debug log
    document.getElementById('modalMessage').innerHTML = message;
    document.getElementById('modalScore').innerText = scoreValue;
    document.getElementById('resultModal').style.display = 'flex';
}

window.onclick = function (event) {
    const modal = document.getElementById('resultModal');
    if (event.target === modal) {
        closeModal();
    }
};




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

function closeModal() {
    document.getElementById('resultModal').style.display = 'none';
}

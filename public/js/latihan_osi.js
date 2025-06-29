const width = window.innerWidth;
const height = window.innerHeight;
const stage = new Konva.Stage({
    container: 'container',
    width: width,
    height: height
});
const layer = new Konva.Layer();
stage.add(layer);

const timerElement = document.getElementById('timer');
let timer = 120; // 2 minutes in seconds
function startTimer() {
    const interval = setInterval(() => {
        const minutes = Math.floor(timer / 60).toString().padStart(2, '0');
        const seconds = (timer % 60).toString().padStart(2, '0');
        timerElement.textContent = `Sisa Waktu : ${minutes}:${seconds}`;
        if (timer === 0) {
            clearInterval(interval);
            checkAnswers();
        }
        timer--;
    }, 1000);
}

const protokol = [{
    text: 'HTTP, FTP, DNS, Telnet',
    id: 'application'
},
{
    text: 'SSL, TLS',
    id: 'presentation'
},
{
    text: 'NetBIOS, PPTP',
    id: 'session'
},
{
    text: 'TCP, UDP',
    id: 'transport'
},
{
    text: 'IP, ARP, ICMP, IPSec',
    id: 'network'
},
{
    text: 'PPP, ATM, Ethernet',
    id: 'data-link'
},
{
    text: 'Ethernet, USB, Bluetooth IEEE802.11',
    id: 'physical'
},
];

const layersOSI = ['Session', 'Physical', 'Application', 'Network', 'Presentation', 'Transport', 'Data-Link'];
let score = 0;
let correctCount = 0;
let wrongCount = 0;
let arrows = [];
let connections = [];
let protokolBoxes = [];
let layerBoxes = {};
let activeArrow = null;
let currentSource = null;

const correctSound = document.getElementById('correctSound');
const wrongSound = document.getElementById('wrongSound');
const bgMusic = document.getElementById('bgMusic');
const popupSound = document.getElementById('popupSound');
const musicBtn = document.getElementById('musicBtn');

function toggleMusic() {
    const music = document.getElementById("bgMusic");
    const btn = document.getElementById("musicBtn").querySelector("i");

    if (music.paused) {
        music.play();
        btn.classList.remove("fa-volume-mute");
        btn.classList.add("fa-music");
    } else {
        music.pause();
        btn.classList.remove("fa-music");
        btn.classList.add("fa-volume-mute");
    }
}


function resetGame() {
    score = 0;
    correctCount = 0;
    wrongCount = 0;
    timer = 120;
    layer.destroyChildren();
    arrows = [];
    connections = [];
    protokolBoxes = [];
    layerBoxes = {};
    activeArrow = null;
    currentSource = null;
    initGame();
    startTimer();
}

function initGame() {
    protokol.forEach((p, i) => {
        const y = 100 + i * 70;
        const group = new Konva.Group({
            x: width - 450,
            y: y,
            id: p.id
        });
        const box = new Konva.Rect({
            width: 270,
            height: 50,
            fill: '#333',
            cornerRadius: 10
        });
        const label = new Konva.Text({
            text: p.text,
            fontSize: 14,
            padding: 10,
            fill: 'white',
            width: 270,
            align: 'center'
        });
        group.add(box);
        group.add(label);
        layer.add(group);
        protokolBoxes.push(group);

        group.on('click', () => {
            if (activeArrow) activeArrow.destroy();
            currentSource = group;
            const pos = group.getAbsolutePosition();
            activeArrow = new Konva.Arrow({
                points: [pos.x, pos.y + 25, pos.x, pos.y + 25],
                pointerLength: 10,
                pointerWidth: 10,
                fill: 'blue',
                stroke: 'blue',
                strokeWidth: 2
            });
            layer.add(activeArrow);

            stage.on('mousemove.draw', (e) => {
                const mousePos = stage.getPointerPosition();
                const points = activeArrow.points();
                activeArrow.points([points[0], points[1], mousePos.x, mousePos.y]);
                layer.batchDraw();
            });

            stage.on('click.draw', (e) => {
                const pointer = stage.getPointerPosition();
                let targetId = null;
                for (const [id, rect] of Object.entries(layerBoxes)) {
                    if (Konva.Util.haveIntersection(rect.getClientRect(), {
                        x: pointer.x,
                        y: pointer.y,
                        width: 1,
                        height: 1
                    })) {
                        targetId = id;
                        break;
                    }
                }
                if (!targetId) return;

                const sourceId = currentSource.id();
                stage.off('mousemove.draw');
                stage.off('click.draw');
                activeArrow.destroy();

                const start = currentSource.getAbsolutePosition();
                const end = layerBoxes[targetId].getAbsolutePosition();
                const boxWidth = 150; // atau sesuaikan dengan ukuran sebenarnya
                const boxHeight = 50; // atau sesuaikan

                const arrow = new Konva.Arrow({
                    points: [
                        start.x + boxWidth / 2, start.y + boxHeight / 2,
                        end.x + boxWidth / 2, end.y + boxHeight / 2
                    ],
                    pointerLength: 10,
                    pointerWidth: 10,
                    fill: 'blue',
                    stroke: 'blue',
                    strokeWidth: 2
                });

                layer.add(arrow);
                layer.draw();
                connections.push({
                    source: sourceId,
                    target: targetId
                });
                arrows.push(arrow);
                currentSource.off('click');
            });
        });
    });

    layersOSI.forEach((l, i) => {
        const id = l.toLowerCase();
        const y = 100 + i * 70;
        const group = new Konva.Group({
            x: 250,
            y: y
        });
        const box = new Konva.Rect({
            width: 200,
            height: 50,
            fill: '#fff',
            stroke: 'black',
            cornerRadius: 10
        });
        const label = new Konva.Text({
            text: l,
            fontSize: 14,
            width: 200,
            align: 'center',
            y: 15,
            fill: 'black'
        });
        group.add(box);
        group.add(label);
        layer.add(group);
        layerBoxes[id] = box;
    });
    layer.draw();
}

function checkAnswers() {
    correctCount = 0;
    wrongCount = 0;
    connections.forEach(pair => {
        if (pair.source === pair.target) correctCount++;
        else wrongCount++;
    });
    score = (correctCount * 14.3).toFixed(1);
    const pass = score >= 60;

    document.getElementById('scoreSummary').innerHTML =
        `Jawaban Benar: ${correctCount}<br><br>` +
        `Jawaban Salah: ${wrongCount}<br><br>` +
        `Skor Akhir: ${score}<br><br>` +
        (pass ? '<b style="color:green">LULUS</b>' : '<b style="color:red">ULANGI</b>');

    storeEval(score);

    const resultImage = document.getElementById('resultImage');
    resultImage.src = pass
        ? "https://cdn-icons-png.flaticon.com/512/190/190411.png"
        : "https://cdn-icons-png.flaticon.com/512/1828/1828665.png";

    // 🧩 Tambahkan pengaturan ukuran:
    resultImage.style.width = "250px";     // atau "100px"
    resultImage.style.height = "250px";    // atau "auto" biar proporsional

    document.getElementById('resultPopup').style.display = 'block';
    popupSound.play();
}


function closePopup() {
    document.getElementById('popup').style.display = 'none';
    resetGame();
}

function showPopup() {
    document.getElementById('popup').style.display = 'block';
}

function previous() {
    window.location.href = '/model-osi';
}

function next() {
    // Jika skor belum memenuhi KKM (misal minimal 5 jawaban benar)
    if (typeof correctCount !== 'undefined' && correctCount < 5) {
        Swal.fire({
            icon: 'warning',
            title: 'Belum Lulus',
            text: 'Skor Anda tidak memenuhi KKM, silakan coba lagi!',
            confirmButtonText: 'Oke',
        });
        return;
    }

    // Jika memenuhi KKM, lanjut ke halaman berikutnya
    window.location.href = '/materi/halamanmateri';
}



showPopup();
bgMusic.volume = 0.2;
bgMusic.play();

function showTutorial() {
    document.getElementById('tutorialPopup').style.display = 'block';
    document.getElementById('tutorialVideo').play();
}

function closeTutorial() {
    const video = document.getElementById('tutorialVideo');
    video.pause();
    video.currentTime = 0;
    document.getElementById('tutorialPopup').style.display = 'none';
}

async function storeEval(nilai) {
    try {
        var date = new Date();
        var rawD = date.getTime();
        const isoDate = date.toISOString(); // contoh: "2025-06-14T14:32:45.123Z"

        const response = await axios.post("{{ route('kuis.submit') }}", {
            materi: "latihan-osi",
            quiz: "{}",
            nilai: nilai,
            waktu_mulai: rawD,
            waktu_selesai: rawD,
            _csrf: "{{ csrf_token() }}"
        })

        if (response.status == 200) {

            console.log(response.data)
        }
    } catch (error) {
        console.log("error" + error)
    }
}

function showInstructions() {
    document.getElementById("popup").style.display = "block";
    popupSound.play(); // kalau mau ada efek suara popup
}

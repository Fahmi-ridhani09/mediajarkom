<x-layout>
    <x-slot:title>Komponen Perangkat Jaringan</x-slot:title>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materi Pembelajaran Jaringan Komputer & Internet</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
        <style>
            /* Styling untuk tata letak halaman */
            .page-container {
                display: flex;
                max-width: 1200px;
                margin: 20px auto;
                flex-direction: column;
                /* Menjadikan konten lebih vertikal */
            }

            /* Styling untuk konten utama */
            .content-container {
                background-color: #ffffff;
                /* Ubah background menjadi putih */
                padding: 20px;
                border-radius: 10px;
                flex-grow: 1;
                margin-top: 20px;
                /* Menambahkan jarak atas */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Styling untuk judul materi */
            .material-title {
                font-size: 2rem;
                font-weight: bold;
                color: #333;
                margin-bottom: 20px;
                text-align: center;
            }

            /* Styling untuk konten materi */
            .material-content {
                font-size: 1.2rem;
                line-height: 1.6;
                color: #555;
            }

            /* Styling untuk kanvas 3D */
            #three-container,
            #three-container-2,
            #three-container-3,
            #three-container-4,
            #three-container-5,
            #three-container-6 {
                width: 100%;
                height: 500px;
                /* Tentukan ukuran untuk kontainer 3D */
                background-color: #eaeaea;
                /* Tambahkan background jika diperlukan */
                margin-top: 20px;
                /* Menambahkan jarak atas */
            }

            .material-content p {
                border: 2px solid #b08968;
                /* Warna coklat cerah */
                border-radius: 8px;
                /* Sudut border yang membulat */
                padding: 10px;
                /* Ruang di dalam border */
                background-color: #f5f5dc;
                /* Warna latar belakang yang mendukung tema */
                color: #333;
                /* Warna teks */
                margin-top: 10px;
                /* Jarak antar elemen */
            }

            p {
                border: 2px solid #b08968;
                /* Warna coklat cerah */
                border-radius: 8px;
                /* Sudut border yang membulat */
                padding: 10px;
                /* Ruang di dalam border */
                background-color: #f5f5dc;
                /* Warna latar belakang yang mendukung tema */
                color: #333;
                /* Warna teks */
                margin: 10px auto;
                /* Jarak antar elemen dan tengah secara horizontal */
                width: 50%;
                /* Lebar kotak 50% dari kontainer */
                text-align: center;
                /* Teks di dalamnya rata tengah */
            }

            .divider {
                height: 2px;
                /* Ketebalan garis */
                background-color: #b08968;
                /* Warna coklat cerah */
                margin: 20px auto;
                /* Jarak atas dan bawah, serta posisi tengah */
                width: 90%;
                /* Lebar garis */
                border-radius: 4px;
                /* Sudut membulat untuk estetika */
            }

            #three-container,
            #three-container-2,
            #three-container-3,
            #three-container-4,
            #three-container-5,
            #three-container-6 {
                margin-bottom: 10px;
                /* Mengurangi jarak bawah dari kontainer 3D */
            }

            .next-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #d4a373;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 1rem;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
                z-index: 1000;
                /* Agar tombol selalu terlihat */
            }

            .next-button:hover {
                background-color: #8b2e00;
            }

            .back-button {
                position: fixed;
                bottom: 20px;
                left: 20px;
                padding: 10px 20px;
                background-color: #f44336;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .back-button:hover {
                background-color: #d32f2f;
            }

            .next-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .next-button:hover {
                background-color: #388E3C;
            }

            .model-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-top: 10px;
            }

            .model-item {
                background-color: #fff;
                border-radius: 10px;
                padding: 16px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .model-item .material-title {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }

            .model-item .three-view {
                height: 300px;
                width: 100%;
                background-color: #eaeaea;
                margin-bottom: 10px;
            }

            .popup {
                display: none;
                position: fixed;
                z-index: 999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .popup-content {
                background-color: #fff;
                margin: 10% auto;
                padding: 20px;
                border-radius: 10px;
                width: 60%;
                max-width: 1000px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                position: relative;
            }

            .close-btn {
                position: absolute;
                right: 15px;
                top: 10px;
                font-size: 24px;
                cursor: pointer;
            }

            .navigasi-button {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            .btn-nav {
                background-color: #ffffff;
                color: rgb(250, 176, 65);
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 8px;
                font-size: 16px;
                transition: background-color 0.3s ease;
            }

            .btn-nav:hover {
                background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <div class="model-grid">
            <div class="model-item" data-title="Router"
                data-description="Router adalah perangkat jaringan yang menghubungkan beberapa jaringan dan meneruskan paket data di antaranya. Fungsi router adalah sebagai penghubung paket data antara dua segmen jaringan atau lebih. Misal pada sebuah kampus yang memiliki gedung yang terpisah antara gedung kampus 1 dengan kampus 2. Masing – masing kampus memiliki sebuah jaringan dengan Net ID yang berbeda, kampus 1 IP 192.168.1.0 sedangkan kampus 2 IP 202.100.10.0, maka supaya komputer client yang berada di kampus 1 dengan kampus 2 dapat berkomunikasi harus dihubungkan dengan router.">
                <div class="material-title">Router</div>
                <div id="three-container-3" class="three-view"></div>
            </div>

            <div class="model-item" data-title="Kabel LAN"
                data-description="Kabel LAN (Local Area Network) adalah jenis kabel yang digunakan untuk menghubungkan perangkat dalam suatu jaringan komputer lokal, seperti di rumah, kantor, atau sekolah. Kabel ini memungkinkan perangkat-perangkat tersebut untuk berkomunikasi, berbagi sumber daya (seperti printer atau file), dan mengakses internet secara bersamaan. .">
                <div class="material-title">Kabel LAN</div>
                <div id="three-container" class="three-view"></div>
            </div>

            <div class="model-item" data-title="Komputer"
                data-description="Komputer adalah perangkat elektronik yang dapat mengolah data atau informasi sesuai dengan instruksi yang diberikan, dan menghasilkan hasil yang sesuai dengan kebutuhan pengguna. Secara umum, komputer terdiri dari perangkat keras (hardware) dan perangkat lunak (software) yang bekerja sama untuk menjalankan fungsi-fungsi pengolahan data. Komputer dalam jaringan bertindak sebagai klien atau server untuk mengakses layanan.">
                <div class="material-title">Komputer</div>
                <div id="three-container-2" class="three-view"></div>
            </div>

            <div class="model-item" data-title="Modem"
                data-description="Modem adalah perangkat keras yang berfungsi untuk menghubungkan komputer atau perangkat lain ke jaringan internet. Secara sederhana, modem mengubah sinyal digital dari perangkat menjadi sinyal analog yang dapat dikirimkan melalui saluran telekomunikasi, dan sebaliknya, mengubah sinyal analog yang diterima menjadi sinyal digital yang dapat diproses oleh perangkat.">
                <div class="material-title">Modem</div>
                <div id="three-container-4" class="three-view"></div>
            </div>

            <div class="model-item" data-title="Switch"
                data-description="Switch adalah perangkat jaringan yang berfungsi menghubungkan dan mengarahkan lalu lintas data antara perangkat-perangkat dalam sebuah jaringan lokal (LAN). Switch bekerja pada lapisan Data Link (Layer 2) dalam model OSI dan mengarahkan paket data berdasarkan alamat MAC. ">
                <div class="material-title">Switch</div>
                <div id="three-container-5" class="three-view"></div>
            </div>

            <div class="model-item" data-title="NIC"
                data-description="Kartu jaringan atau ethernet card atau NIC (Network Internet Card) merupakan sebuah perangkat jaringan yang dipasang pada komputer atau laptop. Fungsi dari ethernet card adalah untuk menghubungkan atau berkomunikasi antara komputer satu dengan yang lain. Antar ethernet card yang terpasang dalam komputer atau laptop dapat dihubungkan dengan kabel twisted pair, coaxial atau juga dapat menggunakan wireless LAN. Setiap ethernet card memiliki kode unik yaitu kode MAC Address (Medium Acces Control).">
                <div class="material-title">NIC</div>
                <div id="three-container-6" class="three-view"></div>
            </div>
        </div>
        <!-- Popup Description -->
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close-btn">&times;</span>
                <h2 id="popup-title"></h2>
                <p id="popup-description"></p>
            </div>
        </div>
        <div class="navigasi-button">
            <a href="materi/halamanmateri" class="btn-nav">&#8592; Kembali</a>
            <a href="LatihanPerangkatJaringan" class="btn-nav">Selanjutnya &#8594;</a>
        </div>




        <script>
            const items = document.querySelectorAll('.model-item');
            const popup = document.getElementById('popup');
            const popupTitle = document.getElementById('popup-title');
            const popupDescription = document.getElementById('popup-description');
            const closeBtn = document.querySelector('.close-btn');

            items.forEach(item => {
                item.addEventListener('click', () => {
                    const title = item.getAttribute('data-title');
                    const description = item.getAttribute('data-description');

                    popupTitle.textContent = title;
                    popupDescription.textContent = description;
                    popup.style.display = 'block';
                });
            });

            closeBtn.addEventListener('click', () => {
                popup.style.display = 'none';
            });

            window.addEventListener('click', (e) => {
                if (e.target == popup) {
                    popup.style.display = 'none';
                }
            });

            // Membuat Scene untuk model Router
            var scene3 = new THREE.Scene();
            scene3.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera3 = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer untuk model baru dan menambahkannya ke #three-container-3
            var renderer3 = new THREE.WebGLRenderer({
                antialias: true
            });
            var container3 = document.getElementById('three-container-3');
            renderer3.setSize(container3.offsetWidth, container3.offsetHeight);
            container3.appendChild(renderer3.domElement);

            // Menambahkan Cahaya (Lighting)
            var light3 = new THREE.DirectionalLight(0xffffff, 1);
            light3.position.set(5, 10, 7.5).normalize();
            scene3.add(light3);

            var ambientLight3 = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene3.add(ambientLight3);

            // Menggunakan GLTFLoader untuk memuat model GLB baru (contoh: Router)
            var loader3 = new THREE.GLTFLoader();
            loader3.load('images/router.glb', function(gltf) {
                var model3 = gltf.scene;
                model3.scale.set(0.3, 0.3, 0.3); // Mengatur ukuran model
                scene3.add(model3);

                // Menghitung bounding box dari model
                var box3 = new THREE.Box3().setFromObject(model3);
                var size3 = box3.getSize(new THREE.Vector3()).length();
                var center3 = box3.getCenter(new THREE.Vector3());

                // Menyesuaikan posisi kamera agar model bisa terlihat sepenuhnya
                camera3.position.z = size3 * 1.5; // Mengatur jarak kamera agar model sepenuhnya terlihat
                camera3.lookAt(center3);
            }, undefined, function(error) {
                console.error('Error loading the model:', error);
            });

            // Mengatur posisi kamera untuk model baru
            camera3.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls3 = new THREE.OrbitControls(camera3, renderer3.domElement);

            // Membuat animasi untuk merender scene baru
            var animate3 = function() {
                requestAnimationFrame(animate3);
                controls3.update(); // Memperbarui kontrol kamera
                renderer3.render(scene3, camera3);
            };

            animate3();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width3 = container3.offsetWidth;
                var height3 = container3.offsetHeight;
                renderer3.setSize(width3, height3);
                camera3.aspect = width3 / height3;
                camera3.updateProjectionMatrix();
            });


            // Membuat Scene untuk model Kabel LAN
            var scene = new THREE.Scene();
            scene.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer dan menambahkannya ke #three-container
            var renderer = new THREE.WebGLRenderer({
                antialias: true
            });
            var container = document.getElementById('three-container');
            renderer.setSize(container.offsetWidth, container.offsetHeight);
            container.appendChild(renderer.domElement);

            // Menambahkan Cahaya (Lighting)
            var light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(5, 10, 7.5).normalize();
            scene.add(light);

            var ambientLight = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene.add(ambientLight);

            // Menggunakan GLTFLoader untuk memuat model GLB
            var loader = new THREE.GLTFLoader();
            loader.load('images/kabel_lan.glb', function(gltf) {
                var model = gltf.scene;
                model.scale.set(0.5, 0.5, 0.5); // Mengatur ukuran model menjadi lebih kecil
                scene.add(model);

                // Menghitung bounding box dari model
                var box = new THREE.Box3().setFromObject(model);
                var size = box.getSize(new THREE.Vector3()).length(); // Mendapatkan panjang sisi kotak pembatas
                var center = box.getCenter(new THREE.Vector3()); // Mendapatkan titik tengah dari model

                // Menyesuaikan posisi kamera agar model bisa terlihat sepenuhnya
                camera.position.z = size * 1.5; // Mengatur jarak kamera agar model sepenuhnya terlihat

                // Mengarahkan kamera ke pusat model
                camera.lookAt(center);
            }, undefined, function(error) {
                console.error('Error loading the model:', error);
            });

            // Mengatur posisi kamera
            camera.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls = new THREE.OrbitControls(camera, renderer.domElement);

            // Membuat animasi untuk merender scene
            var animate = function() {
                requestAnimationFrame(animate);
                controls.update(); // Memperbarui kontrol kamera
                renderer.render(scene, camera);
            };

            animate();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width = container.offsetWidth;
                var height = container.offsetHeight;
                renderer.setSize(width, height);
                camera.aspect = width / height;
                camera.updateProjectionMatrix();
            });

            // Membuat Scene untuk model Komputer
            var scene2 = new THREE.Scene();
            scene2.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera2 = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer untuk model kedua dan menambahkannya ke #three-container-2
            var renderer2 = new THREE.WebGLRenderer({
                antialias: true
            });
            var container2 = document.getElementById('three-container-2');
            renderer2.setSize(container2.offsetWidth, container2.offsetHeight);
            container2.appendChild(renderer2.domElement);

            // Menambahkan Cahaya (Lighting)
            var light2 = new THREE.DirectionalLight(0xffffff, 1);
            light2.position.set(5, 10, 7.5).normalize();
            scene2.add(light2);

            var ambientLight2 = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene2.add(ambientLight2);

            // Menggunakan GLTFLoader untuk memuat model GLB kedua
            var loader2 = new THREE.GLTFLoader();
            loader2.load('images/komputer.glb', function(gltf) {
                var model2 = gltf.scene;
                model2.scale.set(0.5, 0.5, 0.5); // Sesuaikan ukuran

                // Tambahkan model ke scene
                scene2.add(model2);

                // Hitung bounding box
                var box2 = new THREE.Box3().setFromObject(model2);
                var size2 = box2.getSize(new THREE.Vector3()).length();
                var center2 = box2.getCenter(new THREE.Vector3());

                // Atur posisi model ke pusat koordinat
                model2.position.x += (model2.position.x - center2.x);
                model2.position.y += (model2.position.y - center2.y);
                model2.position.z += (model2.position.z - center2.z);

                // Atur posisi kamera agar terlihat
                camera2.position.set(10, 0, size2 * 1.5);
                camera2.lookAt(0, 0, 0);

                // Tambahkan pencahayaan
                var light = new THREE.DirectionalLight(0xffffff, 1);
                light.position.set(5, 10, 7.5);
                scene2.add(light);

                var ambientLight = new THREE.AmbientLight(0x404040, 1); // Cahaya latar
                scene2.add(ambientLight);
            });


            // Mengatur posisi kamera untuk model kedua
            camera2.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls2 = new THREE.OrbitControls(camera2, renderer2.domElement);

            // Membuat animasi untuk merender scene kedua
            var animate2 = function() {
                requestAnimationFrame(animate2);
                controls2.update(); // Memperbarui kontrol kamera
                renderer2.render(scene2, camera2);
            };

            animate2();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width2 = container2.offsetWidth;
                var height2 = container2.offsetHeight;
                renderer2.setSize(width2, height2);
                camera2.aspect = width2 / height2;
                camera2.updateProjectionMatrix();
            });

            // Membuat Scene untuk model Modem
            var scene4 = new THREE.Scene();
            scene4.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera4 = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer untuk model baru dan menambahkannya ke #three-container-4
            var renderer4 = new THREE.WebGLRenderer({
                antialias: true
            });
            var container4 = document.getElementById('three-container-4');
            renderer4.setSize(container4.offsetWidth, container4.offsetHeight);
            container4.appendChild(renderer4.domElement);

            // Menambahkan Cahaya (Lighting)
            var light4 = new THREE.DirectionalLight(0xffffff, 1);
            light4.position.set(5, 10, 7.5).normalize();
            scene4.add(light4);

            var ambientLight4 = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene4.add(ambientLight4);

            // Menggunakan GLTFLoader untuk memuat model GLB Modem
            var loader4 = new THREE.GLTFLoader();
            loader4.load('images/modem.glb', function(gltf) {
                var model4 = gltf.scene;
                model4.scale.set(0.5, 0.5, 0.5); // Mengatur ukuran model menjadi lebih kecil
                scene4.add(model4);

                // Menghitung bounding box dari model
                var box4 = new THREE.Box3().setFromObject(model4);
                var size4 = box4.getSize(new THREE.Vector3()).length(); // Mendapatkan panjang sisi kotak pembatas
                var center4 = box4.getCenter(new THREE.Vector3()); // Mendapatkan titik tengah dari model

                // Menyesuaikan posisi kamera agar model bisa terlihat sepenuhnya
                camera4.position.z = size4 * 1.5; // Mengatur jarak kamera agar model sepenuhnya terlihat

                // Mengarahkan kamera ke pusat model
                camera4.lookAt(center4);
            }, undefined, function(error) {
                console.error('Error loading the model:', error);
            });

            // Mengatur posisi kamera untuk model modem
            camera4.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls4 = new THREE.OrbitControls(camera4, renderer4.domElement);

            // Membuat animasi untuk merender scene
            var animate4 = function() {
                requestAnimationFrame(animate4);
                controls4.update(); // Memperbarui kontrol kamera
                renderer4.render(scene4, camera4);
            };

            animate4();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width4 = container4.offsetWidth;
                var height4 = container4.offsetHeight;
                renderer4.setSize(width4, height4);
                camera4.aspect = width4 / height4;
                camera4.updateProjectionMatrix();
            });


            // Membuat Scene untuk model Switch
            var scene5 = new THREE.Scene();
            scene5.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera5 = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer untuk model Switch dan menambahkannya ke #three-container-5
            var renderer5 = new THREE.WebGLRenderer({
                antialias: true
            });
            var container5 = document.getElementById('three-container-5');
            renderer5.setSize(container5.offsetWidth, container5.offsetHeight);
            container5.appendChild(renderer5.domElement);

            // Menambahkan Cahaya (Lighting)
            var light5 = new THREE.DirectionalLight(0xffffff, 1);
            light5.position.set(5, 10, 7.5).normalize();
            scene5.add(light5);

            var ambientLight5 = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene5.add(ambientLight5);

            // Menggunakan GLTFLoader untuk memuat model GLB Switch
            var loader5 = new THREE.GLTFLoader();
            loader5.load('images/switch.glb', function(gltf) {
                var model5 = gltf.scene;
                model5.scale.set(0.5, 0.5, 0.5); // Mengatur ukuran model menjadi lebih kecil
                scene5.add(model5);

                // Menghitung bounding box dari model
                var box5 = new THREE.Box3().setFromObject(model5);
                var size5 = box5.getSize(new THREE.Vector3()).length(); // Mendapatkan panjang sisi kotak pembatas
                var center5 = box5.getCenter(new THREE.Vector3()); // Mendapatkan titik tengah dari model

                // Menyesuaikan posisi kamera agar model bisa terlihat sepenuhnya
                camera5.position.z = size5 * 1.5; // Mengatur jarak kamera agar model sepenuhnya terlihat

                // Mengarahkan kamera ke pusat model
                camera5.lookAt(center5);
            }, undefined, function(error) {
                console.error('Error loading the model:', error);
            });

            // Mengatur posisi kamera untuk model Switch
            camera5.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls5 = new THREE.OrbitControls(camera5, renderer5.domElement);

            // Membuat animasi untuk merender scene Switch
            var animate5 = function() {
                requestAnimationFrame(animate5);
                controls5.update(); // Memperbarui kontrol kamera
                renderer5.render(scene5, camera5);
            };

            animate5();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width5 = container5.offsetWidth;
                var height5 = container5.offsetHeight;
                renderer5.setSize(width5, height5);
                camera5.aspect = width5 / height5;
                camera5.updateProjectionMatrix();
            });

            // Membuat Scene untuk model NIC
            var scene6 = new THREE.Scene();
            scene6.background = new THREE.Color(0xffffff); // Ubah background menjadi putih
            var camera6 = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 0.1, 1000);

            // Membuat Renderer untuk model NIC dan menambahkannya ke #three-container-6
            var renderer6 = new THREE.WebGLRenderer({
                antialias: true
            });
            var container6 = document.getElementById('three-container-6');
            renderer6.setSize(container6.offsetWidth, container6.offsetHeight);
            container6.appendChild(renderer6.domElement);

            // Menambahkan Cahaya (Lighting)
            var light6 = new THREE.DirectionalLight(0xffffff, 1);
            light6.position.set(5, 10, 7.5).normalize();
            scene6.add(light6);

            var ambientLight6 = new THREE.AmbientLight(0x404040, 2); // Cahaya ambient untuk memberi pencahayaan dasar
            scene6.add(ambientLight6);

            // Menggunakan GLTFLoader untuk memuat model GLB NIC
            var loader6 = new THREE.GLTFLoader();
            loader6.load('images/nic.glb', function(gltf) {
                var model6 = gltf.scene;
                model6.scale.set(0.5, 0.5, 0.5); // Mengatur ukuran model menjadi lebih kecil
                scene6.add(model6);

                // Menghitung bounding box dari model
                var box6 = new THREE.Box3().setFromObject(model6);
                var size6 = box6.getSize(new THREE.Vector3()).length(); // Mendapatkan panjang sisi kotak pembatas
                var center6 = box6.getCenter(new THREE.Vector3()); // Mendapatkan titik tengah dari model

                // Menyesuaikan posisi kamera agar model bisa terlihat sepenuhnya
                camera6.position.z = size6 * 1.5; // Mengatur jarak kamera agar model sepenuhnya terlihat

                // Mengarahkan kamera ke pusat model
                camera6.lookAt(center6);
            }, undefined, function(error) {
                console.error('Error loading the model:', error);
            });

            // Mengatur posisi kamera untuk model NIC
            camera6.position.z = 5;

            // Menambahkan OrbitControls untuk kontrol kamera interaktif
            var controls6 = new THREE.OrbitControls(camera6, renderer6.domElement);

            // Membuat animasi untuk merender scene
            var animate6 = function() {
                requestAnimationFrame(animate6);
                controls6.update(); // Memperbarui kontrol kamera
                renderer6.render(scene6, camera6);
            };

            animate6();

            // Update ukuran renderer jika jendela di-resize
            window.addEventListener('resize', function() {
                var width6 = container6.offsetWidth;
                var height6 = container6.offsetHeight;
                renderer6.setSize(width6, height6);
                camera6.aspect = width6 / height6;
                camera6.updateProjectionMatrix();
            });


            document.querySelector('.next-button').addEventListener('click', function() {
                const topic = this.getAttribute('data-topic');
                if (topic === 'topik4') {
                    // Pastikan halaman topologi.blade.php mendukung elemen ini
                    window.location.href = '/topologi#topik4';
                }
            });
        </script>
    </body>

    </html>
</x-layout>

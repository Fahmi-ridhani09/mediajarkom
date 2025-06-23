@extends('guru.layout.layout_guru')

@section('main-content')
    <style>
        body {
            color: #000;
        }

        .page-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .sidebar-menu {
            width: 250px;
            background-color: #F5DEB3;
            /* Warna coklat */
            padding: 20px;
            color: rgb(0, 0, 0);
        }

        .sidebar-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-menu ul li {
            margin-bottom: 10px;
        }

        .sidebar-menu ul li a {
            text-decoration: none;
            color: rgb(0, 0, 0);
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar-menu ul li a.active,
        .sidebar-menu ul li a:hover {
            background-color: #c49b6c;
        }

        .content-container {
            flex: 1;
            padding: 30px;
            background-color: #F5DEB3;
        }

        .material-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .topic {
            display: none;
        }

        .topic.active {
            display: block;
        }

        .paragraph-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            color: #000;
            margin-bottom: 20px;
        }

        .gambar-container {
            text-align: center;
        }

        .gambar {
            max-width: 100%;
            height: auto;
        }

        .next-button {
            background-color: #DEB887;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: #c49b6c;
        }
    </style>

    <div class="page-container">
        <div class="sidebar-menu">
            <ul>
                <li><a href="#" data-topic="topik1" class="active">Pendahuluan</a></li>
                <li><a href="#" data-topic="topik2">Physical Layer</a></li>
                <li><a href="#" data-topic="topik3">Data Link Layer</a></li>
                <li><a href="#" data-topic="topik4">Network Layer</a></li>
                <li><a href="#" data-topic="topik5">Transport Layer</a></li>
                <li><a href="#" data-topic="topik6">Session Layer</a></li>
                <li><a href="#" data-topic="topik7">Presentation Layer</a></li>
                <li><a href="#" data-topic="topik8">Application Layer</a></li>
            </ul>
        </div>

        <div class="content-container">
            <div class="material-title">Model OSI Layer</div>

            {{-- Topik 1 --}}
            <div id="topik1" class="topic active">
                <h2>Pendahuluan</h2><br>
                <div class="paragraph-container">
                    <p>Open System Interconnection (OSI) Model adalah model yang diciptakan oleh ISO untuk mengatur standar
                        protokol dan format data dari banyak perusahaan jaringan komputer. Model ini menyediakan kerangka
                        kerja standar untuk komunikasi jaringan dan terdiri dari 7 lapisan.</p>
                </div>
                <div class="gambar-container">
                    <img src="{{ asset('images/materi_osi/osi1.png') }}" alt="Model OSI" style="height:500px;"
                        class="gambar">
                </div>
                <br>
                <button class="next-button" data-next="topik2">Selanjutnya</button>
            </div>

            {{-- Topik 2 sampai 8 --}}
            @php
                $topics = [
                    2 => 'Physical Layer',
                    3 => 'Data Link Layer',
                    4 => 'Network Layer',
                    5 => 'Transport Layer',
                    6 => 'Session Layer',
                    7 => 'Presentation Layer',
                    8 => 'Application Layer',
                ];
                $descriptions = [
                    2 => 'Lapisan ini mendefinisikan perangkat keras pada transmisi jaringan seperti Network Interface
                            Card (NIC), repeater,hub, dan lain sebagainya.
                            Lapisan ini menentukan bagaimana cara sinkronisasi bit, arsitektur jaringan seperti
                            Ethernet, topologi jaringan dan sistem pengkabelan.
                            Pengiriman data dalam bentuk bit (biner) juga menjadi tanggung jawab lapisan ini, termasuk
                            encoding. Protokol yang digunakan pada lapisan
                            ini termasuk di dalamnya adalah: Ethernet, USB, Bluetooth, dan lain sebagainya.
                            ',
                    3 => 'Lapisan ini bertanggung jawab untuk membaca dan menulis data dari dan ke jalur komunikasi,
                            mengelompokkan data dalam frame, melakukan error checking
                            dan correction, control flow, melakukan pengalamatan perangkat keras (MAC Address). Lapisan
                            ini juga menentukan operasi perangkat jaringan seperti hub,
                            switch, bridge, dan lain sebagainya pada level 2. Protokol pada lapisan ini seperti
                            Pointto-Point Protocol (PPP), dan lain sebagainya:',
                    4 => 'Lapisan ini bertanggung jawab untuk pengalamatan host pengirim dan penerima secara unik pada
                            jaringan. Protokol pada lapisan ini adalah Internet Protocol (IP) yang menciptakan IP
                            Address, ARP, ICMP, dan lain sebagainya',
                    5 => 'Lapisan ini bertanggung jawab untuk pengiriman end-to-end antara pengirim dan penerima,
                            seperti memecah data ke dalam paket-paket data, memberikan nomor urut ke paket-paket
                            tersebut sehingga dapat disusun kembali pada komputer penerima.
                            Selain itu, pada lapisan ini juga diciptakan acknowledgement sebagai penanda sukses tidaknya
                            pengiriman data. Protokol pada lapisan ini adalah User Datagram Protocol (UDP) dan
                            Transmission Control Protocol (TCP). Lapisan ini memiliki
                            kemampuan transfer data yang andal dan transparan antara pengirim dan penerima. Lapisan ini
                            juga melakukan multiplexing, pengendalian aliran, dan error checking data.',
                    6 => 'Lapisan ini mendefinisikan koneksi antar dua komputer saat dimulai, dipelihara, dan diakhiri
                            yang disebut dengan sesi. Sebagai contoh, setelah otentikasi pengguna/ kata sandi selesai,
                            komputer jarak jauh mempertahankan sesi ini
                            untuk sementara waktu dan tidak meminta otentikasi lagi dalam rentang waktu tertentu. Contoh
                            protokol pada lapisan ini adalah NetBIOS (IBM), Point-to-point Tunneling Protocol (PPTP),
                            dan lain sebagainya.',
                    7 => 'Lapisan ini mendefinisikan format dan mentranslasikan data yang akan ditransmisikan oleh
                            aplikasi melalui jaringan dari pengirim ke penerima. Protokol yang digunakan pada lapisan
                            ini adalah Secure Socket Layer (SSL), Transport Layer Security
                            (TLS), Remote Desktop Protocol (RDP), dan lain sebagainya.',
                    8 => 'Lapisan ini bertanggung jawab untuk menyediakan antarmuka ke pengguna aplikasi. Protokol yang
                            digunakan pada lapisan ini adalah protokol yang berinteraksi langsung dengan pengguna,
                            seperti hypertext transfer protocol (HTTP), file transfer protocol (FTP), domain name
                            services (DNS), dan lain sebagainya.rtanggung jawab untuk menyediakan antarmuka ke pengguna
                            aplikasi. Protokol yang digunakan
                            pada lapisan ini adalah protokol yang berinteraksi langsung dengan pengguna, seperti
                            hypertext transfer protocol (HTTP), file transfer protocol (FTP), domain name services
                            (DNS), dan lain sebagainya.',
                ];
            @endphp

            @foreach ($topics as $key => $judul)
                <div id="topik{{ $key }}" class="topic">
                    <h2>{{ $judul }}</h2><br>
                    <div class="paragraph-container">
                        <p>{{ $descriptions[$key] }}</p>
                    </div>
                    @if ($key < 8)
                        <br>
                        <button class="next-button" data-next="topik{{ $key + 1 }}">Selanjutnya</button>
                    @endif
                </div>
            @endforeach

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.sidebar-menu a');
            const topics = document.querySelectorAll('.topic');
            const nextButtons = document.querySelectorAll('.next-button');

            function showTopic(id) {
                topics.forEach(t => t.classList.remove('active'));
                const selected = document.getElementById(id);
                if (selected) selected.classList.add('active');

                links.forEach(l => l.classList.remove('active'));
                links.forEach(link => {
                    if (link.dataset.topic === id) {
                        link.classList.add('active');
                    }
                });
            }

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const topicId = this.dataset.topic;
                    showTopic(topicId);
                });
            });

            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const nextId = this.dataset.next;
                    showTopic(nextId);
                });
            });
        });
    </script>
@endsection

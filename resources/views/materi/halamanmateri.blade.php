@extends('materi.layout.layout_materi')

@push('styles')
    <style>
        .gambar-container {
            background-color: #ffffff;
            /* Coklat cerah */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 60px auto 0 auto;
            /* Tambahkan margin-top */
        }

        .tujuan-container {
            background-color: #e6caa0;
            /* Coklat cerah */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 60px auto 0 auto;
            /* Tambahkan margin-top */
        }

        .tujuan-title {
            font-size: 32px;
            font-weight: bold;
            color: #3d3d3d;
            margin-bottom: 20px;
            text-align: center;
        }

        .tujuan-item {
            font-size: 2 0px;
            line-height: 1.6;
            margin-bottom: 15px;
            position: relative;
            padding-left: 25px;
            color: #333;
        }

        .tujuan-item::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #3d3d3d;
            font-size: 22px;
            line-height: 1;
        }
    </style>
@endpush

@section('main-content')
    <div class="gambar-container" style="text-align:center;">
        <div class="tujuan-title">Peta Konsep</div>
        <img src="{{ asset('images/peta_konsep.png') }}" alt="Gambar Jaringan Komputer" width="600" height="390">
    </div><br>
    <div class="tujuan-container" id="tj">
        <div class="tujuan-title">Tujuan Pembelajaran</div>
        <div class="tujuan-item">Menjelaskan Komponen Jaringan Komputer</div>
        <div class="tujuan-item">Menjelaskan Model Jaringan Komputer dalam bentuk Lapisan OSI</div>
        <div class="tujuan-item">Menjelaskan Konsep TCP/IP</div>
        <div class="tujuan-item">Menjelaskan Topologi Jaringan Komputer</div>
        <div class="tujuan-item">Menentukan dan merancang Topologi Jaringan yang sesuai dengan Kebutuhan</div>
    </div><br>
@endsection

@push('scripts')
    <!-- Tambahkan JavaScript kustom jika perlu -->
@endpush

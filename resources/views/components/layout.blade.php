<!DOCTYPE html>
<html lang="en" class="h-full bg-beige">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Dashboard</title>
    <style>
        .bg-beige {
            background-color: #F5F5DC; /* Warna beige untuk latar belakang */
        }
        .text-sandy-brown {
            color: #F4A460; /* Warna coklat pasir (Sandy Brown) untuk teks */
        }
        .bg-light-brown {
            background-color: #D2B48C; /* Warna coklat muda untuk elemen */
        }
        .text-dark-brown {
            color: #8B4513; /* Warna coklat tua untuk kontras */
        }
    </style>
</head>
<body class="h-full bg-beige">
<div class="min-h-full">
    <x-navbar></x-navbar>
  
    <x-header>{{ $title }}</x-header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 bg-light-brown rounded shadow">
        <div class="text-dark-brown">
            {{ $slot }}
        </div>
      </div>
    </main>
  </div>
</body>
</html>

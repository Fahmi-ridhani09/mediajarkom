<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Media Pembelajaran</title>
    <style>
        /* Styling untuk container utama */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f5e8dc, #c49862);
            /* Gradasi warna coklat */
        }

        .page-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            padding: 20px;
        }

        .header-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #4a2c2a;
            /* Coklat gelap */
            font-family: 'Harlow Solid Italic', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header-subtitle {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #4a2c2a;
            font-family: 'Harlow Solid Italic', cursive;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            /* Putih dengan transparansi */
            padding: 50px;
            border-radius: 30px;
            border: 2px solid #a46e57;
            /* Coklat gelap */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            font-size: 2rem;
            font-weight: bold;
            color: #4a2c2a;
            /* Coklat gelap */
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 1rem;
            color: #4a2c2a;
            /* Coklat gelap */
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #a46e57;
            /* Coklat gelap */
            border-radius: 5px;
            background-color: #fdfaf7;
            /* Warna coklat sangat terang */
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #c49862;
            /* Coklat terang */
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #ffffff;
            /* Putih */
            background-color: #a46e57;
            /* Coklat gelap */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .login-button:hover {
            background-color: #c49862;
            /* Coklat terang */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-footer {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #4a2c2a;
        }

        .login-footer a {
            color: #a46e57;
            /* Coklat gelap */
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .login-logo {
            display: block;
            margin: 0 auto 5px auto;
            /* Tengah dan beri jarak ke bawah */
            width: 100px;
            /* Ukuran logo bisa diubah sesuai kebutuhan */
            height: auto;
        }
    </style>
</head>

<body>
    <div class="page-container">
        <div class="login-container">
            <div class="header-title">Media Pembelajaran</div>
            <div class="header-subtitle">Jaringan Komputer & Internet Kelas XI</div>    
            <img src="images/profil.png" alt="Logo" class="login-logo">
            @if (session('pesan'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4"
                    role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">{{ session('pesan') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    </span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
                    <strong class="font-bold">Ada kesalahan:</strong>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('login_proses') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                @csrf
                <button type="submit" class="login-button">Masuk</button>
            </form>
            <div class="login-footer">
                Belum punya akun? <a href="/register">Daftar di sini</a>
            </div>
        </div>
    </div>
</body>

</html>

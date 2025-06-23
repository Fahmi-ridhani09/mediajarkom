<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Media Pembelajaran</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;

            background-image: url('images/log.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /* Gambar menyesuaikan lebar & tinggi layar */
            background-position: center;
            background-attachment: fixed;

            display: flex;
            justify-content: center;
            align-items: center;
        }



        .page-container {
            background: rgba(255, 243, 230, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 40px 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-top: 20px;
        }

        .header-title {
            font-size: 2.3rem;
            font-weight: 800;
            color: #4e342e;
            font-family: 'Dancing Script', cursive;
            text-shadow: 1px 1px 3px rgba(255, 235, 205, 0.6);
            z-index: 1000;
        }


        .header-subtitle {
            font-size: 1.9rem;
            color: #6d4c41;
            margin-bottom: 5px;
            font-family: 'Dancing Script', cursive;
            text-shadow: 1px 1px 2px rgba(255, 235, 205, 0.5);
            letter-spacing: 0.5px;
        }



        .login-logo {
            width: 80px;
            height: auto;
            margin: 5px auto 10px;
        }

        .form-group {
            margin-bottom: 10px;
            text-align: left;
        }

        .form-group label {
            display: block;
            color: #4e342e;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 10px 15px;
            /* Tambahkan padding kiri-kanan */
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.4);
            color: #4e342e;
            box-sizing: border-box;
            /* Penting agar padding tidak menambah lebar input */
        }


        .form-group input::placeholder {
            color: rgba(78, 52, 46, 0.6);
        }

        .form-group input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.7);
        }

        .login-button {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #e66e43;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #bcaaa4;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #4e342e;
        }

        .login-footer a {
            color: #a1887f;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: rgba(255, 204, 188, 0.3);
            color: #4e342e;
            border-left: 5px solid #bf360c;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            text-align: left;
        }

        .alert ul {
            margin-top: 8px;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="page-container">
        <div class="header-title">Media Pembelajaran</div>
        <br></br>
        <div class="header-subtitle">Jaringan Komputer & Internet Kelas XI</div>
        <img src="images/profil.png" alt="Logo" class="login-logo">

        @if (session('pesan'))
            <div class="alert">
                <strong>Oops!</strong><br>
                {{ session('pesan') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert">
                <strong>Ada kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login_proses') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>

        <div class="login-footer">
            Belum punya akun? <a href="/register">Daftar di sini</a>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Halaman Guru</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar styling */
        .navbar {
            background-color: #d2b48c;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Kiri: Beranda */
        .nav-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-left i {
            font-size: 20px;
            color: black;
        }

        .nav-left span {
            font-size: 16px;
            color: black;
            font-weight: 600;
        }

        /* Kanan: Halaman Guru */
        .nav-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-right span {
            color: #4b1f00;
            font-size: 15px;
            font-weight: 600;
        }

        .nav-right img {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Responsive (Optional) */
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-left,
            .nav-right {
                margin: 4px 0;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <!-- Kiri -->
        <div class="nav-left">
            <a href="/" style="text-decoration: none; color: inherit;">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </a>
        </div>

        <!-- Kanan -->
        <div class="nav-right">
            <a href="/login" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                <span>Halaman Guru</span>
                <img src="https://cdn-icons-png.flaticon.com/512/4140/4140049.png" alt="Guru Icon"
                    style="margin-left: 6px; width: 24px; height: 24px;">
            </a>
        </div>
    </nav>


</body>

</html>

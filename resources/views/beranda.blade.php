<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/hamil.png') }}" type="image/png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* border: 1px red solid; */
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #ffffff;
            color: #333;
        }

        header {
            background-image: url('{{ asset('asset/header.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            padding: 2rem;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            display: inline-block;
        }

        nav ul li a.active {
            background-color: #c79bf2;
            color: white;
        }

        .btn-masuk,
        .btn-logout {
            background-color: #9c4ef4;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            display: inline-block;
        }

        .text-judul-besar {
            margin-top: 2rem;
        }

        .text-judul-besar h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #4a1f7e;
        }

        .text-judul-besar p {
            font-size: 1rem;
            color: #555;
        }

        .trimester-section {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem;
        }

        .trimester-box {
            flex: 1 1 30%;
            background: #f6f3fa;
            padding: 1rem;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .trimester-box h3 {
            margin-top: 0.5rem;
            color: #4a1f7e;
        }

        .features-section {
            padding: 2rem;
        }

        .feature-box {
            display: inline-flex;
            align-items: center;
            gap: 2rem;
            background: #f6f3fa;
            padding: 1rem;
            border-radius: 15px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .feature-box h4 {
            margin: 0 0 0.5rem 0;
            color: #4a1f7e;
        }

        .feature-icon {
            font-size: 2rem;
            color: #9c4ef4;
            align-self: center;
        }

        .icon {
            width: 120px;
            height: 120px;
            /* border-radius: 50%; */
            object-fit: cover;
        }

        footer {
            background-color: #cfa9f5;
            padding: 3rem 8rem 3rem 8rem;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }

        .footer-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .footer-logo {
            width: 80px;
            height: auto;
        }

        .footer-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #4a1f7e;
            font-family: Poppins, sans-serif;
        }

        .btn-masuk,
        .btn-logout {
            background-color: #9c4ef4;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            display: ;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div><strong>Temani</strong></div>
            <ul>
                <li><a href="{{ route('beranda') }}" class="active">Beranda</a></li>
                <li><a href="{{ route('diari') }}">Diari Hamil</a></li>
                <li><a href="#">Belajar</a></li>
                <li><a href="{{ route('gejala') }}">Gejala</a></li>

                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="btn-masuk">Masuk</a></li>
                @endauth
            </ul>
        </nav>
        <div class="text-judul-besar">
            @auth
                <h1 class="header-title">Selamat Datang Kembali, {{ Auth::user()->name }}!</h1>
                <p class="header-subtitle">Ini adalah konten khusus untuk Anda yang sudah login.</p>
            @endauth

            @guest
                <h1 class="header-title">Selamat Datang di Temani App!</h1>
                <p class="header-subtitle">Silakan login atau daftar untuk melanjutkan.</p>
            @endguest
        </div>
    </header>
    <section class="trimester-section">
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/pregnancy.png') }}" class="icon" />
            <h3>Trimester pertama (minggu 1-13)</h3>
            <p>Adalah masa adaptasi tubuh ibu dengan perubahan hormonal, nutrisi, dan pertumbuhan embrio. Ibu mungkin
                mengalami mual, muntah, perubahan emosional, dan kelelahan. Pada masa ini, organ penting seperti jantung
                dan otak mulai terbentuk.</p>
        </div>
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/pregnant.png') }}" class="icon" />
            <h3>Trimester kedua (minggu 13-27)</h3>
            <p>Masa kehamilan yang lebih stabil. Gejala mual mereda, ibu mulai merasakan gerakan janin, dan tubuh mulai
                beradaptasi lebih baik. Pertumbuhan janin makin jelas terlihat dan organ dalam berkembang cepat.</p>
        </div>
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/mother.png') }}" class="icon" />
            <h3>Trimester ketiga (minggu 28-40)</h3>
            <p>Ditandai dengan pertumbuhan janin pesat dan persiapan untuk persalinan. Ibu sering mengalami
                ketidaknyamanan karena perut membesar, sulit tidur, dan kontraksi palsu.</p>
        </div>
    </section>
    <section class="features-section">
        <h2 style="margin-bottom: 0.5rem;">Fitur Kami</h2>
        <div class="feature-box">
            <div class="feature-icon">
                <img src="{{ asset('asset/beranda/notebook.png') }}" class="icon" />
            </div>
            <div>
                <h4>Diari Hamil</h4>
                <p>Fitur Diari Hamil memungkinkan ibu mencatat suasana hati atau mood yang dirasakan setiap harinya.
                    Dengan mencatat perubahan emosi dan kondisi tubuh, ibu hamil dapat memahami kondisi mereka sendiri
                    lebih baik.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="feature-icon">
                <img src="{{ asset('asset/beranda/study.png') }}" class="icon" />
            </div>
            <div>
                <h4>Belajar</h4>
                <p>Fitur Belajar menyediakan lima modul edukatif untuk mendampingi pengguna dari tahap awal kehamilan
                    hingga masa persiapan melahirkan. Dirancang oleh tenaga medis dan konselor terpercaya.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="feature-icon">
                <img src="{{ asset('asset/beranda/symptoms.png') }}" class="icon" />
            </div>
            <div>
                <h4>Gejala</h4>
                <p>Fitur Gejala memuat daftar gejala umum selama kehamilan seperti mual, nyeri punggung, dan sembelit.
                    Berguna untuk meningkatkan kewaspadaan dan membantu ibu mengenali kondisi mereka.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-left">
            <img src="{{ asset('asset/hamil.png') }}" alt="Temani Logo" class="footer-logo">
            <span class="footer-title">TEMANI</span>
        </div>
        <div class="footer-right">
            <p>@temani.ibu</p>
            <p>0812-3456-7890</p>
            <p>temani@gmail.com</p>
        </div>
    </footer>
</body>

</html>
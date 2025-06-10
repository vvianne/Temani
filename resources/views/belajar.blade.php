<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar</title>
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

        .section {
            padding: 60px;
            background-color: #f4effa;
            border-radius: 12px;
            max-width: 1000px;
            margin: 40px auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 500px;
        }

        .content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .content-wrapper>h2 {
            margin-top: 60px;
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #2F184B;
        }

        .section h2 {
            margin-bottom: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #2F184B;
        }

        .section small {
            color: #532B88;
            font-size: 16px;
            font-weight: regular;
        }

        .top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px
        }

        .top-row button {
            background-color: #a56dfd;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        .images {
            display: flex;
            gap: 50px;
            margin: 15px 0;
        }

        .images img {
            width: 100%;
            max-width: 30%;
            border-radius: 10px;
            object-fit: cover;
        }

        .curriculum {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 10px;
        }

        .curriculum-item {
            border-radius: 12px;
            padding: 15px 10px;
            text-align: center;
        }

        .curriculum-item h3 {
            margin: 0;
            font-size: 68px;
            color: #2F184B;
            margin-bottom: 5px;
        }

        .curriculum-item p {
            margin-top: 8px;
            font-size: 16px;
            color: #532B88;
        }

        .kurikulum strong {
            font-size: 24px;
            color: #6d28d9;
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
    </style>
</head>

<body>
    <header>
        <nav>
            <div><strong>Temani</strong></div>
            <ul>
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('diari') }}">Diari Hamil</a></li>
                <li><a href="{{ route('belajar') }}" class="active">Belajar</a></li>
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
            <h1 class="header-title">Halo, {{ Auth::user()->name }}!</h1>
            <p class="header-subtitle">Bagaimana kondisimu hari ini? Ayo konsultasikan dengan kami!</p>
        </div>
    </header>
    <div class="section">
        <div class="content-wrapper">
            <div class="top-row">
                <div>
                    <h2>Persiapan Kehamilan Sehat untuk Anda</h2>
                    <small>Langkah awal menjadi ibu siaga</small>
                </div>
                <button>Lihat Selengkapnya</button>
            </div>
            <div class="images">
                <img src="{{ asset('asset/belajar/Image1.png') }}" alt="Ibu hamil 1">
                <img src="{{ asset('asset/belajar/Image2.png') }}" alt="Ibu hamil 2">
                <img src="{{ asset('asset/belajar/Image3.png') }}" alt="Ibu hamil 3">
            </div>
            <h2>Kurikulum</h2>
            <div class="curriculum">
                <div class="curriculum-item">
                    <h3>01</h3>
                    <p>Perubahan Fisik & Emosi Ibu</p>
                </div>
                <div class="curriculum-item">
                    <h3>02</h3>
                    <p>Peran Suami Selama Kehamilan</p>
                </div>
                <div class="curriculum-item">
                    <h3>03</h3>
                    <p>Nutrisi & Gaya Hidup Sehat</p>
                </div>
                <div class="curriculum-item">
                    <h3>04</h3>
                    <p>KenaIi Tanda Bahaya Kehamilan</p>
                </div>
                <div class="curriculum-item">
                    <h3>05</h3>
                    <p>Persiapan Menuju Persalinan</p>
                </div>
            </div>
        </div>
    </div>
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
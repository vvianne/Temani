<!DOCTYPE html>
<html lang="id">
<link rel="icon" href="{{ asset('asset/hamil.png') }}" type="image/png">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diari Kehamilan - Temani</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

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

        .mood-section {
            padding: 2rem;
        }

        .mood-general {
            display: flex;
            align-items: flex-start;
            background: #f6f3fa;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 0 auto;
            gap: 1rem;
            max-width: 1150px;
            width: 100%;
        }

        .mood-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            gap: 50px;
        }

        .mood-icon {
            width: 130px;
            height: 130px;
            flex-shrink: 0;
        }

        .mood-content {
            flex: 1;
            text-align: justify;
        }

        .mood-content h2 {
            color: #4a1f7e;
        }

        .btn-mood {
            display: flex;
            padding: 8px 16px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background-color: #b479f9;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .diary-section {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 90%;
            max-width: 1251px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .diary-section h3 {
            color: #4a1f7e;
        }

        .diary-entry {
            display: flex;
            align-items: center;
            width: 100%;
            gap: 12px;
            flex-direction: row;
        }

        .diary-date {
            color: #a85dfc;
            font-weight: bold;
            min-width: 120px;
            text-align: left;
            align-self: center;
        }

        .diary-card {
            display: flex;
            padding: 20px;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex: 1 0 0;
            align-self: stretch;
            background-color: #fff2e7;
            border-radius: 10px;
        }

        .diary-card img {
            width: 52px;
            height: 52px;
        }

        .diary-card p {
            margin: 0;
            text-align: justify;
        }

        .diary-card strong {
            display: block;
            margin-bottom: 0.5rem;
            color: #4a1f7e;
        }

        .btn-muat-lebihBanyak {
            background-color: #a56dfd;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 10px;
            margin: 2rem auto 0;
            display: block;
            font-weight: 600;
            cursor: pointer;
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

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 1rem;
            border-radius: 0.25rem;
            margin: 2rem auto;
            max-width: 1150px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div><strong>Temani</strong></div>
            <ul>
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('diari') }}" class="active">Diari Hamil</a></li>
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
            <h1 class="header-title">Halo, {{ Auth::user()->name }}!</h1>
            <p class="header-subtitle">Bagaimana kondisimu hari ini? Ayo konsultasikan dengan kami!</p>
        </div>
    </header>

    <main>
        @if (session('success'))
            <div class="alert-success">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <section class="mood-section">
            <div class="mood-general">
                <div class="mood-card">
                    @if ($currentMood)
                        <img src="{{ asset('asset/mood/' . strtolower($currentMood->perasaan) . '.png') }}"
                            alt="{{ $currentMood->perasaan }}" class="mood-icon" />
                        <div class="mood-content">
                            <h2>Perasaan Anda saat ini?</h2>
                            <p><strong>{{ $currentMood->perasaan }}</strong></p>
                            <p>{{ $currentMood->catatan }}</p>
                        </div>
                    @else
                        <img src="{{ asset('asset/mood/Ceria.png') }}" alt="Mood Default" class="mood-icon" />
                        <div class="mood-content">
                            <h2>Perasaan Anda saat ini?</h2>
                            <p><strong>Belum ada catatan mood hari ini.</strong></p>
                            <p>Ayo tambahkan mood Anda untuk memulai perjalanan diari kehamilan.</p>
                        </div>
                    @endif
                    <a href="{{ route('diari.create') }}" class="btn-mood">+ Mood</a>
                </div>
            </div>
        </section>

        <section class="diary-section">
            <h3>Riwayat Diari Kehamilan</h3>
            <p>Bagaimana kondisi Anda selama masa kehamilan Anda?</p>
            <p>Berikut rekaman terkait perasaan yang Anda lalui selama masa kehamilan Anda. Jika terjadi perasaan yang
                tidak mengenakan dapat digunakan sebagai evaluasi kedepannya, karena Ibu Hamil harus selalu dalam
                kondisi yang baik dan perasaan yang bahagia.</p>

            @forelse ($diariHamilRecords as $record)
                <div class="diary-entry">
                    <span class="diary-date">{{ \Carbon\Carbon::parse($record->created_at)->format('d F Y, H:i') }}</span>
                    <div class="diary-card">
                        <img src="{{ asset('asset/mood/' . strtolower($record->perasaan) . '.png') }}"
                            alt="{{ $record->perasaan }}" />
                        <p><strong>{{ $record->perasaan }}</strong> {{ $record->catatan }}</p>
                    </div>
                </div>
            @empty
                <p style="text-align: center; color: #666;">Belum ada riwayat diari kehamilan yang tercatat.</p>
            @endforelse

            <!-- <button class="btn-muat-lebihBanyak">Muat Lebih Banyak</button> -->
        </section>
    </main>
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
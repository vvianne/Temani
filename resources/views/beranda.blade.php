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
            color: #4a1f7e;
        }

        nav ul li a.active {
            background-color: #c79bf2;
            color: white;
        }

        nav ul li a:hover {
            background-color: #F4EFFA;
            color: #4a1f7e;
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

        .btn-masuk:hover,
        .btn-logout:hover {
            background-color: #4a1f7e;
            color: white;
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

        .features-section h2 {
            color: #4a1f7e;
        }

        .feature-box {
            display: flex;
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
            object-fit: cover;
        }

        /* --- New CSS for Added Sections --- */
        .content-section {
            padding: 2rem;
        }

        .content-section h2 {
            margin-bottom: 1rem;
            color: #4a1f7e;
        }

        /* FAQ with Image Layout */
        .faq-with-image-container {
            display: flex;
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
            gap: 2rem;
            /* Space between FAQ list and image */
            padding: 2rem;
            align-items: flex-start;
            /* Align items to the top */
        }

        .faq-list {
            flex: 2;
            min-width: 300px;
        }

        .faq-list h2 {
            margin-bottom: 1rem;
            color: #4a1f7e;
        }

        .faq-item {
            background: #f6f3fa;
            padding: 1rem;
            border-radius: 15px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .faq-item h4 {
            margin-bottom: 0.5rem;
            color: #4a1f7e;
        }

        .faq-image-placeholder {
            flex: 1;
            min-width: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            padding: 1rem;
        }

        .faq-image-placeholder img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            display: block;
        }

        .motivation-box {
            background: #f6f3fa;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 2rem;
        }

        .motivation-box p {
            font-size: 1.2rem;
            font-style: italic;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .motivation-box span {
            font-weight: 600;
            color: #9c4ef4;
        }

        .consultation-section {
            text-align: center;
            padding: 2rem;
            background: #e9d5fa;
            border-radius: 20px;
            margin: 2rem;
            margin-bottom: 5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .consultation-section h2 {
            color: #4a1f7e;
            margin-bottom: 1rem;
        }

        .consultation-section p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .consultation-section .btn-consult {
            background-color: #9c4ef4;
            color: white;
            font-weight: 600;
            padding: 0.8rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .consultation-section .btn-consult:hover {
            background-color: #4a1f7e;
        }

        /* --- End New CSS --- */

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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 0.5rem;
            }

            .trimester-section {
                flex-direction: column;
                margin: 1rem;
            }

            .trimester-box {
                flex: 1 1 100%;
            }

            .features-section,
            .content-section,
            .consultation-section {
                padding: 1rem;
                margin: 1rem;
            }

            .feature-box {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            /* Responsive for FAQ with Image */
            .faq-with-image-container {
                flex-direction: column;
                /* Stack columns on small screens */
                gap: 1rem;
            }

            .faq-list,
            .faq-image-placeholder {
                flex: 1 1 100%;
                /* Take full width on small screens */
                min-width: unset;
                /* Remove min-width restriction */
            }

            /* End Responsive for FAQ with Image */

            footer {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1rem;
            }

            .footer-left {
                flex-direction: column;
                margin-bottom: 1rem;
            }
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
                <li><a href="{{ route('belajar') }}">Belajar</a></li>
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
                <p class="header-subtitle">Bagaimana kondisimu hari ini? Ayo konsultasikan dengan kami!</p>
            @endauth

            @guest
                <h1 class="header-title">Selamat Datang di Temani App!</h1>
                <p class="header-subtitle">Silakan login atau daftar untuk melanjutkan.</p>
            @endguest
        </div>
    </header>
    <section class="trimester-section">
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/pregnancy.png') }}" class="icon" alt="Ikon Kehamilan Trimester 1" />
            <h3>Trimester pertama (minggu 1-13)</h3>
            <p>Adalah masa adaptasi tubuh ibu dengan perubahan hormonal, nutrisi, dan pertumbuhan embrio. Ibu mungkin
                mengalami mual, muntah, perubahan emosional, dan kelelahan. Pada masa ini, organ penting seperti jantung
                dan otak mulai terbentuk.</p>
        </div>
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/pregnant.png') }}" class="icon" alt="Ikon Kehamilan Trimester 2" />
            <h3>Trimester kedua (minggu 13-27)</h3>
            <p>Masa kehamilan yang lebih stabil. Gejala mual mereda, ibu mulai merasakan gerakan janin, dan tubuh mulai
                beradaptasi lebih baik. Pertumbuhan janin makin jelas terlihat dan organ dalam berkembang cepat.</p>
        </div>
        <div class="trimester-box">
            <img src="{{ asset('asset/beranda/mother.png') }}" class="icon" alt="Ikon Kehamilan Trimester 3" />
            <h3>Trimester ketiga (minggu 28-40)</h3>
            <p>Ditandai dengan pertumbuhan janin pesat dan persiapan untuk persalinan. Ibu sering mengalami
                ketidaknyamanan karena perut membesar, sulit tidur, dan kontraksi palsu.</p>
        </div>
    </section>
    <section class="features-section">
        <h2 style="margin-bottom: 0.5rem;">Fitur Kami</h2>
        <div class="feature-box">
            <div class="feature-icon">
                <img src="{{ asset('asset/beranda/notebook.png') }}" class="icon" alt="Ikon Diari Hamil" />
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
                <img src="{{ asset('asset/beranda/study.png') }}" class="icon" alt="Ikon Belajar" />
            </div>
            <div>
                <h4>Belajar</h4>
                <p>Fitur Belajar menyediakan lima modul edukatif untuk mendampingi pengguna dari tahap awal kehamilan
                    hingga masa persiapan melahirkan. Dirancang oleh tenaga medis dan konselor terpercaya.</p>
            </div>
        </div>
        <div class="feature-box">
            <div class="feature-icon">
                <img src="{{ asset('asset/beranda/symptoms.png') }}" class="icon" alt="Ikon Gejala" />
            </div>
            <div>
                <h4>Gejala</h4>
                <p>Fitur Gejala memuat daftar gejala umum selama kehamilan seperti mual, nyeri punggung, dan sembelit.
                    Berguna untuk meningkatkan kewaspadaan dan membantu ibu mengenali kondisi mereka.</p>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2 style="text-align: center;">Motivasi untuk Ibu Hamil</h2>
        <div class="motivation-box">
            <p>"Setiap tendangan kecil adalah pengingat akan keajaiban yang sedang tumbuh di dalam dirimu."</p>
            <span>- Temani App</span>
        </div>
        <div class="motivation-box">
            <p>"Kehamilan adalah perjalanan luar biasa yang membentukmu menjadi pribadi yang lebih kuat dan penuh
                cinta."</p>
            <span>- Temani App</span>
        </div>
    </section>

    <section class="faq-with-image-container">
        <div class="faq-list">
            <h2>Tanya Jawab Umum</h2>
            <div class="faq-item">
                <h4>Q: Apakah aman mengonsumsi kopi selama kehamilan?</h4>
                <p>A: Konsumsi kafein sebaiknya dibatasi. Umumnya, batasi asupan kafein hingga 200 mg per hari (sekitar
                    satu cangkir kopi). Selalu konsultasikan dengan dokter Anda.</p>
            </div>
            <div class="faq-item">
                <h4>Q: Kapan waktu terbaik untuk melakukan USG pertama?</h4>
                <p>A: USG pertama biasanya dilakukan antara minggu ke-6 hingga ke-10 kehamilan untuk mengkonfirmasi
                    kehamilan, melihat detak jantung janin, dan menentukan usia kehamilan.</p>
            </div>
            <div class="faq-item">
                <h4>Q: Bagaimana cara mengatasi mual di pagi hari (morning sickness)?</h4>
                <p>A: Coba makan dalam porsi kecil tapi sering, hindari makanan berbau menyengat, konsumsi biskuit atau
                    roti kering sebelum bangun tidur, dan pastikan tubuh terhidrasi.</p>
            </div>
        </div>
        <div class="faq-image-placeholder">
            <img src="{{ asset('asset/beranda/faq.png') }}" alt="Ilustrasi Tanya Jawab Ibu Hamil">
        </div>
    </section>

    <section class="consultation-section">
        <h2>Butuh Bantuan Lebih Lanjut?</h2>
        <p>Jangan ragu untuk bertanya atau berkonsultasi dengan ahli kami. Kami siap menemani perjalanan kehamilan Anda.
        </p>
        <a href="#" class="btn-consult">Konsultasi Sekarang</a>
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
<?php
$username = "Amanda";
?>
<!DOCTYPE html>
<html lang="id">

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

        main.container {
            flex: 1;
            max-width: 1400px;
            margin: auto;
            padding: 2rem;
        }

        .title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .overview-section {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            align-items: center;
            text-align: justify;
        }

        .overview-section img {
            width: 100%;
            max-width: 250px;
            border-radius: 15px;
        }

        .overview-section div {
            flex: 1;
        }

        .content-area {
            display: flex;
            gap: 20px;
            text-align: justify;
        }

        .sidebar {
            width: 350px;
            padding: 0;
            background: none;
            border-radius: 0;
            color: inherit;
        }

        .sidebar button {
            background-color: #b479f9;
            color: white;
            border: none;
            padding: 12px;
            margin-bottom: 12px;
            width: 100%;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sidebar button:hover {
            background-color: #b68af3;
        }

        .main-content {
            flex: 1;
            background: #F4EFFA;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        #mainContent h3 {
            margin-bottom: 10px;
            color: #6a1b9a;
        }

        #mainContent p {
            line-height: 1.6;
            text-align: justify;
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

    <main class="container">
        <div class="title">Persiapan Kehamilan Sehat untuk Suami & Istri</div>

        <section class="overview-section">
            <img src="{{asset('asset/belajar/enroll.png')}}" alt="Ilustrasi pasangan menyambut kehamilan">
            <div>
                <h3 style="color: #6a1b9a;">Overview</h3>
                <p>Kehamilan adalah perjalanan bersama. Modul ini membantu suami memahami perubahan fisik dan emosional
                    ibu, serta cara memberikan dukungan tepat melalui kurikulum terstruktur untuk menciptakan lingkungan
                    sehat bagi keluarga.
            </div>
        </section>
        <section class="content-area">
            <aside class="sidebar">
                <div class="curriculum-header">
                    <h3 style="color: #6a1b9a; margin-bottom: 15px;">Kurikulum</h3>
                    <p style="color: #666; margin-bottom: 20px;">Pilih materi pembelajaran untuk dibaca</p>
                </div>
                <div class="material-list">
                    <button onclick="showContent(1)">01 Perubahan Fisik & Emosi Ibu</button>
                    <button onclick="showContent(2)">02 Peran Ayah Selama Kehamilan</button>
                    <button onclick="showContent(3)">03 Nutrisi & Gaya Hidup Sehat</button>
                    <button onclick="showContent(4)">04 Kenali Tanda Bahaya Kehamilan</button>
                    <button onclick="showContent(5)">05 Persiapan Menuju Persalinan</button>
                </div>
            </aside>
            <div class="main-content" id="mainContent">
                <p>Pilih materi di sebelah kiri untuk membaca penjelasan lebih detail.</p>
            </div>
        </section>
        </section>
        <script>
            function showContent(index) {
                const content = [
                    {
                        title: "Perubahan Fisik & Emosi Ibu",
                        text: "Kehamilan adalah perjalanan yang penuh perubahan, baik fisik maupun emosional. Tubuh ibu mengalami mual di trimester awal, peningkatan berat badan, pembesaran payudara, nyeri punggung, serta kelelahan. Perubahan hormon juga bisa menyebabkan fluktuasi emosi, seperti mudah menangis atau merasa cemas. Penting bagi pasangan untuk memahami bahwa perubahan ini alami dan mendukung ibu secara emosional sangat dibutuhkan. Suami dapat membantu dengan menjadi pendengar yang baik, bersikap sabar, dan ikut serta dalam pemeriksaan kehamilan."
                    },
                    {
                        title: "Peran Ayah Selama Kehamilan",
                        text: "Peran ayah tidak kalah penting dari ibu selama kehamilan. Ayah berperan sebagai pendukung utama dalam aspek fisik, emosional, hingga psikologis. Ayah dapat terlibat dengan menemani ke dokter kandungan, mempelajari perkembangan janin, mengikuti kelas persiapan persalinan, serta membantu pekerjaan rumah tangga agar ibu tidak terlalu lelah. Dukungan emosional yang konsisten dari ayah dapat meningkatkan rasa percaya diri ibu, mengurangi stres, serta memperkuat ikatan keluarga sejak masa kehamilan."
                    },
                    {
                        title: "Nutrisi & Gaya Hidup Sehat",
                        text: "Nutrisi seimbang adalah kunci kehamilan sehat. Ibu hamil membutuhkan asupan yang kaya zat besi, asam folat, kalsium, protein, dan vitamin. Makanan seperti sayuran hijau, ikan, telur, dan susu sangat dianjurkan. Hindari makanan mentah, kafein berlebihan, dan makanan cepat saji. Selain itu, menjaga gaya hidup sehat juga penting—seperti tidur cukup, olahraga ringan seperti jalan kaki atau yoga hamil, serta menghindari stres. Suami bisa membantu dengan ikut menjaga pola makan dan menjadi support system yang positif."
                    },
                    {
                        title: "Kenali Tanda Bahaya Kehamilan",
                        text: "Meskipun sebagian besar kehamilan berlangsung normal, penting untuk mengenali tanda-tanda bahaya. Beberapa tanda yang harus segera ditangani antara lain pendarahan dari vagina, sakit perut hebat, sakit kepala berat, pandangan kabur, bengkak ekstrem pada tangan atau wajah, serta gerakan janin yang berkurang. Jika ibu mengalami demam tinggi, sesak napas, atau kejang, segera cari bantuan medis. Mengenali dan merespons tanda-tanda ini lebih awal dapat menyelamatkan nyawa ibu dan bayi."
                    },
                    {
                        title: "Persiapan Menuju Persalinan",
                        text: "Mendekati waktu persalinan, persiapan fisik dan mental sangat diperlukan. Siapkan tas bersalin yang berisi kebutuhan ibu dan bayi sejak minggu ke-36. Diskusikan rencana kelahiran bersama dokter: apakah persalinan normal, dengan epidural, atau caesar. Pelajari teknik relaksasi, pernapasan, serta cara mengelola kontraksi. Suami juga bisa menjadi pendamping persalinan yang memberikan kenyamanan dan dorongan semangat. Dengan persiapan yang matang, proses persalinan bisa menjadi pengalaman yang penuh makna dan positif."
                    }
                ];
                const selected = content[index - 1];
                document.getElementById("mainContent").innerHTML = `
      <h3>${selected.title}</h3>
      <p>${selected.text}</p>
    `;
            }
        </script>
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
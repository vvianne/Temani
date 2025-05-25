<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gejala</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        background-color: #ffffff;
        color: #333;
    }
    header {
        background: linear-gradient(to right, #e8d6f4, #d4b3f0);
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
    }
    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }
    nav ul li a.active {
        background-color: #c79bf2;
        color: white;
    }
    .hero {
        margin-top: 2rem;
    }
    .hero h1 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        color: #2F184B;
    }
    .hero p {
        font-size: 1rem;
        color: #555;
    }
    .section {
        padding: 2rem;
    }
    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    .card {
        background-color: #f6f3fa;
        padding: 1rem;
        border-radius: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .card img {
        width: 40px;
        height: 40px;  
        border-radius: 50%;
    }
    .card h3 {
        margin: 0.5rem 0;
    }
    .card p {
        font-size: 0.9rem;
        color: #555;
    }
    .load-more {
        text-align: center;
        margin-top: 2rem;
    }
    .load-more button {
        background-color: #9c4ef4;
        color: white;
        border: none;
        padding: 0.7rem 1.5rem;  
        border-radius: 20px;
        font-weight: bold;
        cursor: pointer;
    }
    footer {
        background-color: #cfa9f5;
        padding: 2rem;
        color: #333;
        text-align: center;
    }
    footer .contact {
        margin-top: 1rem;
    }
    </style>
</head>
<body>
    <header>
        <nav>
            <div><strong></strong></div>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Diari Hamil</a></li>
                <li><a href="#">Belajar</a></li>
                <li><a href="#" class="active">Gejala</a></li>
                <li><a href="#" style="background:#9c4ef4; color:white;">Masuk</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Halo, Amanda!</h1>
            <p>Bagaimana kondisimu hari ini? Ayo konsultasikan dengan kami!</p>
        </div>
    </header>
    <section class="section">
        <h2>Kenali Gejala</h2>
        <p>Yuk, kenali gejala yang umum dialami selama kehamilan agar kamu dan pasangan lebih siap!</p>
        <div class="cards">
            <div class="card">
                <h3>Mual di Pagi Hari</h3>
                <p>Gejala umum pada trimester pertama, biasanya terjadi di pagi hari.</p>
            </div>
            <div class="card">
                <h3>Sakit Punggung</h3>
                <p>Nyeri atau ketegangan di area punggung bawah akibat pertambahan berat badan dan perubahan postur tubuh.</p>
            </div>
            <div class="card">
                <h3>Kelelahan</h3>
                <p>Kelelahan umum terjadi terutama pada trimester pertama akibat perubahan hormon dan peningkatan kebutuhan energi tubuh.</p>
            </div>
            <div class="card">
                <h3>Mulas</h3>
                <p>Rasa panas atau tidak nyaman di dada akibat asam lambung yang naik, umum terjadi karena hormon kehamilan.</p>
            </div>
            <div class="card">
                <h3>Sembelit</h3>
                <p>Sembelit sering terjadi saat hamil akibat hormon dan tekanan rahim. Cegah dengan serat, air putih, dan bergerak aktif.</p>
            </div>
        </div>
        <div class="load-more">
            <button>Muatan Lebih Banyak</button>
        </div>
    </section>
    <footer>
        <strong>TEMANI</strong>
        <div class="contact">
            <p>@temani.ibu</p>
            <p>0812-3456-7890</p>
            <p>temani@gmail.com</p>
        </div>
    </footer>
</body>
</html>
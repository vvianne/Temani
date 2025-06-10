<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

        .btn-masuk, .btn-logout {
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
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        
        .mood-iconBesar {
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
        }
        
        .input-mood {
            display: flex;
            justify-content: center;
            margin: 2rem auto;
        }
        
        .mood-frame {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 850px;
            gap: 20px;
            background: #f4eefd;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        
        .mood-header {
            background-color:rgb(249, 249, 249);
            border-radius: 15px;
            padding: 10px 15px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .mood-header textarea {
            width: 100%;
            border: none;
            background: transparent;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color:rgb(51, 51, 51);
            outline: none;
            resize: vertical;
        }
        
        .mood-options {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .mood-visual {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border: 3px solid transparent;
            transition: all 0.2s ease;
        }
        
        .mood-visual:hover {
            background-color: #8f57c7 !important;
        }
        
        .mood-visual img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .mood-label {
            text-align: center;
            font-size: 12px;
            color: #4a1f7e;
            margin-top: 4px;
        }
        
        .mood-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }
        
        .btn-tambahkan {
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
        }
        
        .btn-tambah-mood {
            background-color: #a270d8;
            color: white;
            padding: 10px 24px;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.2s ease;
        }
        
        .btn-tambah-mood:hover {
            background-color: #8f57c7;
        }

        input[type="radio"]:checked + .mood-visual {
            border-color: #9c4ef4;
            box-shadow: 0 0 0 4px rgba(156, 78, 244, 0.4);
        }

        .error-message {
            color: #D93644;
            font-size: 12px;
            margin-top: 5px;
            text-align: center;
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

    <section class="input-mood">
        <form method="POST" action="{{ route('diari.store') }}" class="mood-frame">
            @csrf

            <h3 style="color: #000; font-weight: 600; align-self: flex-start;">Masukkan kondisi mood Anda</h3>

            <div class="mood-header">
                <textarea name="catatan" id="catatan" rows="4" placeholder="Tulis catatan harian Anda di sini..." required>{{ old('catatan') }}</textarea>
            </div>
            @error('catatan')
                <p class="error-message" style="align-self: flex-start;">{{ $message }}</p>
            @enderror

            <p style="font-size: 14px; color: #4a1f7e; margin-top: 10px;">
                Pilih salah satu karakter di atas dan tambahkan ke mood harian Anda!
            </p>

            <div class="mood-options">
                @php
                    $moods = [
                        ['label' => 'Ceria', 'value' => 'Ceria', 'color' => '#00B67A', 'image' => 'mood/Ceria.png'],
                        ['label' => 'Khawatir', 'value' => 'Khawatir', 'color' => '#00C2FF', 'image' => 'mood/Khawatir.png'],
                        ['label' => 'Senang', 'value' => 'Senang', 'color' => '#FF9020', 'image' => 'mood/Senang.png'],
                        ['label' => 'Marah', 'value' => 'Marah', 'color' => '#D93644', 'image' => 'mood/Marah.png'],
                        ['label' => 'Sedih', 'value' => 'Sedih', 'color' => '#9B72CF', 'image' => 'mood/Sedih.png'],
                    ];
                @endphp

                @foreach ($moods as $mood)
                    <div class="mood-group">
                        <input type="radio" name="perasaan" id="mood_{{ $mood['value'] }}" value="{{ $mood['value'] }}" hidden {{ old('perasaan') == $mood['value'] ? 'checked' : '' }}>
                        <label for="mood_{{ $mood['value'] }}" class="mood-visual" style="background-color: {{ $mood['color'] }};">
                            <img src="{{ asset('asset/' . $mood['image']) }}" alt="{{ $mood['label'] }}" />
                        </label>
                        <div class="mood-label">{{ $mood['label'] }}</div>
                    </div>
                @endforeach
            </div>
            @error('perasaan')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn-tambah-mood">Tambahkan</button>
        </form>
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
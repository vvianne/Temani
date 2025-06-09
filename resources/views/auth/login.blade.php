@extends('layouts.guest')

@section('content')
    <section class="ok">
        <div class="left">
            <h1>Masuk</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Email</label>
                <input class="input" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br>

                <label for="password">Kata Sandi</label>
                <input class="input" type="password" name="password" id="password" placeholder="Kata Sandi" required autocomplete="current-password">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br>

                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Ingat Saya</label>
                <br><br>

                <button class="button" type="submit">Masuk</button>
                <br>

                <div>
                    <p>Belum memiliki akun?</p>
                    <a href="{{ route('register') }}" class="link">Daftar</a>
                </div>
            </form> 
        </div>

        <div class="right">
            <img class="foto" src="{{ asset('asset/hamil.png') }}" alt="Gambar">
            <p>Bergabunglah dengan kami dan mulai perjalananmu sekarang! Masuk untuk melanjutkan atau daftar untuk menjadi bagian dari komunitas kami.</p>
        </div>
    </section>
@endsection
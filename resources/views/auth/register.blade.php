@extends('layouts.guest')

@section('content')
    <section class="ok">
        <div class="left">
            <h1>Daftar</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="name">Nama Lengkap</label>
                <input class="input" type="text" name="name" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br>

                <label for="email">Email</label>
                <input class="input" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br>

                <label for="password">Kata Sandi</label>
                <input class="input" type="password" name="password" id="password" placeholder="Kata Sandi" required autocomplete="new-password">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br>

                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <br><br>

                <button class="button" type="submit">Daftar</button>
                <br>

                <div>
                    <p>Sudah memiliki akun?</p>
                    <a href="{{ route('login') }}" class="link">Masuk</a> 
                </div>
            </form>
        </div>

        <div class="right">
            <img class="foto" src="{{ asset('asset/hamil.png') }}" alt="Gambar">
            <p>Bergabunglah dengan kami dan mulai perjalananmu sekarang! Masuk untuk melanjutkan atau daftar untuk menjadi bagian dari komunitas kami.</p>
        </div>
    </section>
@endsection
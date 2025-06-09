@extends('layouts.app') {{-- Pastikan 'layouts.app' Anda sudah diubah agar memiliki @yield('content') di tag <main> --}}

@section('content')
<div class="container mx-auto p-6 max-w-2xl bg-white rounded-lg shadow-md my-8">
    <h2 class="text-2xl font-bold mb-6 text-center">Masukkan kondisi mood Anda</h2>

    <form method="POST" action="{{ route('diari.store') }}">
        @csrf

        <div class="mb-6">
            <label for="catatan" class="block text-gray-700 text-sm font-bold mb-2">Apa yang Anda rasakan hari ini?</label>
            <textarea name="catatan" id="catatan" rows="4" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-none" placeholder="Tulis catatan harian Anda di sini...">{{ old('catatan') }}</textarea>
            @error('catatan')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-4 text-center">Pilih salah satu karakter di atas dan tambahkan ke mood harian Anda.</label>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 justify-items-center">
                @php
                    $moods = [
                        ['label' => 'Ceria', 'value' => 'Ceria', 'color' => 'bg-green-500', 'image' => 'Ceria.png'], // <-- Nama gambar disamakan
                        ['label' => 'Khawatir', 'value' => 'Khawatir', 'color' => 'bg-blue-500', 'image' => 'Khawatir.png'], // <-- Nama gambar disamakan
                        ['label' => 'Senang', 'value' => 'Senang', 'color' => 'bg-orange-500', 'image' => 'Senang.png'], // <-- Nama gambar disamakan
                        ['label' => 'Marah', 'value' => 'Marah', 'color' => 'bg-red-500', 'image' => 'Marah.png'], // <-- Nama gambar disamakan
                        ['label' => 'Sedih', 'value' => 'Sedih', 'color' => 'bg-purple-500', 'image' => 'Sedih.png'], // <-- Nama gambar disamakan
                    ];
                @endphp

                @foreach ($moods as $mood)
                    <label class="block text-center cursor-pointer group">
                        <input type="radio" name="perasaan" value="{{ $mood['value'] }}" class="hidden peer" {{ old('perasaan') == $mood['value'] ? 'checked' : '' }}>
                        <div class="p-4 rounded-lg {{ $mood['color'] }} peer-checked:ring-4 peer-checked:ring-purple-500 peer-checked:ring-offset-2 transition-all duration-200 transform group-hover:scale-105">
                            <img src="{{ asset('asset/' . $mood['image']) }}" alt="{{ $mood['label'] }}" class="w-20 h-20 mx-auto mb-2">
                            <span class="text-white font-medium">{{ $mood['label'] }}</span>
                        </div>
                    </label>
                @endforeach
            </div>
            @error('perasaan')
                <p class="text-red-500 text-xs italic mt-2 text-center">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="px-8 py-3 bg-purple-600 text-white font-bold rounded-lg hover:bg-purple-700 transition-colors duration-200 focus:outline-none focus:shadow-outline">Tambahkan</button>
        </div>
    </form>
</div>
@endsection
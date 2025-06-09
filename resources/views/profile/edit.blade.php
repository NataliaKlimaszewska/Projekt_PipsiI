@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-pink-700 mb-6">Twój profil</h1>

        @if(session('success'))
            <div class="mb-4 text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-pink-50 rounded-xl shadow p-6 mb-8 space-y-4">
            <p><strong>Nazwa użytkownika:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>

            @if(session('avatar_path'))
                <p><strong>Avatar:</strong></p>
                <img src="{{ asset('storage/' . session('avatar_path')) }}" alt="Avatar" class="w-24 h-24 rounded-full object-cover">
            @endif

            @if(session('bio'))
                <p><strong>Bio:</strong> {{ session('bio') }}</p>
            @endif
        </div>

        <h2 class="text-2xl font-semibold text-pink-600 mb-4">Zaktualizuj profil (tymczasowo)</h2>

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium text-pink-700" for="bio">Bio</label>
                <textarea name="bio" id="bio" rows="3" class="w-full border rounded-lg p-2">{{ old('bio', session('bio')) }}</textarea>
                @error('bio')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium text-pink-700" for="avatar">Zdjęcie profilowe</label>
                <input type="file" name="avatar" id="avatar" accept="image/*" class="w-full border rounded-lg p-2">
                @error('avatar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-4 py-2 rounded-xl">
                Zapisz zmiany
            </button>
        </form>
    </div>
@endsection





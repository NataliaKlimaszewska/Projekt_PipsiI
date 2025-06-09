@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        {{-- Tytuł strony --}}
        <h1 class="text-3xl font-bold text-pink-700 mb-6">{{ __('messages.profile_page.title') }}</h1>

        {{-- Komunikat sukcesu --}}
        @if(session('success'))
            <div class="mb-4 text-green-600 font-medium">
                {{ session('success') }}
            </div>
        @endif

        {{-- Informacje o użytkowniku --}}
        <div class="bg-pink-50 rounded-xl shadow p-6 mb-8 space-y-4">
            <p><strong>{{ __('messages.profile_page.username_label') }}</strong> {{ auth()->user()->name }}</p>
            <p><strong>{{ __('messages.profile_page.email_label') }}</strong> {{ auth()->user()->email }}</p>

            @if(session('avatar_path'))
                <p><strong>{{ __('messages.profile_page.avatar_label') }}</strong></p>
                <img src="{{ asset('storage/' . session('avatar_path')) }}" alt="Avatar" class="w-24 h-24 rounded-full object-cover">
            @endif

            @if(session('bio'))
                <p><strong>{{ __('messages.profile_page.bio_label') }}</strong> {{ session('bio') }}</p>
            @endif
        </div>

        {{-- Nagłówek formularza aktualizacji --}}
        <h2 class="text-2xl font-semibold text-pink-600 mb-4">{{ __('messages.profile_page.update_header') }}</h2>

        {{-- Formularz aktualizacji bio i avatara --}}
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium text-pink-700" for="bio">{{ __('messages.profile_page.bio_label') }}</label>
                <textarea name="bio" id="bio" rows="3" class="w-full border rounded-lg p-2">{{ old('bio', session('bio')) }}</textarea>
                @error('bio')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium text-pink-700" for="avatar">{{ __('messages.profile_page.avatar_label') }}</label>
                <input type="file" name="avatar" id="avatar" accept="image/*" class="w-full border rounded-lg p-2">
                @error('avatar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-4 py-2 rounded-xl">
                {{ __('messages.profile_page.save_button') }}
            </button>
        </form>
    </div>
@endsection



@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        {{-- Przetłumaczony tytuł --}}
        <h1 class="text-3xl font-bold text-pink-700 mb-6">{{ __('messages.profile_page.title') }}</h1>

        <div class="bg-pink-50 rounded-xl shadow p-6 mb-8">
            {{-- Przetłumaczone etykiety --}}
            <p><strong>{{ __('messages.profile_page.username_label') }}</strong> {{ auth()->user()->name }}</p>
            <p><strong>{{ __('messages.profile_page.email_label') }}</strong> {{ auth()->user()->email }}</p>
        </div>

        {{-- Przetłumaczony nagłówek sekcji --}}
        <h2 class="text-2xl font-semibold text-pink-600 mb-4">{{ __('messages.profile_page.favorites_header') }}</h2>

        {{-- Tutaj w przyszłości pojawi się pętla z ulubionymi przepisami --}}

    </div>
@endsection

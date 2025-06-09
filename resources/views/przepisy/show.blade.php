@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto py-12 px-6">
        <img src="{{ asset($recipe->obrazek_url) }}" alt="{{ $recipe->nazwa }}" class="w-full h-96 object-cover rounded shadow mb-6">

        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $recipe->nazwa }}</h1>

        <div class="text-gray-600 text-lg mb-6">
            <p class="mb-4"><strong>Opis:</strong> {{ $recipe->opis }}</p>
            <p><strong>Sposób wykonania:</strong></p>
            <p class="whitespace-pre-line">{{ $recipe->sposob_wykonania }}</p>
        </div>

        <a href="{{ url()->previous() }}" class="inline-block px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700 transition">
            ← Wróć do listy
        </a>
    </div>
@endsection


@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto py-12 px-6">
        <img src="{{ asset($recipe->obrazek_url) }}" alt="{{ $recipe->nazwa }}" class="w-full h-96 object-cover rounded-lg shadow-lg mb-8">

        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">{{ $recipe->nazwa }}</h1>

        <div class="text-gray-700 text-lg mb-8 space-y-6">
            <div>
                <strong class="block text-xl mb-2">{{ __('messages.recipe_page.description') }}</strong>
                <p>{{ $recipe->opis }}</p>
            </div>

            <div>
                <strong class="block text-xl mb-2">{{ __('messages.recipe_page.ingredients') }}</strong>
                {{-- Tutaj w przyszłości wstawisz listę składników --}}
            </div>

            <div>
                <strong class="block text-xl mb-2">{{ __('messages.recipe_page.instructions') }}</strong>
                {{-- UWAGA: Zobacz wyjaśnienie poniżej dotyczące sposobu wyświetlania --}}
                <div class="prose max-w-none">
                    {!! $recipe->sposob_wykonania !!}
                </div>
            </div>
        </div>

        <a href="{{ url()->previous() }}" class="inline-block px-5 py-3 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-600 transition-colors">
            ← {{ __('messages.recipe_page.back_to_list') }}
        </a>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="relative w-full">
        <div class="absolute top-4 left-4 z-10">
            <x-weather-widget />
        </div>
    </div>




    <div>
            <div class="text-center py-12 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-pink-700 sm:text-5xl md:text-6xl">
                {{ __('messages.homepage.welcome_title') }}
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-pink-900">
                {{ __('messages.homepage.welcome_subtitle') }}
            </p>
        </div>
    </div>


    <div id="cake-carousel" class="relative w-full max-w-5xl mx-auto my-8" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-xl md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1625103709286-0ad26ab00b61" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Talerze z ciastem marchewkowym">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1495147466023-ac5c588e2e94" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Notatnik i składniki do pieczenia">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://plus.unsplash.com/premium_photo-1681401569921-e3e99499bfe9" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Różowe makaroniki">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1512223792601-592a9809eed4" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Tort urodzinowy">
            </div>
        </div>
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            <button type="button" class="w-3 h-3 bg-pink-400 rounded-full" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 bg-pink-400 rounded-full" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 bg-pink-400 rounded-full" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 bg-pink-400 rounded-full" data-carousel-slide-to="3"></button>
        </div>
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-pink-200/50 group-hover:bg-pink-300">
                <svg class="w-4 h-4 text-pink-900" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/></svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-pink-200/50 group-hover:bg-pink-300">
                <svg class="w-4 h-4 text-pink-900" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
            </span>
        </button>
    </div>
    {{-- Formularz wyszukiwania --}}
    <div class="max-w-4xl mx-auto px-4 mb-8">
        <form method="GET" action="{{ url('/') }}" class="flex flex-col sm:flex-row gap-4 bg-pink-100 p-4 rounded-xl shadow">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="{{ __('messages.recipe_list.search_placeholder') }}" {{-- ZMIANA TUTAJ --}}
                class="flex-1 px-4 py-2 rounded-lg border border-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-400"
            >
            <button
                type="submit"
                class="px-4 py-2 bg-pink-600 text-white rounded-lg hover:bg-pink-700 transition"
            >
                {{ __('messages.recipe_list.search_button') }} {{-- ZMIANA TUTAJ --}}
            </button>

            {{-- Nowa sekcja filtrowania po tagach --}}
            <div class="mb-3">
                <label class="form-label">Filtruj po tagach:</label>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($allTags as $tag)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tags[]"
                                   value="{{ $tag->slug }}" id="tag-{{ $tag->id }}"
                                   @if(in_array($tag->slug, $selectedTags)) checked @endif>
                            <label class="form-check-label" for="tag-{{ $tag->id }}">
                                {{ $tag->nazwa }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ Route('home') }}" class="btn btn-secondary">Wyczyść filtry</a>
                <button type="submit" class="btn btn-primary">Filtruj</button>
            </div>
        </form>
    </div>


    {{-- Siatka z przepisami --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto px-4 py-8">
        @foreach($recipes as $recipe)
            <div class="flex flex-col bg-pink-50 shadow-md rounded-2xl p-4 h-full">
                <img src="{{ asset($recipe->obrazek_url) }}" alt="{{ $recipe->nazwa }}" class="w-full h-48 object-cover rounded-xl mb-4">
                <h2 class="text-lg font-semibold text-pink-800 mb-2">{{ $recipe->nazwa }}</h2>
                <p class="text-sm text-pink-900 flex-grow">
                    {{ Str::limit($recipe->opis, 120) }}
                </p>
                <a href="{{ route('recipes.show', $recipe->id) }}" class="mt-4 inline-block px-4 py-2 bg-pink-600 text-white rounded-md text-center hover:bg-pink-700 transition">
                    {{ __('messages.recipe_list.view_recipe_button') }} {{-- ZMIANA TUTAJ --}}
                </a>
            </div>
        @endforeach
    </div>
@endsection



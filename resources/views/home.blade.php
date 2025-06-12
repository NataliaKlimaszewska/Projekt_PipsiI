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
    @php
        $tagColors = [
            // Niebieski
            [
                'default' => 'bg-blue-100 text-blue-800 hover:bg-blue-200',
                'checked' => 'peer-checked:bg-blue-600 peer-checked:text-white',
            ],
            // Zielony
            [
                'default' => 'bg-green-100 text-green-800 hover:bg-green-200',
                'checked' => 'peer-checked:bg-green-600 peer-checked:text-white',
            ],
            // Czerwony
            [
                'default' => 'bg-red-100 text-red-800 hover:bg-red-200',
                'checked' => 'peer-checked:bg-red-600 peer-checked:text-white',
            ],
            // Żółty
            [
                'default' => 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200',
                'checked' => 'peer-checked:bg-yellow-600 peer-checked:text-white',
            ]
        ];
    @endphp
    <form action="{{ route('home') }}" method="GET" class="p-6 bg-pink-800 rounded-lg shadow-lg border-2 border-pink-400 flex flex-col md:flex-row items-start gap-6">
        <div class="w-full sm:w-1/3">
            <label for="search" class="block mb-2 text-sm font-medium text-white-700">{{ __('messages.filter.search_label') }}</label>
            <div class="flex">
                <input
                    type="text"
                    id="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="{{ __('messages.filter.search_placeholder') }}"
                    class="w-full px-4 py-2 rounded-l-lg border border-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-400"
                >
                <button
                    type="submit"
                    class="px-4 py-2 bg-pink-600 text-white rounded-r-lg hover:bg-pink-700 transition"
                >
                    {{ __('messages.filter.search_button') }}
                </button>
            </div>
        </div>


        <div class="w-full sm:w-2/3">
            <label class="block mb-2 text-sm font-medium text-white-700">{{ __('messages.filter.tags_label') }}</label>
            <div class="flex flex-wrap items-center gap-3">
                @foreach($allTags as $tag)
                    @php
                        $colorClasses = $tagColors[$loop->index % count($tagColors)];
                    @endphp
                    <div>
                        <input class="hidden peer" type="checkbox" name="tags[]" value="{{ $tag->slug }}" id="tag-{{ $tag->id }}"
                               @if(in_array($tag->slug, $selectedTags ?? [])) checked @endif>

                        <label class="cursor-pointer select-none rounded-full px-4 py-1.5 text-sm font-semibold transition-colors duration-200 {{ $colorClasses['default'] }} {{ $colorClasses['checked'] }}"
                               for="tag-{{ $tag->id }}">
                            {{ $tag->nazwa }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end pt-4 mt-4 border-t border-pink-200 gap-3">
                <a href="{{ url('/') }}" class="px-5 py-2 text-sm font-medium text-white-700 bg-pink-200 border border-transparent rounded-lg hover:bg-pink-300">
                    {{ __('messages.filter.clear_button') }}

                </a>
                <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-pink-600 border border-transparent rounded-lg shadow-sm hover:bg-pink-700">
                    {{ __('messages.filter.filter_button') }}
                </button>
            </div>
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



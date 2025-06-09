@extends('layouts.master')

@section('content')

    <div class="text-center py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
            {{ __('messages.homepage.welcome_title') }}
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
            {{ __('messages.homepage.welcome_subtitle') }}
        </p>
    </div>
    <div id="cake-carousel" class="relative w-full max-w-5xl mx-auto my-8" data-carousel="slide">
        {{-- Carousel wrapper --}}
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            {{-- Item 1 --}}
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1625103709286-0ad26ab00b61?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Talerze z ciastem marchewkowym">
            </div>
            {{-- Item 2 --}}
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1495147466023-ac5c588e2e94?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Notatnik i składniki do pieczenia">
            </div>
            {{-- Item 3 --}}
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://plus.unsplash.com/premium_photo-1681401569921-e3e99499bfe9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Różowe makaroniki na talerzu">
            </div>
            {{-- Item 4 --}}
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1512223792601-592a9809eed4?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Osoba trzymająca tort urodzinowy">
            </div>
        </div>
        {{-- Slider indicators --}}
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        {{-- Slider controls --}}
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Pętla z przepisami --}}
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
        @foreach($recipes as $recipe)
            <div style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); background: #fff;">
                <img src="{{ asset($recipe->obrazek_url) }}" alt="{{ $recipe->nazwa }}" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
                <h2 style="font-size: 1.2rem; color: #333;">{{ $recipe->nazwa }}</h2>
                <p style="color: #555; font-size: 0.95rem; margin-bottom: 10px;">
                    {{ Str::limit($recipe->opis, 120) }}
                </p>
                <a href="{{ route('przepisy.show', $recipe->id) }}" style="display: inline-block; padding: 8px 12px; background: #38b2ac; color: white; text-decoration: none; border-radius: 5px;">
                    Zobacz więcej
                </a>

            </div>
        @endforeach
    </div>
    <x-weather-widget/>
@endsection

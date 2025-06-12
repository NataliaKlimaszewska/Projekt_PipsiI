@extends('layouts.master')

@section('content')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #print-area, #print-area * {
                visibility: visible;
            }

            #print-area {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }
        }
    </style>

    <div class="min-h-screen bg-pink-100 py-12 px-4 sm:px-6 lg:px-8">
        <div id="print-area" class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">


            @if($recipe->obrazek_url)
                <img src="{{ asset($recipe->obrazek_url) }}" alt="{{ $recipe->nazwa }}"
                     class="w-full h-72 object-cover rounded-t-lg">
            @endif


            <div class="p-8 space-y-6">
                <h1 class="text-4xl font-bold text-gray-800 text-center">{{ $recipe->nazwa }}</h1>


                <div class="text-gray-700">
                    <h2 class="text-xl font-semibold text-gray-600 mb-2">
                        {{ __('messages.recipe_page.description') }}
                    </h2>
                    <p class="text-base leading-relaxed">{{ $recipe->opis }}</p>
                </div>


                @if($recipe->ingredients->count())
                    <div>
                        <h2 class="text-xl font-semibold text-gray-600 mb-2">
                            {{ __('messages.recipe_page.ingredients') }}
                        </h2>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 pl-2">
                            @foreach($recipe->ingredients as $ingredient)
                                <li>{{ $ingredient->ilosc }} {{ $ingredient->jednostka }} {{ $ingredient->nazwa }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div>
                    <h2 class="text-xl font-semibold text-gray-600 mb-2">
                        {{ __('messages.recipe_page.instructions') }}
                    </h2>
                    <p class="whitespace-pre-line text-gray-700 text-base leading-relaxed">{{ $recipe->sposob_wykonania }}</p>
                    @if($recipe->tags->isNotEmpty())
                        <div class="tagi-section mt-4">
                            <strong>Tagi:</strong>
                            @foreach($recipe->tags as $tag)
                                <a href="{{ Route('home', ['tags[]' => $tag->slug]) }}" class="tag-link">
                                    {{ $tag->nazwa }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>


        <div class="flex justify-center gap-6 mt-8">
            <a href="{{ url()->previous() }}"
               class="text-pink-600 hover:text-pink-800 font-medium transition">
                ← {{ __('messages.recipe_page.back_to_list') }}
            </a>
            <button onclick="window.print()"
                    class="text-pink-600 hover:text-pink-800 font-medium transition">
                🖨️ {{ __('messages.recipe_page.print') ?? 'Drukuj przepis' }}
            </button>
        </div>
    </div>
@endsection



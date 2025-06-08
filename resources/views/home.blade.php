@extends("layouts.master")

@section("content")
    <h1>Strona główna</h1>
    Aktualny język: {{ App::getLocale() }}

    <p>Witamy na stronie głównej! Oto lista składników:</p>

    <x-ingredients :ingredientsGroups="$ingredientsGroups" :defaultDisplay="true" />
    <!-- component -->
    <ul>
        @foreach($products as $product)
            <li>{{ $product->nazwa }}</li>
        @endforeach
    </ul>

@endsection

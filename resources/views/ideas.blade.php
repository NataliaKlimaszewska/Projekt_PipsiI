@extends("layouts.master")

@section("content")
    <h1>Pomysły na przepisy</h1>
    <p>Znajdź inspiracje i pomysły na nowe dania:</p>

    <x-ingredients
        :ingredientsGroups="isset($ingredientsGroups) ? $ingredientsGroups : []"
        :defaultDisplay="false" />


@endsection

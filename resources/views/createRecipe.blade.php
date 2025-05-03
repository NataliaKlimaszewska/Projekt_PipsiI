@extends("layouts.master")

@section("content")
    <h1>Stwórz przepis</h1>
    <p>Wprowadź szczegóły swojego przepisu poniżej:</p>

    <x-ingredients
        :ingredientsGroups="isset($ingredientsGroups) ? $ingredientsGroups : []"
        :defaultDisplay="false" />
@endsection

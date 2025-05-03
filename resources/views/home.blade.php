@extends("layouts.master")

@section("content")
    <h1>Strona główna</h1>
    <p>Witamy na stronie głównej! Oto lista składników:</p>

    <x-ingredients :ingredientsGroups="$ingredientsGroups" :defaultDisplay="true" />
@endsection

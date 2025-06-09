@extends('layouts.master')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-pink-700 mb-6">Twój profil</h1>

        <div class="bg-pink-50 rounded-xl shadow p-6 mb-8">
            <p><strong>Nazwa użytkownika:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>

        </div>

        <h2 class="text-2xl font-semibold text-pink-600 mb-4">Ulubione przepisy</h2>


    </div>
@endsection


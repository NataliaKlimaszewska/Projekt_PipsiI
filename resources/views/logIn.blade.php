@extends('layouts.master')

@section('content')

    <div class="flex items-center justify-center min-h-screen bg-pink-100">

        {{-- Karta logowania z zaokrąglonymi rogami i cieniem --}}
        <div class="flex w-full max-w-4xl mx-4 sm:mx-0 bg-white shadow-lg rounded-lg overflow-hidden">

            <div class="hidden lg:block lg:w-1/2">
                <img src="https://images.unsplash.com/photo-1625103709286-0ad26ab00b61?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Piękny tort" class="w-full h-full object-cover">
            </div>

            <div class="w-full p-8 lg:w-1/2">
                <h1 class="text-2xl font-semibold mb-4">Login</h1>
                <form action="{{ route('logIn') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-600">Email</label>
                        <input type="text" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-800">Password</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-pink-500" autocomplete="off">
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="text-pink-500 focus:ring-pink-500">
                        <label for="remember" class="text-gray-700 ml-2">Remember Me</label>
                    </div>
                    <div class="mb-6 text-pink-500">
                        <a href="#" class="hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold rounded-md py-2 px-4 w-full transition-colors">Login</button>
                </form>
                <div class="mt-6 text-gray-600 text-center">
                    <a href="#" class="hover:underline">Sign up Here</a>
                </div>
            </div>

        </div>
    </div>

@endsection

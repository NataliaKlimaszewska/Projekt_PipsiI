<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrzepisController;



Route::middleware('web')->group(function () {
    Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('home');
    Route::get('/about', [\App\Http\Controllers\Controller::class, 'about']);
    Route::get('/quiz', [\App\Http\Controllers\Controller::class, 'quiz']);
    Route::post('/ingredients/save', [\App\Http\Controllers\Controller::class, 'save'])->name('save.ingredients');
    Route::get('/recipes/{id}', [PrzepisController::class, 'show'])->name('recipes.show');

    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit')->middleware('auth');

    Route::post('/profile/update', function (Request $request) {
        $request->validate([
            'bio' => 'nullable|string|max:1000',
            'avatar' => 'nullable|image|max:2048',
        ]);


        if ($request->filled('bio')) {
            session(['bio' => $request->bio]);
        }


        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            session(['avatar_path' => $path]);
        }

        return redirect()->route('profile.edit')->with('success', 'Profil tymczasowo zaktualizowany!');
    })->name('profile.update');


    Route::middleware('guest')->group(function () {
        Route::get('/logIn', [AuthController::class, 'showLoginForm'])->name('logIn');
        Route::post('/logIn', [AuthController::class, 'handleLogin']);

        Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [AuthController::class, 'handleRegister']);
    });

    Route::post('/logout', [AuthController::class, 'handleLogout'])->name('logout');
});

Route::get('/language/{locale}', function ($locale) {
    $supportedLocales = ['en', 'pl', 'es', 'ru', 'fr', 'de'];

    if (in_array($locale, $supportedLocales)) {
        session()->put('locale', $locale);

        if (auth()->check()) {
            auth()->user()->update(['locale' => $locale]);
        }
    }

    return redirect()->back();
})->name('language.switch');


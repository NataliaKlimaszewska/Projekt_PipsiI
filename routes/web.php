<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AuthController;

Route::middleware('web')->group(function () {
    Route::get('/', [\App\Http\Controllers\Controller::class, 'home']);
    Route::get('/about', [\App\Http\Controllers\Controller::class, 'about']);
    Route::get('/ideas', [\App\Http\Controllers\Ingredients::class, 'newIdeas']);
    Route::get('/createRecipe', [\App\Http\Controllers\Ingredients::class, 'addNewRecipe']);
    Route::get('/quiz', [\App\Http\Controllers\Controller::class, 'quiz']);
    Route::post('/ingredients/save', [\App\Http\Controllers\Controller::class, 'save'])->name('save.ingredients');
    Route::middleware('guest')->group(function () {
        Route::get('/logIn', [AuthController::class, 'showLoginForm'])->name('logIn');
        Route::post('/logIn', [AuthController::class, 'handleLogin']);

        Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [AuthController::class, 'handleRegister']);
    });
    Route::post('/logout', [AuthController::class, 'handleLogout'])->name('logout');
});
Route::get('/test-mail', function () {
    Mail::raw('To jest testowa wiadomość', function ($message) {
        $message->to('hello@example.com')
            ->subject('Test Mail');
    });

    return 'Wysłano!';
});

Route::get('/language/{locale}', function ($locale) {
    // Validate the locale
    $supportedLocales = ['en', 'pl', 'es', 'ru', 'fr', 'de'];

    if (in_array($locale, $supportedLocales)) {
        // Store the locale in the session
        session()->put('locale', $locale);

        // Optional: Store user's language preference if logged in
        if (auth()->check()) {
            auth()->user()->update(['locale' => $locale]);
        }
    }

    return redirect()->back();
})->name('language.switch');

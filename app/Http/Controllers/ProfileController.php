<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();


    }
//    public function update(Request $request)
//    {
//        $user = $request->user();
//
//        $validated = $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
//            'bio' => ['nullable', 'string', 'max:1000'],
//            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], // Walidacja obrazka (max 2MB)
//        ]);
//        if ($request->hasFile('avatar')) {
//            // Jeśli tak, usuń stary awatar, aby nie zaśmiecać serwera
//            if ($user->avatar_path) {
//                Storage::disk('public')->delete($user->avatar_path);
//            }
//            // Zapisz nowy plik w storage/app/public/avatars i pobierz jego ścieżkę
//            $validated['avatar_path'] = $request->file('avatar')->store('avatars', 'public');
//        }
//
//        $user->update($validated);
//
//        return redirect()->route('profile.edit')->with('status', 'Profil został zaktualizowany!');
//    }

    }

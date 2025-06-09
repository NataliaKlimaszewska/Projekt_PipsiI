<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();


    }
}

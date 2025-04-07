<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Import the correct Response class
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController; // Import the BaseController

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $hello = "Strona główna";
        return view('home')->with("hello", $hello);
    }

    public function about()
    {
        return view('about');
    }

    public function logIn()
    {
        return view('logIn');
    }
    public function logOut() {
       auth()->logout();

        return redirect('/');
    }
    public function register() {
return view('register');
    }

    public function ideas() {
        return view('ideas')->with("hello",);
    }

    public function quiz()
    {
        $hello = rand(1, 100);
        return view('quiz')->with("hello", $hello);

    }

    public function createRecipe() {
        $hello = rand(1, 100);
        return view('createRecipe')->with("hello", $hello);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke() {
        $user = Auth::user();
        return view('index', ['user' => $user]);
    }
}

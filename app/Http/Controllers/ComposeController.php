<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComposeController extends Controller
{
    public function index() {
        return view('compose');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QustionController extends Controller
{
    public function index() {
        return view('main.question');
    }
}

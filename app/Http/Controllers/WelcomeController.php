<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $events = Event::orderBy('created_at', 'desc')->take(2)->get();
        return view('welcome', compact('events'));
    }

}

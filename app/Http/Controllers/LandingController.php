<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instant;

class LandingController extends Controller
{
    public function index() {
        $instants = Instant::all();
        return view('landing', ['instants' => $instants]);
    }
}

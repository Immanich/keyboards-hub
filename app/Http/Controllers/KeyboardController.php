<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyboard;

class KeyboardController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function index() {
        $keyboards = Keyboard::orderBy('brand')->get();

        return view('index', [
            'keyboards' => $keyboards
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comicsController extends Controller
{
    public function homepage() {

        return view('pages.homepage');
    }
}

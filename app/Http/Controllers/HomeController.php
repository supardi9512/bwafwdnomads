<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // menampilkan halaman home / view home
    public function index(Request $request) {
        return view('pages.home');
    }
}

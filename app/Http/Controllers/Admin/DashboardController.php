<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan view dashboard
    public function index(Request $request) {
        return view('pages.admin.dashboard');
    }
}

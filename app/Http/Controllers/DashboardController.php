<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard( Request $request ){

        $menuActive = 'DASHBOARD';
        return view('dashboard', compact('menuActive'));
    }
}

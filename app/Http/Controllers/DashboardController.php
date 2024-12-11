<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
       
        if (!Auth::user()->hasRole(['Admin', 'Employee'])) {
       
            return redirect()->route('home');
        }

        return view('dashboard');
    }
}
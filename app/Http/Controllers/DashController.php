<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function index()
    {
        // Explicitly get the authenticated user
        $user = Auth::user();

        // If no user is authenticated, redirect to login
        if (!$user) {
            return redirect()->route('login');
        }

        // Pass the user to the dashboard view
        return view('dashboard', compact('user'));
    }
}

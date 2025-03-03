<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $activeUsers = User::where('status', 'online')
        ->take(5)
        ->get();

return view('welcome', compact('activeUsers'));
    }
}

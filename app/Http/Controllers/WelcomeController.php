<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $onlineUsers = User::where('status', 'online')->get();
        return view('/welcome', compact('onlineUsers'));
    }
}

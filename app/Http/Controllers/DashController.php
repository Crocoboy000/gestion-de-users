<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Friend;


class DashController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalFriends = Friend::where('user_id', $user->id)
            ->where('status', 'accepted')
            ->count();

        $pendingRequests = Friend::where('friend_id', $user->id)
            ->where('status', 'pending')
            ->count();

        $recentActivities = Friend::where(function($query) use ($user) {
            $query->where('user_id', $user->id)
                ->orWhere('friend_id', $user->id);
        })
        ->with(['user', 'friend'])
        ->latest()
        ->take(5)
        ->get();

        return view('dashboard', compact('user', 'totalFriends', 'pendingRequests', 'recentActivities'));
    }
}

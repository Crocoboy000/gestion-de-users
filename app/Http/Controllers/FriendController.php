<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index()
    {
        $friends = Friend::where('user_id', Auth::user()->id)
            ->where('status', 'accepted')
            ->with('friend')
            ->get();

        $pendingRequests = Friend::where('friend_id', Auth::user()->id)
            ->where('status', 'pending')
            ->with('user')
            ->get();

        return view('friends.index', compact('friends', 'pendingRequests'));
    }

    public function store(Request $request)
    {
        $friend = Friend::create([
            'user_id' => Auth::user()->id,
            'friend_id' => $request->friend_id,
            'status' => 'pending'
        ]);

        return response()->json(['success' => true, 'message' => 'Friend request sent']);
    }

    public function update(Request $request, Friend $friend)
    {
        if ($friend->friend_id !== Auth::user()->id) {
            return response()->json(['success' => false, 'message' => 'Unauthorized']);
        }

        $friend->update(['status' => $request->status]);

        return response()->json(['success' => true, 'message' => 'Friend request ' . $request->status]);
    }

    public function destroy(Friend $friend)
    {
        if ($friend->user_id !== Auth::user()->id && $friend->friend_id !== Auth::user()->id) {
            return response()->json(['success' => false, 'message' => 'Unauthorized']);
        }

        $friend->delete();

        return response()->json(['success' => true, 'message' => 'Friend removed']);
    }
}

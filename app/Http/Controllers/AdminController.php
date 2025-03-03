<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->latest()->paginate(10);
        return view('admins.index',["admins" => $admins]);
    }

    public function create()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admins.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        $user = User::find($request->user_id);
        $user->update(['role' => 'admin']);

        return redirect()->route('admins.index')->with('success', 'Admin privileges granted successfully');
    }

    public function destroy(User $admin)
    {
        $admin->update(['role' => 'user']);
        return redirect()->route('admins.index')->with('success', 'Admin privileges removed successfully');
    }
}

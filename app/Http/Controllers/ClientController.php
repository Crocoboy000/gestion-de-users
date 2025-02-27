<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ClientController extends Controller
{
    /**
     * Display a listing of clients.
     */
    public function index(Request $request)
    {
        $query = User::where('role', 'client');

        // Search functionality
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $users = $query->paginate(10);

        return view('clients.index', compact('users'));
    }

    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created client in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $client = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',
            'status' => 'offline'
        ]);

        return redirect()->route('clients.index')
                         ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified client.
     */
    public function show(User $client)
    {
        // Ensure the user is a client
        if ($client->role !== 'client') {
            abort(404);
        }

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     */
    public function edit(User $client)
    {
        // Ensure the user is a client
        if ($client->role !== 'client') {
            abort(404);
        }

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     */
    public function update(Request $request, User $client)
    {
        // Ensure the user is a client
        if ($client->role !== 'client') {
            abort(404);
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$client->id],
            'status' => ['in:online,offline'],
        ]);

        $client->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status ?? $client->status
        ]);

        return redirect()->route('clients.index')
                         ->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified client from storage.
     */
    public function destroy(User $client)
    {
        // Ensure the user is a client
        if ($client->role !== 'client') {
            abort(404);
        }

        $client->delete();

        return redirect()->route('clients.index')
                         ->with('success', 'Client deleted successfully.');
    }
}

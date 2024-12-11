<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminUserController extends Controller
{

    public function index()
    {
        /** @var \App\Models\User $user */

        if (!Auth::user()->hasRole(roles: 'Admin')) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        /** @var \App\Models\User $user */

        if (!Auth::user()->hasRole(roles: 'Admin')) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $roles = \Spatie\Permission\Models\Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->has('role')) {
            $user->assignRole($request->role);
        }

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(string $id)
    {
        /** @var \App\Models\User $user */

        if (!Auth::user()->hasRole(roles: 'Admin')) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
        $user = User::findOrFail($id);
        $roles = \Spatie\Permission\Models\Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        /** @var \App\Models\User $user */

        if (!Auth::user()->hasRole(roles: 'Admin')) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);


        $user->name = $request->name;
        $user->email = $request->email;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();


        if ($request->has('role')) {
            $user->syncRoles($request->role);
        }

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /** @var \App\Models\User $user */

        if (!Auth::user()->hasRole(roles: 'Admin')) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        return view('guru.users', compact('users'));
    }

    public function index()
    {
        $users = User::all();
        return view('guru.users.index', compact('users'));
    }

    public function create()
    {
        return view('guru.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'kelas' => 'nullable',
            'password' => 'required|min:6'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'kelas' => $request->kelas,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('guru.dashboard')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return view('guru.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:guru,siswa',
            'kelas' => 'nullable|string|max:100',
        ]);

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'Kelas' => $request->kelas, // case-sensitive, sesuai nama kolom di database
        ]);

        return redirect()->route('users')->with('success', 'Data pengguna berhasil diperbarui.');
    }   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users')->with('success', 'Siswa berhasil dihapus');
    }
}

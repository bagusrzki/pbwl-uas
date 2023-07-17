<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $countUser = User::count();
        return view('users', [
            'users' => $users,
            'countUser' => $countUser,
            'username' => Auth::user()->name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('edit_pegawai', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = User::where('id', $request->id)->first();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->save();

        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        return view('delete_pegawai', [
            'user' => $user,
        ]);
    }

    public function destroy(Request $r)
    {
        $user = User::where('id', $r->id)->first();
        $user->delete();
        return redirect('/pegawai');   
    }
}

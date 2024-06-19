<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function database()
    {
        if (Auth::user()->name == 'admin') { //solo l account col nome "admin" puo accedere al database
            $users = User::all();
            return view('database', compact('users'));
        }

        return redirect("/");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Utente eliminato con successo.');
    }
}

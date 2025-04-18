<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100|unique:users,email',
            'name' => 'required|string|max:255',
            'password' => 'required|min:6|confirmed',
            'psw-repeat' => 'required|min:6|same:password',
        ]);
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return back()->with('success', 'Потребителят е записан в базата данни');
    }
}

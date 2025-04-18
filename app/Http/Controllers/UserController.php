<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    //

    function store(Request $request)
    {
        $validated = request()->validate([
            'email' => 'required|max:100|email',
            'name' => 'required',
            'password' => 'required|min:3',
            'psw-repeat' => 'required|min:3|same:password'
        ]);
        User::create($validated);
        return back()->with('success', 'Потребителят е записан в базата данни');
    }
}

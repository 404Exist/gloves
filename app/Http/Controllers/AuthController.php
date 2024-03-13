<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request)
    {
        $user = User::create($request->toArray());

        auth()->login($user);

        return redirect()->back();
    }

    public function login(LoginRequest $request)
    {
        if (! auth()->attempt($request->toArray())) {
            return response()->json(['message'=> 'These credentials do not match our records.'], 422);
        }

        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->back();
    }
}

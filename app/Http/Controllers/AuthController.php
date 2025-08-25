<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        User::create($request->all());
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('multi-app-token')->plainTextToken;
            Auth::login($user);
            return redirect()->route('home')->with([
                'token' => $token,
                'user' => $user,
            ]);
        }
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}

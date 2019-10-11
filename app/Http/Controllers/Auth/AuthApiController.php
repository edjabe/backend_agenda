<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthApiController extends Controller
{
    public function login() {
        $credentials = request(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json([
            'token' => $token,
            'expires' => auth('api')->factory()->getTTL() * 60,
            'usuario' => auth('api')->user()
        ]);
    }
}

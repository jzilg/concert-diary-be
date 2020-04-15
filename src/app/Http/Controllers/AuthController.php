<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Cookie;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('name', $request->json('username'))->first();
        $isAuthenticated = Hash::check($request->json('password'), $user->password);

        if ($isAuthenticated) {
            return response()->json($user->api_token);
        }

        return response('Unauthorized.', 401);
    }
}

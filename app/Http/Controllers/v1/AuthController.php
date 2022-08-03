<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\Auth\AuthRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login(AuthRequest $request): JsonResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];
        if(!Auth::attempt($credentials)){
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }
        $user = User::where('email', $email)->first();

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken($email)->plainTextToken
        ]);
    }
}

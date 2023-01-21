<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Whoops\Handler\PlainTextHandler;

class AuthenticationController extends Controller
{


    public function login(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                "error" => "Invaild input"
            ], 400);
        }

        return $user->createToken($user->email)->plainTextToken;
    }

    public function register(Request $req)
    {
        $user = User::where("email", $req->email)->first();
        if ($user) {
            return response()->json([
                "error" => "User with this given email address exist"
            ], 400);
        }

        try {
            $user = User::create([
                "name" => $req->name,
                "email" => $req->email,
                "password" => Hash::make($req->password),

            ]);
            return $user->createToken($user->email)->plainTextToken;
        } catch (Exception $ex) {
            return response()->json([
                "error" => $ex->getMessage()
            ], 500);
        }
    }

    public function logout(Request $req)
    {
        $req->user()->currentAccessToken()->delete();
        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SoicaliteAuthController extends Controller
{
    public function redirectUrl(string $driver)
    {
        return Socialite::driver($driver)->stateless()->redirect()->getTargetUrl();
    }

    public function callback(string $driver)
    {
        $socialiteUser = Socialite::driver($driver)->stateless()->user();

        $user = User::updateOrCreate([
            'provider_id' => $socialiteUser->id,
        ], [
            'name' => $socialiteUser->getName(),
            'email' => $socialiteUser->getEmail(),
            'provider' => $driver,
        ]);

        $token = $user->createToken('gloves-app')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response);
    }
}

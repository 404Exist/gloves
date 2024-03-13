<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SoicaliteAuthController extends Controller
{
    public function redirect(string $driver)
    {
        return Socialite::driver($driver)->redirect();
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

        auth()->login($user);

        return redirect()->back();
    }
}

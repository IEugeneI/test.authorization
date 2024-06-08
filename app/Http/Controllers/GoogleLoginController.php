<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        dd($googleUser);
//        $user = User::where('email', $googleUser->email)->first();
//        if(!$user)
//        {
//            $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999))]);
//        }
//
//        Auth::login($user);
//
//        return redirect(RouteServiceProvider::HOME);
    }
}

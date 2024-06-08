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


    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->stateless()->userFromToken('ya29.a0AXooCguxf0KHcHJWtTOVk7llBX6ihJ0FKetTVYvFbwVO6-IoGSa9mosK8X2Ow1JwX1yTvyaDjqGTzRHANxJL5IQFIG3V4HiUM-V8jZMHvho2f9EjoBa1SBue8kBgCNIYDxNy8L6FgsUJi4pb8Jsth4SxgEKGr5vhgAaCgYKAasSARESFQHGX2Mi5yb_NHQYYp2oe6stPi18vA0169')->user();
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

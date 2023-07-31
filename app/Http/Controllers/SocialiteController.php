<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Rules\MatchOldPassword;
use Hash;
use Auth;
use Socialite;


use Exception;

class SocialiteController extends Controller
{
//Google Login
public function redirectToGoogle(){
    return Socialite::driver('google')->redirect();
}

    //Google callback
    public function handleGoogleCallback(){
        try{
    $user = Socialite::driver('google')->user();
    $finduser= User::where('Socialite',$user->id)->first();
        if($finduser){
        Auth::login($finduser);
        return response()->json($finduser);;
    }else{
        $newUser= User::create([
            'name'=>$user->name,
            'email'=>$user->email,
            'social_id'=>$user->id,
            'social_tupe'=>"google",
            'password'=>Hash::make('my-google'),
        ]);
        Auth::login( $newUser);
        return redirect()->route('');

    }}
    catch(Exception $e){
        dd($e->getMessage());
    }

    }}

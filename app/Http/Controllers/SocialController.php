<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        $socialiteUser = Socialite::driver($provider)->stateless()->user();
        $user = User::where('email', $socialiteUser->email)->first();
        
        if (!$user) {
            // Pindahkan avatar ke direktori storage
            $avatarPath = 'public/avatar/' . $socialiteUser->id . '/';
            $avatarFilename = $socialiteUser->id . '_avatar.jpg';
            Storage::putFileAs($avatarPath, $socialiteUser->avatar, $avatarFilename);
            $user = User::create([
                'name' => $socialiteUser->name,
                'email' => $socialiteUser->email,
                'avatar' => $avatarPath . $avatarFilename,
                'provider_id' => $socialiteUser->id,
                'provider' => $provider,
                'password' => bcrypt(12345678),
            ]);
        }    
        Auth::login($user,true);
        return redirect()->route('home-page');
    }
}

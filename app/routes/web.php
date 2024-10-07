<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ======================== REGISTRAR COM O GOOGLE ========================= */

Route::get('/login/google/redirect', function(){
    return Socialite::driver('google')->redirect();
})->name('login.google.redirect');


Route::get('/auth/google/calback', function(){
    $googleUser =  Socialite::driver('google')->user();

    $user = User::where('email', $googleUser->email)->first();
    
    if ($user) {
        $user->update([ 
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);
    } else {
        $user = User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => md5(Str::random(25)),
            'google_id' => $googleUser->id,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);
    }
 
    Auth::login($user);
 
    return redirect('/home');
});


/* ======================== REGISTRAR COM O FACEBOOK ========================= */

Route::get('/login/facebook/redirect', function(){
    return Socialite::driver('facebook')->redirect();
})->name('login.facebook.redirect');

Route::get('/auth/facebook/calback', function(){
    $facebookUser =  Socialite::driver('facebook')->user();

    $user = User::where('email', $facebookUser->email)->first();
    
    if ($user) {
        $user->update([ 
            'facebook_token' => $facebookUser->token,
            'facebook_refresh_token' => $facebookUser->refreshToken,
        ]);
    } else {
        $user = User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'password' => md5(Str::random(25)),
            'facebook_id' => $facebookUser->id,
            'facebook_token' => $facebookUser->token,
            'facebook_refresh_token' => $facebookUser->refreshToken,
        ]);
    }
 
    Auth::login($user);
 
    return redirect('/home');
});

/* ======================== REGISTRAR COM O LINKEDIN ========================= */

Route::get('/login/linkedin/redirect', function(){
    return Socialite::driver('linkedin')->redirect();
})->name('login.linkedin.redirect');

Route::get('/auth/linkedin/calback', function(){
    $linkedinUser =  Socialite::driver('linkedin')->user();

    $user = User::where('email', $linkedinUser->email)->first();
    
    if ($user) {
        $user->update([ 
            'linkedin_token' => $linkedinUser->token,
            'linkedin_refresh_token' => $linkedinUser->refreshToken,
        ]);
    } else {
        $user = User::create([
            'name' => $linkedinUser->name,
            'email' => $linkedinUser->email,
            'password' => md5(Str::random(25)),
            'linkedin_id' => $linkedinUser->id,
            'linkedin_token' => $linkedinUser->token,
            'linkedin_refresh_token' => $linkedinUser->refreshToken,
        ]);
    }
 
    Auth::login($user);
 
    return redirect('/home');
});














Route::get('/', function () {
    if(auth()->user()){
        auth()->user()->assignRole('admin');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function loginWithGithub(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function doLoginWithGithub(): \Illuminate\Http\RedirectResponse
    {
        try {
            $user = Socialite::driver('github')->user();
        }catch (\Exception $e) {
            return Redirect::to('auth/login/github');
        }

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return Redirect::to('/');

    }

    public function findOrCreateUser($user) {
        if ($existingUser = User::where('github_id', $user->id)->first()) {
            return $existingUser;
        }

        return User::create([
           'name' => $user->name,
           'email' => $user->email,
           'avatar' => $user->avatar,
           'github_id' => $user->id
        ]);
    }

    public function loginWithFacebook(){}
    public function doLoginWithFacebook(){}
}

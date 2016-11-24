<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
public function redirectToProvider()
{
    return Socialite::with('facebook')->fields([
        'first_name', 'last_name', 'email', 'gender', 'birthday', 'locale'
    ])->scopes([
        'email', 'user_birthday'
    ])->redirect();
}

 public function handleProviderCallback(){
    $user = Socialite::with('facebook')->fields([
        'name', 'email', 'gender', 'verified', 'first_name', 'last_name', 'birthday', 'locale'
    ])->user();

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->view('home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_id', $facebookUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar,
            'gender' => $facebookUser->gender,
            'birthday' => $facebookUser->birthday,
            'locale' => $facebookUser->locale,
        ]);
    }
}

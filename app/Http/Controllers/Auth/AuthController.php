<?php

namespace Cinema\Http\Controllers\Auth;

use Illuminate\Support\Facades\Redirect;
use Cinema\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Cinema\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Facades\Socialite;
use Log;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->scopes(['public_profile', 'email'])->redirect();
    }

    public function handleProviderCallback()
    {
        $userFace = Socialite::driver('facebook')->user();
        $userBase=User::where('email',$userFace->getId())->first();

        if($userBase){
            Auth::login($userBase);
        }else{
            $userCreate=User::create([
                "name" => $userFace->getName(),
                "email" => $userFace->getId(),
                "password" => $userFace->getId(),
            ]);
            Auth::login($userCreate);
        }
        return Redirect::to('tutorial');

    }

}

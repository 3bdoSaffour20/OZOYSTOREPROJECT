<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (auth()->user()->type == '1')  {
            return '/dashboard/index';

        }
        
       return  redirect()->route('home');
        
    }

    public function login(Request $request) {
        $cred = $request->only('email', 'password');
        if(Auth::attempt($cred)) {
            if(Auth::user()->type == '1') {
                return redirect('/dashboard/index');
            }
            elseif(Auth::user()->type == '0') {
                return redirect('/home');
            }
        }
        else {
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}

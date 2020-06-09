<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
     protected $redirectTo = '/admin/movies/shuffle';


    // /**
    //  * login
    //  */
    //  public function login(Request $request) //requestはnameが入る
    //  {
    //   \Debugbar::info("test");//
    //   $this->validateLogin($request); //上書き
     
    //   return redirect('/admin/movies/shuffle');
    //   }
    
//    protected function validateLogin(Request $request)
//   {        
//      $this->validate($request, [
//      $this->username() => 'required|string',
//        ]);
//    }

    // protected function credentials(Request $request)
    // {
    //     return array_merge($request->only($this->username()));
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function username()
    {
        return 'name';
    }
    // protected function attemptLogin(Request $request)
    // {
    //   return $this->guard()->attempt(
    //     $this->credentials($request), $request->filled('remember')
    //   );
    // }
    

}
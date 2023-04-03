<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string',//validasi kolom username
            //Tapi kolom ini bisa berisi email atau username
            'password' => 'required|string|min:6',
        ]);

//akan mengecek, jika input dari username merupakan format email 
//kemudian akan terjadi proses authentication menggunakan email, 
// selain email akan menggunakan username
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //menampung informasi login, kolom type pertama bersifat dinamis
        //berdasarkan value  dari pengecekan di atas
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        //saat mulai melakukan login
        if(auth()->attempt($login)) {
            //jika berhasil akan masuk ke halaman home
            return redirect()->route('home');
        }
        //jika salah, akan tetap di halaman login dan muncul notifikasi
        return redirect()->route('login')->with(['error' => 'username/password salah!']);
    }
   
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

    
}

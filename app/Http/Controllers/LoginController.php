<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Hoa\Console;
use Inertia\Inertia;


class LoginController extends Controller
{

    public function loginPage(){
        return view('pages/login');
    }

    public function registerPage(){
        return view('pages/register');
    }

    public function autentikasiLogin(Request $request){

        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]
        );

        if(Auth::attempt($validateData)){
            $request->session()->regenerate();
                if(Auth::user()->role === 'user'){
                    $request->session()->regenerate();
                    return redirect()->intended('/user');
                }
                else if(Auth::user()->role === 'admin'){
                    $request->session()->regenerate();
                    return redirect()->intended('/admin');
                }
            }
        
        return redirect()->route('login')->with('failLogin', 'Login Failed');
    }

    public function register(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'rePassword' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'rePassword.required' => 'Password tidak boleh kosong',
        ]);
            
            if(User::where('username', $validateData['username'])->exists()){
                return redirect()->back()->with('akunAda', 'Akun sudah ada');
            }
    
            $user = new User();
            $user->nama = $validateData['nama'];
            $user->role = 'user';
            $user->username = $validateData['username'];
            $user->password = $validateData['password'];
            $user->save();
            return redirect('/')->with('successCreateData', 'Berhasil menambah Data');

        


    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

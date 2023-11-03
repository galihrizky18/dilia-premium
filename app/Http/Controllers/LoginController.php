<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'noHp' => 'required|numeric',
        ],[
            'first_name.required' => 'First Name tidak boleh kosong',
            'last_name.required' => 'Last name tidak boleh kosong',
            'provinsi.required' => 'Provinsi tidak boleh kosong',
            'kota.required' => 'Kota tidak boleh kosong',
            'noHp.required' => 'No Hp tidak boleh kosong',
            'noHp.numeric' => 'No Hp Harus Angka',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
    
        $jumlahhUser = Pelanggan::count();

        if(User::where('username', $validateData['username'])->exists()){
            return redirect()->back()->with('akunAda', 'Akun sudah ada');
        }
    
        $user = new User();
        $user->id_user = $validateData['first_name'].'_'.$validateData['last_name'].'_'.($jumlahhUser+1);
        $user->role = 'user';
        $user->status = 'non-premium';
        $user->username = $validateData['username'];
        $user->password = bcrypt($validateData['password']); // Enkripsi password
        $user->save();
    
        $pelanggan = new Pelanggan();
        $pelanggan->id_pelanggan = $validateData['first_name'].'_'.$validateData['last_name'].'_'.($jumlahhUser+1);
        $pelanggan->first_name = $validateData['first_name'];
        $pelanggan->last_name = $validateData['last_name'];
        $pelanggan->provinsi = $validateData['provinsi'];
        $pelanggan->kota = $validateData['kota'];
        $pelanggan->noHp = (string) $validateData['noHp']; // Simpan nomor HP sebagai string
        $pelanggan->save();
    
        return redirect('/')->with('successCreateData', 'Berhasil menambah Data');
    }
    


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

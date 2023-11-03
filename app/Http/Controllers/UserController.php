<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $currentUser = Auth::user();
        $dataTesti = Testimonial::all();
        return view('pages/user/dashboardUser', compact('dataTesti', 'currentUser'));
    }

    public function jadiPremium($id) {
        $user = User::where('id_user', $id)->first();
        $user->status = 'premium';
        $user->save();
    
        return redirect()->back()->with('updateBerhasil', 'Data Berhasil Menjadi Premium');
    }
}

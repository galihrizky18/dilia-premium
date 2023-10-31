<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function dashboard(){
        $userCurrent = Auth::user();
        $dataAdmin = $userCurrent->admins->first();
        return view('pages/admin/dashboardAdmin', compact('userCurrent', 'dataAdmin'));
    }
    public function kelolaUser(){
        $userCurrent = Auth::user();
        $dataAdmin = $userCurrent->admins->first();
        $dataUser = Pelanggan::all();

        return view('pages/admin/kelolaUser', compact('userCurrent', 'dataAdmin', 'dataUser'));
    }
    public function filterStatus(Request $request){
        $userCurrent = Auth::user();
        $dataAdmin = $userCurrent->admins->first();
        $status = $request->input('status');
        $users = User::where('status', $status)->get();

        if($status == 'all'){
            $dataUser = Pelanggan::all();
        } else{
            // Mengumpulkan data pelanggan dari setiap objek User
            $dataUser = collect();
            foreach ($users as $user) {
                $dataUser = $dataUser->merge($user->pelanggans);
            }
        }
        return view('pages/admin/kelolaUser', compact('userCurrent', 'dataAdmin', 'dataUser'));
    }

    public function updateUser(Request $request, $id){

        $validateData = $request->validate([
            'username' => 'string|nullable',
            'status' => 'string|nullable',
            'firstName' => 'string|nullable',
            'lastName' => 'string|nullable',
            'noHp' => 'numeric|nullable',
        ],[
            'username.string' => 'Username harus berupa huruf',
            'firstName.string' => 'Nama harus berupa huruf',
            'lastName.string' => 'Nama harus berupa huruf',
            'status.string' => 'Status harus berupa huruf',
            'noHp.numeric' => 'No Hp tidak boleh kosong',
        ]);

        $user = User::where('id_user', $id)->first();
        $user->username = $validateData['username'];
        $user->status =$validateData['status'];
        $user->status = $validateData['status'];
        $user->save();

        $pelanggan = Pelanggan::where('id_pelanggan', $id)->first();
        $pelanggan->first_name = $validateData['firstName'];
        $pelanggan->last_name = $validateData['lastName'];
        $pelanggan->noHp = $validateData['noHp'];
        $pelanggan->save();

        return redirect()->back()->with('successUpdate', 'Update Data Berhasil');

        

    }








}

<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

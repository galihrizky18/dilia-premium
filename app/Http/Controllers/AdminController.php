<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $userCurrent = Auth::user();
        return view('pages/admin/dashboardAdmin', compact('userCurrent'));
    }
}

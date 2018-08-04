<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardCtrl extends Controller
{
    public function home(){
        return view('sistema.dashboard');
    }
}

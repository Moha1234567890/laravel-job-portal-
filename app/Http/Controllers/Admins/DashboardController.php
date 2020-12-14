<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
class DashboardController extends Controller
{



    public function redirect() {

        return view('admins.dashboard');
    }


}

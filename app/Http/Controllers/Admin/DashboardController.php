<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return "Sei loggato";
    }

    public function account(){
        $user = Auth::user();
        return $user;
    }
}

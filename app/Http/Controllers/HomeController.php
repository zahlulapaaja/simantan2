<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::get();
        // return view('auth/sign-in');
        return view('index2', compact('data'));
    }
}

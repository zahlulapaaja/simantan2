<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->getRoleNames());
        // error tapi bisa aja dipanggil
        // utk tes hapus dulu satu role, supaya ga bingung ketika ngoding nanti
        return view('index');
    }
}

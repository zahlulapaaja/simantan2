<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // permissionnya dipindah aja ke construct
        $this->middleware(['permission:view_dashboard']);
        // $this->middleware(['role_or_permission:writer|view_dashboard']);
    }

    public function index()
    {
        // dd(auth()->user()->getRoleNames());
        // error tapi bisa aja dipanggil
        // utk tes hapus dulu satu role, supaya ga bingung ketika ngoding nanti

        // permission dengan menggunakan controller
        // if (auth()->user()->can('view_dashboard')) {
        return view('index');
        // }
        return abort(403);
    }
}

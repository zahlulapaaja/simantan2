<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataTableController extends Controller
{
    public function clientside(Request $request)
    {
        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
        }
        $data = $data->get();
        // return view('auth/sign-in');
        return view('datatable.clientside', compact('data', 'request'));
    }

    public function serverside(Request $request)
    {

        if ($request->ajax()) {
            $data = new User;
            $data = $data->latest();

            return DataTables::of($data)
                ->addColumn('checklist', function ($data) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" >
                                        </div>';
                })
                ->addColumn('name', function ($data) {
                    return '<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <img src="' . Storage::url('avatar-user/' . $data->image) . '" alt="gambar">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">' .  $data->name . '</a>
                                            <span>' . $data->email . '</span>
                                        </div>';
                })
                ->addColumn('role', function ($data) {
                    return 'ini role';
                })
                ->addColumn('created_at', function ($data) {
                    return $data->created_at;
                })
                ->addColumn('2step', function ($data) {
                    return '<div class="badge badge-light-success fw-bold">' . $data->id . '</div>';
                })
                ->addColumn('email', function ($data) {
                    return $data->email;
                })
                ->addColumn('action', function ($data) {
                    return '<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="' . route('user.edit', ['id' => $data->id]) . '" class="menu-link px-3">Edit</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                        </div>';
                })
                ->rawColumns(['checklist'], ['action'])
                ->escapeColumns(['checklist'], ['name'], ['2step'], ['action'])
                ->make(true);

            // Ini tombol action masih belum bisa diklik, dan ketika fresh page belum langsung muncul data
        }

        return view('datatable.serverside', compact('request'));
    }
}

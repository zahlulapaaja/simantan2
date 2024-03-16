<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $data = User::get();
        // return view('auth/sign-in');
        return view('users.index', compact('data'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar'    => 'required|mimes:png,jpg,jpeg|max:2048',
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $avatar     = $request->file('avatar');
        $filename   = date('Y-m-d').$avatar->getClientOriginalName();
        $path       = 'avatar-user/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($avatar));


        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);
        $data['image'] = $filename;

        // dd($data);

        User::create($data);
        return redirect()->route('user.list');
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        // dd($data);
        return view('users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name'  => 'required',
            'password'  => 'nullable'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        // dd($data);

        User::whereId($id)->update($data);
        return redirect()->route('user.list');
    }

    public function delete(Request $request, $id)
    {
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('user.list');

        // echo "<script>console.log('hayolo')</script>";
    }
}

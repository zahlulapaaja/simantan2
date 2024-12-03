<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
        }

        // $data = $data->withTrashed();
        // $data = $data->onlyTrashed();
        $data = $data->get();
        // return view('auth/sign-in');

        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('pdf.users', ['data' => $data]);
            // return $pdf->download('Data Users.pdf');
            return $pdf->stream('Data Users.pdf');
        }

        return view('users.index', compact('data', 'request'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar'    => 'mimes:png,jpg,jpeg|max:2048',
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $avatar     = $request->file('avatar');
        $filename   = date('Y-m-d') . $avatar->getClientOriginalName();
        $path       = 'avatar-user/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($avatar));


        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);
        $data['image'] = $filename;

        // dd($data);

        User::create($data);
        return redirect()->route('user.list');
    }

    public function detail(Request $request, $id)
    {
        $data = User::find($id);

        // dd($data);
        return view('users.detail', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        // dd($data);
        return view('users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $find = User::find($id);
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name'  => 'required',
            'password'  => 'nullable',
            'avatar'    => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $avatar     = $request->file('avatar');

        if ($avatar) {
            $filename   = date('Y-m-d') . $avatar->getClientOriginalName();
            $path       = 'avatar-user/' . $filename;

            if ($find->image) {
                Storage::disk('public')->delete('avatar-user/' . $find->image);
            }
            Storage::disk('public')->put($path, file_get_contents($avatar));

            $data['image'] = $filename;
        }

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        // dd($data);

        $find->update($data);
        return redirect()->route('user.list');
    }

    public function delete(Request $request, $id)
    {
        // dd($id);
        $data = User::find($id);


        if ($data) {
            $data->delete();
            // $data->forceDelete(); // ini ga memedulikan soft delete
        }

        return redirect()->route('user.list');

        // echo "<script>console.log('hayolo')</script>";
    }
}

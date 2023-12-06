<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('admin.users', ['users' => users::get()]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'roleId' => 'required',
        ]);

        $user = new users();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->roleId = $request->roleId;

        $user->save();
        return back()->with(['sucess' => 'user created successfully']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'roleId' => 'required',
        ]);

        $user = users::where('id', $id)->first();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->roleId = $request->roleId;

        $user->save();
        return back()->with(['sucess' => 'user updateds successfully']);
    }

    public function delete($id)
    {
        $user = users::where('id', $id)->first();
        $user->delete();
        return back()->with(['sucess' => 'user delete successfully']);
    }
}

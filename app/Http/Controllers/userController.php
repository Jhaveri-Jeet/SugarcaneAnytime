<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\orders;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        return view('admin.users', ['users' => users::get()]);
    }

    public function loginPage()
    {
        return view('admin.login');
    }

    public function checkAdmin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'roleId' => 1])) {
            return redirect('admin/main');
        } else {
            return back()->with(['error' => 'Invalid email or password']);
        }
    }

    public function checkUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'roleId' => 2])) {
            return redirect('/');
        } else {
            return back()->with(['error' => 'Invalid email or password']);
        }
    }

    public function userInsert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        $hashedPassword = bcrypt($request->password);
        $user = new users();
        $user->name = $request->name;
        $user->password = $hashedPassword;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = '';
        $user->roleId = 2;
        $user->save();
        return redirect('/login');
    }

    public function insert(UserRequest $request)
    {
        $hashedPassword = bcrypt($request->password);
        $user = new users();
        $user->name = $request->name;
        $user->password = $hashedPassword;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->roleId = 1;
        $user->save();
        return redirect('/admin/login');
    }

    public function update(Request $request, $id)
    {
        $user = users::where('id', $id)->first();
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;

        $user->save();
        return back()->with(['sucess' => 'user updated successfully']);
    }

    public function delete($id)
    {
        $user = users::where('id', $id)->first();
        $user->delete();
        return back()->with(['sucess' => 'user delete successfully']);
    }

    public function logout(Request $request)
    {
        $path = $request->path();
        if ($path === "admin/logout") {
            Auth::logout();
            return redirect('admin/login');
        } else {
            Auth::logout();
            return redirect('/login');
        }
    }

    public function profileDisplay()
    {
        $userId = Auth::user()->id;
        $user = users::where('id', $userId)->first();
        $totalOrderPlaced = orders::where('userId', $userId)->count();
        $totalAmountOfOrderPlaced = orders::where('userId', $userId)->sum('price');
        $totalPendingOrder = orders::where('userId', $userId)->where('status', 'pending')->sum('price');
        return view('/profile', ['user' => $user, 'totalOrderPlaced' => $totalOrderPlaced, 'totalAmountOfOrderPlaced' => $totalAmountOfOrderPlaced, 'totalPendingOrder' => $totalPendingOrder]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function insert(Request $request)
    {
        $request . validator([
            'name' => 'required'
        ]);

        $role = new roles();
        $role->name = $request->name;

        $role->save();
        return back()->with(['success' => 'role created successfully']);
    }
}

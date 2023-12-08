<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\roles;

class roleController extends Controller
{
    public function insert(RoleRequest $request)
    {
        $role = new roles();
        $role->name = $request->name;

        $role->save();
        return back()->with(['success' => 'role created successfully']);
    }
}

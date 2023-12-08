<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index(){
        return view('shop', ['products' => products::get()]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heroSectionController extends Controller
{
    public function showHeroSection(Request $request)
    {
        $path = $request->path();

        // dd($path);
        if ($path === '/') {
            $data = [
                'title' => "Modern Interior Design Studio",
                'description' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                vulputate velit imperdiet dolor tempor tristique.',
            ];

            return view('index', ['data' => $data]);
        } elseif ($path === 'aboutUs') {
            $data = [
                'title' => "About Us",
                'description' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                vulputate velit imperdiet dolor tempor tristique.',
            ];

            return view('/aboutUs', ['data' => $data]);
        } elseif ($path === 'services') {
            $data = [
                'title' => "Services",
                'description' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                vulputate velit imperdiet dolor tempor tristique.',
            ];

            return view('/services', ['data' => $data]);
        } elseif ($path === 'contactUs') {
            $data = [
                'title' => "Contact Us",
                'description' => 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                vulputate velit imperdiet dolor tempor tristique.',
            ];

            return view('/contactUs', ['data' => $data]);
        }
    }
}

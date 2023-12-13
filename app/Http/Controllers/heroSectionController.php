<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class heroSectionController extends Controller
{
    public function showHeroSection(Request $request)
    {
        $path = $request->path();

        // dd($path);
        if ($path === '/') {
            $data = [
                'title' => "Fresh Sugarcane Juice",
                'description' => 'Indulge in the natural sweetness of life with Sugarcane Anytime. Our sugarcane juice is a celebration of purity and freshness, straight from the fields to your glass.',
                'feedbacks' => feedback::get(),
            ];

            return view('index', ['data' => $data]);
        } elseif ($path === 'aboutUs') {
            $data = [
                'title' => "About Us",
                'description' => 'Welcome to Sugarcane Anytime, where we transform the simple pleasure of sugarcane juice into a journey of pure delight. Our story is one of passion, purity, and a commitment to delivering the finest sugarcane experience to your glass.',
                'feedbacks' => feedback::get(),
            ];

            return view('/aboutUs', ['data' => $data]);
        } elseif ($path === 'contactUs') {
            $data = [
                'title' => "Contact Us",
                'description' => 'Contact us for FRESH, HEALTHY & TASTY sugarcane juice.',
            ];

            return view('/contactUs', ['data' => $data]);
        }
    }
}

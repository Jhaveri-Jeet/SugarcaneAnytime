<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback', ['feedbacks' => feedback::latest()->get()]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $feedback = new feedback();
        $feedback->title = $request->title;
        $feedback->description = $request->description;

        $feedback->save();
        return back()->with(['success' => 'feedback created successfully']);
    }

    public function delete($id)
    {
        $feedback = feedback::where('id', $id)->first();
        $feedback->delete();

        return back();
    }
}

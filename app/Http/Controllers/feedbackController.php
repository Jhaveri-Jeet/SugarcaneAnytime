<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\feedback;

class feedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback', ['feedbacks' => feedback::latest()->get()]);
    }

    public function insert(FeedbackRequest $request)
    {
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

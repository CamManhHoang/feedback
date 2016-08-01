<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $answer = new Answer();

        $answer->content = $request->content;
        $answer->user_id = $request->user_id;
        $answer->question_id = $request->question_id;

        $answer->save();

        $request->session()->flash('success', 'New question has been created!');

        return back();

    }
}

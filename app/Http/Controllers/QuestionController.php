<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'store']);
    }

    public function index($id)
    {
        $session = Session::findOrFail($id);

        return view('questions.index', compact('session'));
    }

    public function store(QuestionRequest $request)
    {
        $question = new Question;

        $question->content = $request->content;
        $question->user_id = $request->user_id;
        $question->session_id = $request->session_id;;

        $question->save();

        $request->session()->flash('success', 'New question has been created!');

        return back();

    }

    public function listAllSessions()
    {
        $sessions = Session::all();

        return view('questions.listSessions', ['sessions' => $sessions]);
    }
}

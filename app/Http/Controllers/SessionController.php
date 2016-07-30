<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Http\Requests;
use App\Http\Requests\SessionRequest;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('session');
    }

    public function index()
    {
        $sessions = Session::all();

        return view('sessions.index', ['sessions' => $sessions]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(SessionRequest $request)
    {
        $session = new Session();

        $session->name = $request->name;
        $session->user_id = $request->user_id;

        if ($request->has('active')) {
            $session->active = 1;
        }

        $session->save();

        $request->session()->flash('success', 'New session has been created!');

        return back();

    }
}

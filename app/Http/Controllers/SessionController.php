<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('session');
    }

    public function index()
    {
        return 'hello';
    }
}

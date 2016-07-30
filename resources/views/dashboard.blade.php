@extends('layouts.app')

@section('style')
    <link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/custom.css">
@endsection

@section('content')
    <div class="wrapper">
        <div class="sidebar">

            <div class="sidebar-wrapper" id="admin-sidebar">

                <ul class="nav">

                    <li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                        <a href="/dashboard">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="divider"></li>

                    @if (Auth::check() && Auth::user()->is_professor())
                        <li class="{{ Request::is('preside/sessions*') ? 'active' : '' }}">
                            <a href="/preside/sessions">
                                <i class="pe-7s-note2"></i>
                                <p>Sessions List</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @yield('component')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="/js/light-bootstrap-dashboard.js"></script>
@endsection

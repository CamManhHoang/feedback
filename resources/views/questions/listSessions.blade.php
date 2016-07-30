@extends('layouts.app')

@section('title')
    All Sessions
@stop

@section('style')
    <link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/custom.css">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div id="content">

                <h2>All Sessions</h2>

                @foreach ($sessions as $session)

                    <div class="question_list">
                        <span class="answers_total">
                        <a href="{{ url('/sessions/' . $session->id . '/questions') }}">{{ $session->questions->count() }} </a> {{ $session->questions->count() > 1 ? 'Questions' : 'Question' }}
                        </span>

                        <h3>
                            <a href="{{ url('/sessions/' . $session->id . '/questions') }}"> {{ $session->name }}</a>
                        </h3>
                        <p>
                            <span class="user"><i class="fa fa-user"></i>
                                Started by: <strong>{{ $session->user->name }}</strong>
                            </span>
                            <span><i class="fa fa-check"></i>
                                Active: <strong>{{ $session->active ? 'Yes' : 'No' }}</strong>
                            </span>
                        </p>


                    </div> <!-- question #end -->

                @endforeach

            </div>
        </div>
    </div>
@endsection

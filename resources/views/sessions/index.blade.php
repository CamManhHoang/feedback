@extends('dashboard')

@section('title')
    Session Management
@stop

@section('component')

    @if (Auth::check() && Auth::user()->is_professor())
        <div class="row">
            <div class="col-md-6">
                <a href='/preside/sessions/create'><button class="btn btn-success"><i class="fa fa-plus-square"></i> New Session</button></a>
            </div>
        </div>
        <hr/>
    @endif

    <h3>All Sessions</h3>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <td><strong>Name</strong></td>
                <td><strong>Active</strong></td>
                <td><strong>Started by</strong></td>
                <td><strong>Number of Questions</strong></td>
                </thead>
                <tbody>
                    @foreach ($sessions as $session)
                        <tr>
                            <td><a href="{{url('/sessions/' . $session->id . '/questions')}}" >{{$session->name}}</a></td>
                            <td>{{ $session->active ? 'Yes' : 'No' }}</td>
                            <td>{{ $session->user->name }}</td>
                            <td>{{ $session->questions->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
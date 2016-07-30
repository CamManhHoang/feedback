@extends('dashboard')

@section('title')
    Session Management
@stop

@section('component')

    <div class="panel panel-default">
        <div class="panel-heading">Create New Session</div>
        <div class="panel-body">

            @include('layouts.partials.errors')
            @include('layouts.partials.success')

            {!! Form::open(['route' => 'preside.sessions.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

            {{ Form::hidden('user_id', Auth::user()->id) }}

            <div class="form-group">
                {{ Form::label('name', 'Session Name', ['class' => 'col-md-4 control-label']) }}
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'value' => old('session')]) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    {{ Form::checkbox('active', 1) }} Active
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    {{ Form::button('<i class="fa fa-plus-circle"></i> ' . 'Create', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop
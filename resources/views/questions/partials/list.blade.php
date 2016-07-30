@include('layouts.partials.errors')
@include('layouts.partials.success')

<div class="row">
<div class="col-md-6">
    <a class="b_askquestions" id='hideshow' value='show/hide'>Ask a Question</a>

    {!! Form::open(['route' => 'questions.store', 'method' => 'POST', 'class' => 'form-horizontal toggle-form']) !!}

    {{ Form::hidden('user_id', Auth::user()->id) }}
    {{ Form::hidden('session_id', $session->id) }}

    <div class="form-group">
        {{ Form::label('name', 'Content', ['class' => 'col-md-3 control-label']) }}
        <div class="col-md-8">
            {!! Form::textarea('content', null, ['class' => 'form-control text-area-form', 'value' => old('session')]) !!}
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

@foreach ($session->questions as $question)
    <div class="question_list">
        <span class="answers_total">
        <a href="#">5</a> Answers
        </span>

        <h3>
            <a href="">{{ $question->content }}</a>
        </h3>
        <p>
            <span class="user"><i class="fa fa-user"></i>
                Asked by: <strong>{{ $question->user->name }}</strong>
            </span>

            <span><i class="fa fa-clock-o"></i>
                Time: <strong>{{ $question->created_at->diffForHumans() }}</strong>
            </span>
        </p>

    </div> <!-- question #end -->
@endforeach

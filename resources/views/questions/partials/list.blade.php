@include('layouts.partials.errors')
@include('layouts.partials.success')

<div class="row" xmlns="http://www.w3.org/1999/html">
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
        <a href="#">{{ $question->answers->count() }}</a> {{ $question->answers->count() > 1 ? 'Answers' : 'Answer' }}
        </span>

        <h3>
            <a href="">{{ $question->content }}</a>
        </h3>
        <p class="questions-list">
            <span class="user"><i class="fa fa-user"></i>
                Asked by: <strong>{{ $question->user->name }}</strong>
            </span>

            <span><i class="fa fa-clock-o"></i>
                Time: <strong>{{ $question->created_at->diffForHumans() }}</strong>
            </span>

        </p>

        <section class="comment-block">
            <div class="comment-title">
                <button type="button" class="reply_btn btn btn-info btn-circle text-uppercase" id="reply"
                        value='hide/show'><i class="fa fa-share"></i> Reply
                </button>
            </div>

            {!! Form::open(['route' => 'answers.store', 'method' => 'POST', 'class' => 'form-horizontal reply-form']) !!}

            {{ Form::hidden('user_id', Auth::user()->id) }}
            {{ Form::hidden('question_id', $question->id) }}

            <div class="form-group">
                {{ Form::label('content', 'Content', ['class' => 'col-md-3 control-label']) }}
                <div class="col-md-8">
                    {!! Form::textarea('content', null, ['class' => 'form-control text-area-form', 'value' => old('session')]) !!}
                </div>
            </div>

            <div class="form-group button-group">
                {{ Form::button('<i class="fa fa-plus"></i> ' . 'Post Answer', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                {{ Form::button('<i class="fa fa-times"></i> ' . 'Cancel', ['class' => 'cancel_btn btn btn-danger', 'value' => 'Cancel']) }}
            </div>

            {!! Form::close() !!}
        </section>

        @foreach ($question->answers as $answer)
            <li class="comment wrap threaded clearfix">

                <div class="votes">
                    <p>
                        <span id="karma-105-total" class="bnone">+1 <b>Votes</b></span>
                        <img style="padding: 0px; border: none; cursor: pointer;" class="up-thumb" id="up-105"
                             src="/img/up.png"
                             alt="Thumb up">
                        <span class="up_points"> <b>Votes</b></span>&nbsp;
                        <img style="padding: 0px; border: none; cursor: pointer;" class="down-thumb" id="down-105"
                             src="/img/down.png"
                             alt="Thumb down">
                        <span id="karma-105-down" style=";" class="down_points"> <b>Votes</b></span>
                    </p>
                </div>

                <div class="content_left">
                    <p>{{ $answer->content }}</p>
                    <p class="author">
                        <img src="{{ $answer->user->gravatar }}" class="avatar avatar-38 photo agent_photo" height="38" width="38">
                        <span class="author_name">
                            <strong> {{ $answer->user->name }} </strong>
                            <small>- {{ $answer->created_at->diffForHumans() }}</small>
                        </span>
                    </p>
                </div>

            </li>
        @endforeach

    </div>
@endforeach

@extends('layouts.app')

@section('title')
    Questions in A Session
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

                    <h2>Questions in {{ $session->name }}</h2>

                    @include('questions.partials.list')

                </div>
        </div>
    </div>
@stop

@section('script')

    <script>
        jQuery(document).ready(function(){
            $('.toggle-form').hide();

            $(".reply_btn").click(function () {
                $(this).parent().parent().children('.reply-form').show();
            });

            $(".cancel_btn").click(function(){
                $(this).parent().parent().hide();
            });

            jQuery('#hideshow').on('click', function(event) {
                jQuery('.toggle-form').toggle('show');
            });
        });
    </script>
@stop

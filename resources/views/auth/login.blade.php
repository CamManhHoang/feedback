@extends('auth.layouts')

@section('title')
    <title>{{ trans('auth.login_title') }}</title>
@endsection

@section('content')

    <section class="colorBg1 colorBg">
        <div class="container">

            <div class="login-form-section">

                @include('layouts.partials.errors')

                <div class="login-content" data-animation="bounceIn">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="section-title">
                            <h3>{{ trans('auth.login_heading') }}</h3>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="email" required="required" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" required="required" class="form-control" name="password" placeholder="Password"/>
                            </div>
                        </div>

                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember iCheck" checked>
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;{{ trans('auth.remember_me') }}</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-right green-btn">{{ trans('auth.login') }} &nbsp; <i class="icon-chevron-right"></i></button>
                        </div>

                    </form>
                </div>

                <div class="login-form-links link1 " data-animation="fadeInLeftBig" data-animation-delay=".2s">
                    <h4 class="blue">{{ trans('auth.dont_have_account') }}</h4>
                    <span>{{ trans('auth.no_worry') }}</span>
                    <a href="/register" class="blue">{{ trans('auth.click_here') }}</a>
                    <span>{{ trans('auth.to_register') }}</span>
                </div>

                <div class="login-form-links link2 " data-animation="fadeInRightBig" data-animation-delay=".4s">
                    <h4 class="green">{{ trans('auth.forget_password') }}</h4>
                    <span>{{ trans('auth.dont_worry') }}</span>
                    <a href="/password/reset" class="green">{{ trans('auth.click_here') }}</a>
                    <span>{{ trans('auth.get_new_one') }}</span>
                </div>
            </div>

        </div>
    </section>

@endsection


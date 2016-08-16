@extends('auth.layouts')

@section('title')
    <title>Đăng ký tài khoản mới</title>
@endsection

@section('content')

    <section class="colorBg2 colorBg">
        <div class=" container">
            <br />
            <br />
            <!-- #region Registration Form -->
            <div class="registration-form-section">

                @include('layouts.partials.errors')

                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="section-title reg-header " data-animation="fadeInDown">
                        <h3>Đăng ký tài khoản</h3>
                    </div>

                    <div class="clearfix">
                        <div class="col-sm-6 registration-left-section " data-animation="fadeInUp">
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" class="form-control" placeholder="Tên của bạn" required="required" name="name" value="{{ old('name') }}" />
                                    </div>
                                </div>

                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                        <input type="email" class="form-control" placeholder="Email" required="required" name="email" value="{{ old('email') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 registration-right-section" data-animation="fadeInUp">
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" class="form-control" placeholder="Mật khẩu" required="required" name="password" />
                                    </div>
                                </div>

                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" required="required" name="password_confirmation" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="registration-form-action clearfix " data-animation="fadeInUp" data-animation-delay=".15s">
                        <a href="/login" class="btn btn-success pull-left blue-btn ">
                            <i class="icon-chevron-left"></i>&nbsp; &nbsp;Quay lại trang Login
                        </a>
                        <button type="submit" class="btn btn-success pull-right green-btn ">Đăng ký ngay &nbsp; <i class="icon-chevron-right"></i></button>
                    </div>

                </form>

            </div>

        </div>
    </section>

@endsection

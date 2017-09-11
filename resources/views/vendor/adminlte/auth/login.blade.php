@extends('adminlte::layouts.auth')

<title>Log In</title>

@section('content')
<style>
    #wel{
        color:  #3498db;;
    }
</style>
<body class="hold-transition login-page" style="background-image: url( {{ asset('img/background.png') }} );background-size: cover">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/') }}" style="text-decoration: none;"><center><h1 style="color: #2c3e50;"><b id="wel">Wel</b>come</center><br></a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body" style="background:rgba(0,0,0,0.1);margin-top: -60px">
        <p class="login-box-msg" style="color:white;">Silahkan anda masuk</p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8" >
                    <div class="checkbox icheck" style="color: white">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                </div><!-- /.col -->
            </div>
        </form>
        <a style="color: white" href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection

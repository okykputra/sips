@extends('adminlte::layouts.auth')

<title>Register</title>

@section('content')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=nexa">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=hero">
<style>
    #wel{
        color:  #3498db;
        font-family: "Lato" ,sans-serif;
    }

</style>

<body style="background-image: url( {{ asset('img/background.png') }} );background-size: cover">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/') }}" title="home" style="text-decoration: none; "><center><h1><b id="wel">Register</b></center><br></a>
            </div>

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

            <div class="register-box-body" style="margin-top: -60px;background:rgba(0,0,0,0.1);">
                <div class="panel panel-info" id="panel">
                              <div class="panel-heading"><i class="fa fa-exclamation-triangle"></i> Silahkan anda mendaftar dan harap isi formulir dengan lengkap</div>
                            </div>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input autocomplete="off" type="text" class="form-control" style="color: black" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input autocomplete="off" type="email" class="form-control" style="color: black" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input autocomplete="off" type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                        <div class="">
                            <button title="daftar" type="submit" class="btn btn-primary" style="float: right">{{ trans('adminlte_lang::message.register') }}</button>
                <a style="color: white" href="{{ url('/login') }}" class="text-center" style="margin-top: 10px">Sudah Memiliki Akun !</a>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

    <!-- <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script> -->

</body>

@endsection

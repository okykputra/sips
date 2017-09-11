<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=lato">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=nexa">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<!-- untuk css -->
<style>
    #header{
        color: #2c3e50;
        font-family: lato;
    }
    #body{
        background-image: url( {{ asset('img/background.png') }} );
        font-family: lato;
    }
    .login{
        padding: 50px;
        background:rgba(0,0,0,0.1);
    }
    .judul{
        margin-top: -20px;
        color: white;
    }
    #icon{
        float: right;
        padding: 4px;
        color: #2c3e50;
    }
    #icon2{
        float: right;
        padding: 4px;
        color: white;
    }
    #wel{
        color: #3498db;
        font-weight: bolder;
        font-family: nexa;
    }
</style>
<!-- end css -->
<body id="body" class="img-responsive"><br>
    @if (Route::has('login'))
        @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
        @else
        <!-- Form masuk atau daftar -->
                <div class="col-sm-4 col-sm-offset-4">
                   <center><h1 id="header"><b id="wel">Wel</b>come</center><br>
                    <div class="login">
                        <h4 align="center" class="judul">Silahkan anda pilih</h4><br>
                        <center><a href="{{ url('/login') }}" style="color: black;"><button class="form-control btn btn-default"> Login <i class="fa fa-sign-in" id="icon"></i> </button></a></center><br>
                        <center><a href="{{ url('/register') }}" style="color: black;"><button class="form-control btn btn-primary">Register<i class="fa fa-user-plus" id="icon2"></i></button></a></center><br>
                    </div>
                </div>
        <!--End form masuk atau daftar -->
            @endif
        @endif
</body>
</html>


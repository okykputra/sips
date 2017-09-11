<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=lato">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=nexa">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=hero">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<!-- untuk css -->
<style>
    #header{
        color: #2c3e50;
        font-family: nexa;
    }
    #body{
        background-image: url( {{ asset('img/background.png') }} );
        font-family: "lato" ,sans-serif;
        background-size:cover;
        background-repeat: no-repeat;
    }
    .login{
        padding: 50px;
        background:rgba(0,0,0,0.1);
    }
    .judul{
        margin-top: -20px;
        color: white;
    }
    #wel{
        color: #3498db;
        font-weight: bolder;
        font-family: nexa;
    }
    #copyrights{
        float: right;
        font-family: lato;
        font-size: 12px;
        color: white;
    }
    /* enable absolute positioning */
    .inner-addon { 
    position: relative; 
    }

/* style icon */
    .inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
    }
    
/* align icon */
    .left-addon .glyphicon  { left:  0px;}
    .right-addon .glyphicon { right: 0px;}

/* add padding  */
    .left-addon input  { padding-left:  30px; }
    .right-addon input { padding-right: 30px; }
    #panel{
        margin-top: -30px;
    }
</style>
<!-- end css -->
<body id="body"><br>
    @if (Route::has('login'))
        @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
        @else
        <!-- Form masuk atau daftar -->
                <div class="col-sm-4 col-sm-offset-4">
                   <center><h1 id="header"><b id="wel">Wel</b>come</center><br>
                    <div class="login">
                         <div class="panel panel-info" id="panel">
                              <div class="panel-heading">Silahkan anda pilih untuk masuk atau daftar</div>
                            </div>
                        <h4 align="center" class="judul">Silahkan anda pilih</h4><br>
                        <center><a href="{{ url('/login') }}"><button class="form-control btn btn-default"> Login <i class="fa fa-sign-in" id="icon"></i> </button></a></center><br>
                        <center><a href="{{ url('/register') }}"><button id="tombolregister" class="form-control btn btn-primary">Register<i class="fa fa-user-plus" id="icon2"></i></button></a></center><br>
                        <h4 id="copyrights"><a href="#!">&copy;2017 Rpl_Smakgu</a></h4>
                    </div>
                </div>
        <!--End form masuk atau daftar -->
            @endif
        @endif
</body>
</html>
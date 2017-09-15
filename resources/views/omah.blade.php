<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<!-- untuk css -->
<style>
    #header{
        color: white;
        padding-top: 20px;
        color: #2c3e50;
    }
    #body{
        background-image: url( {{ asset('img/background.png') }} );
        font-family: "Roboto", Helvetica, Arial, sans-serif;
    }
    .login{
        background:rgba(0,0,0,0.1);
        padding: 50px;
    }
    .judul{
        margin-top: -20px;
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
</style>
<!-- end css -->
<body id="body" style="background-image: url( {{ asset('img/background.png') }} ) ; background-size: cover;" class="img-responsive"><br>
    @if (Route::has('login'))
        @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
        @else
        <!-- Form masuk atau daftar -->
                <div class="col-sm-4 col-sm-offset-4">
                   <center><h1 id="header"><b>Wel</b>come</center><br>
                    <div class="login">
                        <div class="panel panel-info" style="margin-top: -30px;">
                            <div class="panel-heading">
                                Silahkan anda pilih untuk login atau register
                            </div>
                        </div><br>
                    <div class="inner-addon right-addon" style="margin-top: -30px">
                        <i class="glyphicon glyphicon-log-in"></i>
                        <center><a href="{{ url('/login') }}" style="color: black;"><button  data-toggle="tooltip" title='login' style="text-align: left" class="form-control btn btn-default">Login</button></a></center>
                    </div>
                    <!-- Tombol register -->
                    <div class="inner-addon right-addon" style="margin-top: 10px;">
                        <i class="glyphicon glyphicon-user" style="color: white"></i>
                        <a href="{{ url('/register') }}" style="color: black;"><button style="text-align: left" class="form-control btn btn-primary">Register</button></a><br>
                    </div>
                </div>
            </div>
        <!--End form masuk atau daftar -->
            @endif
        @endif
</body>
</html>
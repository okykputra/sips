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
        background-color: #bdc3c7;
        font-family: "Roboto", Helvetica, Arial, sans-serif;
    }
    .login{
        background-color: white;
        padding: 50px;
    }
    .judul{
        margin-top: -20px;
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
                   <center><h1 id="header"><b>Wel</b>come</center><br>
                    <div class="login">
                        <h4 align="center" class="judul">Silahkan anda pilih</h4><br>
                        <center><a href="{{ url('/login') }}" style="color: black;"><button class="form-control btn btn-default">Login</button></a></center><br>
                        <center><a href="{{ url('/register') }}" style="color: black;"><button class="form-control btn btn-primary">Register</button></a></center><br>
                    </div>
                </div>
        <!--End form masuk atau daftar -->
            @endif
        @endif
</body>
</html>


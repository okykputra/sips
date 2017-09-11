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
        font-family: nexa;
        color: white;
        padding-top: 20px;
    }
    #come{
        font-family: hero light;
    }
    #body{
        background-color: #3498db;
    }
</style>
<!-- end css -->
<body id="body">
 <center><h1 id="header">Wel<b id="come">come</b></center><br>
        @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('/hal') }}">Home</a>
                @else
                <div class="col-md-4 col-md-offset-4">
                    <center><a href="{{ url('/login') }}" style="color: black;"><button class="form-control btn btn-default">Login</button></a></center><br>
                    <center><a href="{{ url('/register') }}" style="color: black;"><button class="form-control btn btn-info">Register</button></a></center> 
                </div>
                @endif
        @endif
</body>
</html>


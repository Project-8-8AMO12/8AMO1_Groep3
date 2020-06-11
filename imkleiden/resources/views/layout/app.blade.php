<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

@section('navbar')
    <nav class="navbar-inverse" style="margin-bottom: 3vw;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Opdr02</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('showcase')
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @section('sidebar')
                    <div class="well">
                        <h3>Sidebar</h3>
                        Dit is de sidebar
                    </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center" style="
    margin-top:30px;
    padding:20px;
    color:#fff;
    background:#333;">
        <p>Copyright 2020 © Imkers leiden</p>
    </footer>
</body>
</html>

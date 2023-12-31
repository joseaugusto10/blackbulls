<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="icon" href="/img/header/logo.png">

        {{--Css do software--}}
        <link rel="stylesheet" href="/css/styles.css">

        {{--Bootstrap--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{--Font awesome--}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     

    </head>
    <body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav custom-navbar">
            <img src="/img/header/logo.png" alt="img-header" class="img-header">
            <a class="nav-link active" id="home-link" href="/">Touros</a>
            <a class="nav-link active" id="home-link" href="/bulls/create">Adicionar touro</a>
            <a class="nav-link active" id="home-link" href="/bulls/dashboard">Dashboard</a>
        </div>
    </div>
</nav>

</header>
    <br>
    <h1 id="main-title"><i class="fas fa-bull">Black Bulls</i></h1>
        <br>
        {{--Essa função vai substituir só o conteudo da página--}}
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg')}}</p>
                        <br>
                    @endif    
                    @yield('content')
                </div>
            </div>
        </main>

        <br><br><br><br>
        <footer class="footer">
            <p>BlackBulls &copy;2023</p>
        </footer>


    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        {{--Css do software--}}
        <link rel="stylesheet" href="css/styles.css">

     
        {{--Bootstrap--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>

    <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="#">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="#">Touros</a>
                <a class="nav-link active" id="home-link" href="/bulls/create">Adicionar touro</a>
            </div>
        </div>
    </nav>
</header>


        {{--Essa função vai substituir só o conteudo da página--}}
        @yield('content')
        <footer>
            <p>BlackBulls &copy;2023</p>
        </footer>
    </body>
</html>

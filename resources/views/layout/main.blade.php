<!DOCTYPE html>
<html>
    <head>
        <title>@yield('judul')</title>
        @extends('layout/head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">JCloth</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/kemeja">Kemeja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kaos">Kaos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/jaket">Jaket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bmuslim">Baju muslim</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Mau cari model apa?" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                    <!-- <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                            aria-label="Search">
                    </form> -->
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Daftar</a></li> 
                        <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        @yield('container')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
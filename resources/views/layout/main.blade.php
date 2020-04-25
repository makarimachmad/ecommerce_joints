<!DOCTYPE html>
<html>
    <head>
        <title>@yield('judul')</title>
        @extends('layout/head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">JCloth</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item" >
                        <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kemeja">Kemeja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kaos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jaket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baju muslim</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Mau cari model apa?" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('container')
    </body>
</html>
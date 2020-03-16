<template>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" width="120">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">All Menu</a>
                        <a class="nav-item nav-link" href="#">Pizza</a>
                        <a class="nav-item nav-link" href="#">Pasta</a>
                        <a class="nav-item nav-link" href="#">Minuman</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>All Menu</h1>
                </div>
            </div>
            <div class="row" id="daftar-menu"></div>
        </div>

        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://www.linkedin.com/in/achmad-makarim-w-b35072b4/"> Achmad Makarim Widyanto/123160107</a>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./script.js"></script>
    </section>
</template>
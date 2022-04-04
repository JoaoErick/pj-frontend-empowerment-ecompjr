<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Blog de Viagens</title>

    <link rel="shortcut icon" href="{{ asset('images/blog-travel-icon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('tools/fontawesome/css/all.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/blog-travel.png') }}" alt="" width="30" class="d-inline-block align-text-top">
            Blog de Viagens
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Página inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contato</a>
            </li>
            </ul>
        </div>
    </nav>

    <header>
        <h1 class="mt-5" style="text-align: center; font-weight: bold;">Contato</h1>
    </header>

    <div class="container contact-form">
        <div class="contact-image">
            <img class="mx-auto d-block" src="{{ asset('images/blog-travel.png') }}" alt="Logo capacitação" width="200px">
        </div>
        <form method="post" style="height: 45vh">
            <h3>Fale conosco</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Nome completo" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="E-mail" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Celular" value="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Mensagem" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                <div class="col-md-12" style="display: flex;justify-content: center;">
                    <div class="form-group w-25">
                        <input type="submit" name="btnSubmit" class="btn btn-dark w-100" value="Enviar" />
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <div class="container-fluid">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">2022 © Copyright Blog de Viagens.</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="{{ asset('images/blog-travel.png') }}" alt="" width="30" class="d-inline-block align-text-top">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
    </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
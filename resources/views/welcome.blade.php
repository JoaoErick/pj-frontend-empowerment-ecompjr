<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Front-end</title>

    <link rel="shortcut icon" href="{{ asset('images/blog-travel-icon.ico') }}" type="image/x-icon">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Página inicial</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
    <header>
        <h1>Blog de Viagens</h1>
        <img src="{{ asset('images/blog-travel.png') }}" alt="Logo capacitação" width="200px">
    </header>
    <div class="card-columns mt-4">
        <div class="card">

            <a href="#">
                <img class="card-img-top"
                     src=""
                     alt="Imagem do lugar">
            </a>

            <div class="card-body">
                <h5 class="card-title">
                    <a href="#">
                        Título da viagem
                    </a>
                </h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="card-text">
                    <small class="text-muted">
                        Publicado 57 minutos atrás</small>
                </p>

            </div>
        </div>
    </div>
    
    <footer>
        2022 © Copyright Blog de Viagens. Todos os direitos reservados.
    </footer>
</body>
</html>
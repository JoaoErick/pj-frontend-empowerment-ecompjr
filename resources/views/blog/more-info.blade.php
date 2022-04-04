@extends('templates.main')

@section('title')Mais informações @endsection

@section('header')
    <header>
        <h1 class="mt-5" style="text-align: center; font-weight: bold;">Viagem de exemplo</h1>
    </header>
@endsection

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 50vh">
            <img class="d-block w-100 h-100" src="{{ asset('images/pexels-photo-374870.jpeg') }}" alt="Primeiro Slide">
            </div>
            <div class="carousel-item" style="height: 50vh">
            <img class="d-block w-100 h-100" src="{{ asset('images/pexels-photo-374870.jpeg') }}" alt="Segundo Slide">
            </div>
            <div class="carousel-item" style="height: 50vh">
            <img class="d-block w-100 h-100" src="{{ asset('images/pexels-photo-374870.jpeg') }}" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div> 

    <div class="row pt-5">
        <div class="col-xl"></div>
        <div class="col-xl-8 text-center">
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
            <h5>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Nam hic et, qui consectetur officia totam perferendis. 
                Adipisci laboriosam est in deserunt ad dolor delectus 
                voluptatem dolorum voluptas, minus nostrum ea.
            </h5>
            <p class="text-muted mt-4">
                <small>
                    João da Silva | 26 de março de 2022 às 16:20 | Chicago
                </small>
            </p>
        </div>
        <div class="col-xl"></div>
    </div>

    <div class="row pt-5">
        <div class="col-xl"></div>
        <div class="col-xl-8">

            <img class="img-fluid pb-5 " src="" alt="">


            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Totam enim accusantium itaque omnis nostrum autem error possimus 
                sint maxime? A, aliquid esse. Dolorum nemo minima ab esse 
                consequatur in velit.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda fugit vitae aliquid, dolorum minus mollitia atque 
                optio ab illum provident obcaecati quaerat sit laboriosam,
                est reiciendis quidem, cupiditate earum! Autem?
            </p>

            <p>A, aliquid esse. Dolorum nemo minima ab esse 
                consequatur in velit.</p>

            <p>
                Assumenda fugit vitae aliquid, dolorum minus mollitia atque 
                optio ab illum provident obcaecati quaerat sit laboriosam,
                est reiciendis quidem, cupiditate earum! Autem?</p>

            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consequatur ea odit officia, impedit dolorem molestias deleniti 
                laborum aliquid! Porro, fugit ad? Quidem fugiat odio 
                assumenda quas iure. Facilis, iure quam.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consequatur ea odit officia, impedit dolorem molestias deleniti 
                laborum aliquid! Porro, fugit ad? Quidem fugiat odio 
                assumenda quas iure. Facilis, iure quam.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consequatur ea odit officia, impedit dolorem molestias deleniti 
                laborum aliquid! Porro, fugit ad? Quidem fugiat odio 
                assumenda quas iure. Facilis, iure quam.
            </p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consequatur ea odit officia, impedit dolorem molestias deleniti 
                laborum aliquid! Porro, fugit ad? Quidem fugiat odio 
                assumenda quas iure. Facilis, iure quam.</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consequatur ea odit officia, impedit dolorem molestias deleniti 
                laborum aliquid! Porro, fugit ad? Quidem fugiat odio 
                assumenda quas iure. Facilis, iure quam.</p>
        </div>
        <div class="col-xl"></div>
    </div>


    <div class="row pt-5">
        <div class="col-xl"></div>
        <div class="col-xl-8">
            <h2 class="my-3">Comentários (1)</h2>

            <h5 class="mb-2 mt-5">Luiz Otávio disse:</h5>
            <small class="text-muted">hoje</small>
            <p class="mb-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                aliquet nec, vulputate</p>
        </div>
        <div class="col-xl"></div>
    </div>


    <div class="row pt-5">
        <div class="col-xl"></div>
        <div class="col-xl-8">
            <h2 class="my-3">Deixe um comentário</h2>

            <form method="POST" action="#envia_comentario">
                <input type="hidden" name="csrfmiddlewaretoken"
                    value="MUiT5cD1u7raeEOr9w9srr4cbQkYc5OTRnWT1cZcIiYWXL8cJqmAl9bxFc7j26yn">
                <table class="table">
                    <tr>
                        <th><label for="id_author_name">Autor:</label></th>
                        <td><input type="text" class="form-control" name="author_name" maxlength="255" required
                                id="id_author_name"></td>
                    </tr>
                    <tr>
                        <th><label for="id_email">E-mail:</label></th>
                        <td><input type="email" class="form-control" name="email" maxlength="254" required id="id_email">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="id_comment">Comentário:</label></th>
                        <td><textarea name="comment" class="form-control" id="id_comment"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input id="envia_comentario" type="submit" class="btn btn-dark"
                                value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>


        </div>
        <div class="col-xl"></div>
    </div>
@endsection
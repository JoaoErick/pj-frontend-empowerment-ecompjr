@extends('templates.main')

@section('title')Página inicial @endsection

@section('header')
    <header>
        <h1 class="mt-5" style="text-align: center; font-weight: bold;">Blog de Viagens</h1>
        <img class="mx-auto d-block" src="{{ asset('images/blog-travel.png') }}" alt="Logo capacitação" width="200px">
    </header>
@endsection

@php
    $places = array();
    array_push($places, array('title' => 'São Paulo - dicas de viagem', 'image_path' => 'images/pexels-photo-280221.jpeg'));
    array_push($places, array('title' => 'Fortaleza - dicas de viagem', 'image_path' => 'images/pexels-photo-374870.jpeg'));
    array_push($places, array('title' => 'Rio de Janeiro - dicas de viagem', 'image_path' => 'images/pexels-photo-1121782.jpeg'));
    array_push($places, array('title' => 'Bahia - dicas de viagem', 'image_path' => 'images/pexels-photo-1619569.jpeg'));
    array_push($places, array('title' => 'Santa Catarina - dicas de viagem', 'image_path' => 'images/pexels-photo-1121782.jpeg'));
    array_push($places, array('title' => 'Espírito Santo - dicas de viagem', 'image_path' => 'images/pexels-photo-374870.jpeg'));
    
@endphp

@section('content')

    <div class="row row-cols-3 row-cols-md-3 g-4">
        @forelse ($places as $place)
            <div class="col-4 mt-3">
                <a href="{{ route('more-info') }}" style="text-decoration: none; color:black;">
                    <div class="card" style="">
                        <img class="card-img-top" src="{{ $place['image_path'] }}" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $place['title'] }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="card-text"><small class="text-muted">Publicado 57 minutos atrás</small></p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <span class="w-100" style="text-align: center">Não existem publicações até o momento.</span>
        @endforelse
    
            @if (empty($places))
                <span class="w-100 mt-3" style="text-align: center">
                    <i class="fa-regular fa-face-frown fa-2x"></i>
                </span>
            @else
                <span class="w-100 mt-3" style="text-align: center">
                    <i class="fa-regular fa-face-laugh-beam fa-2x"></i>
                </span>
            @endif
    </div>

    
@endsection
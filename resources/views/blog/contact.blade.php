@extends('templates.main')

@section('title')Contato @endsection

@section('header')
    <header>
        <h1 class="mt-5" style="text-align: center; font-weight: bold;">Contato</h1>
        <img class="mx-auto d-block" src="{{ asset('images/blog-travel.png') }}" alt="Logo capacitação" width="200px">
    </header>
@endsection

@section('content')
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
                    <input type="text" name="txtPhone" class="form-control phone_with_ddd" placeholder="Celular" value="" />
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
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.phone_with_ddd').mask('(00) 00000-0000');
        });
    </script>
@endsection
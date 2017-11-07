@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                </div>
                <h2 style="margin-left: 15px;"> Seja Bem Vindo </h2>
                <h3 style="margin-left: 15px;"> Escolha uma Opção </h3><br>
                <a href="{{ url('/products') }}" class="btn btn-info btn-lg left" style="margin-left: 30px;"> Produtos </a>
                <a href="{{ url('/categories') }}" class="btn btn-success btn-lg left" style="margin-left: 15px;"> Categorias </a>

                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection

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
                <h2> Logado com sucesso! </h2><br>
                <a href="{{ url('/admin/products/index') }}" class="btn btn-primary btn-lg" > Produtos </a>
                <a href="#" class="btn btn-primary btn-lg " disabled> Serviços </a>
                <a href="#" class="btn btn-primary btn-lg" disabled> Manutenção </a>
                <a href="#" class="btn btn-primary btn-lg " disabled> Vendas </a>
                <a href="#" class="btn btn-primary btn-lg" disabled> Fornecimento </a>
                <a href="#" class="btn btn-primary btn-lg " disabled> Sobre </a>


        <!-- footer content -->
        <footer>
        <br>
        <br>
        <br>
          <div class="pull-right">
            Disciplina Linguagens de Programação II - Ciência da Computação - IFC Campus Videira
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection

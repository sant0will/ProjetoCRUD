@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
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

                <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Produtos</h2>
                    <a href="{{ url('/admin/products/new') }}" class="btn btn-primary btn-sm pull-right">Novo Produto</a>                      
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Ações</th>

                        @foreach($products as $product)
                          <tr>
                          <td> {{$product->id}} </td>
                          <td> {{$product->nome}} </td>
                          <td> {{$product->valor}} </td>
                          <td> {{$product->categoria}} </td>
                          <td> 
                            <a href="{{ URL::to('/admin/products/print?id='.$product->id)}}" class="btn  btn-primary">
                              <i class=" glyphicon glyphicon-print"></i>
                            </a>
                            <a href="#" class="btn  btn-warning">
                              <i class="glyphicon glyphicon-refresh"></i>
                            </a>
                            <a href="#" class="btn btn-danger">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
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

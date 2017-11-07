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
        <div class="right_col" role="main">

          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                    </div>
                    @endif
                    <h2 style="margin-left: 15px;">Lista de Produtos</h2>
                    <a href="{{ url('/products/create') }}" class="btn btn-primary btn-sm " style="margin-left: 15px;">Novo Produto</a>
                    <a href="{{ url('/home') }}" class="btn btn-danger btn-sm" style="margin-left: 50px;">Voltar</a>                  
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                    {{csrf_field()}}
                    <table class="table" style="margin-left: 1px;">
                      <br>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th></th>
                        <th>Ações</th>
                        <th></th>
                      </tr>
                      @foreach($products as $product)
                      <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->nome}} </td>
                        <td> {{$product->valor}} </td>
                        <td> {{$product->categoria}} </td>
                        <td> 
                          <a href="{{action('ProductController@show', $product['id'])}}" class="btn  btn-primary">
                            <i class=" glyphicon glyphicon-print"></i>
                          </a>
                        </td>
                        <td>
                          <a href="/products/{{$product->id}}/edit" class="btn  btn-warning">
                            <i class="glyphicon glyphicon-refresh"></i>
                          </a>                            
                        </td>
                        <td>
                          <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger glyphicon glyphicon-trash" type="submit"></button>
                          </form>
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
        @endsection

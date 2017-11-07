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
                  @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                  @endif
                    <h2 style="margin-left: 15px;">Lista de categorias</h2>
                    <a href="{{ url('/categories/create') }}" class="btn btn-primary btn-sm" style="margin-left: 15px;">Nova Categoria</a>
                    <a href="{{ url('/home') }}" class="btn btn-danger btn-sm " style="margin-left: 50px;">Voltar</a>              
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                    {{csrf_field()}}
                    <table class="table" style="margin-left: 1px;">
                    <br>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th style="margin-left: 50px;">Ações</th>
                        <th></th>
                      </tr>
                      @foreach($categories as $category)
                      <tr>
                        <td> {{$category->id}} </td>
                        <td> {{$category->nome}} </td>
                        <td> 
                          <a href="{{action('CategoryController@show', $category['id'])}}" class="btn  btn-primary">
                            <i class=" glyphicon glyphicon-print"></i>
                          </a>
                        </td>
                        
                        <td>
                          <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
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

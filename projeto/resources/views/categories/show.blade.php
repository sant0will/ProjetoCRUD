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
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Exibindo Categoria</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="x_content">          
                      <dl class="dl-horizontal">
                        <dt>ID</dt>
                        <dd> {{$category->id}}</dd>
                        <dt>Nome</dt>
                        <dd> {{$category->nome}}</dd>   
                      </dl>

                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                  <a href="/categories" class="btn btn-primary">Voltar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer>
          <div class="pull-right">
            Disciplina Linguagens de Programação II - Ciência da Computação - IFC Campus Videira
          </div>
          <div class="clearfix"></div>
        </footer>
        @endsection
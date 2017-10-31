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
        
        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastro de Produtos</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <br />
                    <form data-parsley-validate class="form-horizontal form-label-left" action="/admin/products/create" method="POST">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nome" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Valor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="double" name="valor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Categoria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="integer" name="categoria" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                      
                      <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <button class="btn btn-warning pull-right" type="button">Cancelar</button>						              
                          </div>
                        </div>
                      </form>
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
@endsection

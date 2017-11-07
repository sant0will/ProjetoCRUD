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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastro de Categorias</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <br />
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                    </div>
                    @endif
                    <form data-parsley-validate class="form-horizontal form-label-left" method="post" 
                    action="{{url('categories')}}" >

                    {{csrf_field()}}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nome" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">                      
                          <a href="/categories" class="btn btn-danger" type="button">Voltar</a> 
                          <button type="submit" class="btn btn-success pull-right">Salvar</button>					 
                        </div>            
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection

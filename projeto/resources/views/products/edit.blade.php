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
                  <h2>Editar Produtos</h2>
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
                  action="{{action('ProductController@update', $id)}}">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="PATCH">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="nome" required="required" class="form-control col-md-7 col-xs-12" value="{{$product->nome}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Valor <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="double" name="valor" required="required" class="form-control col-md-7 col-xs-12" value="{{$product->valor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Categoria <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="categoria" class="form-control col-md-7 col-xs-12">
                        <?php foreach($categories as $category): ?>
                          <option value="<?= $category->id ?>"><?= $category->nome ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="ln_solid">
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="/products" class="btn btn-danger" type="button">Voltar</a>  
                        <button type="submit" class="btn btn-success  pull-right">Salvar</button>          
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

    
  </div>
</div>
</div>
@endsection

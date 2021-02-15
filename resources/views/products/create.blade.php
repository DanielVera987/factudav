@extends('layouts.app')

@section('styles')
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <!-- select2 -->
    <link href="{{ asset('/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<form id="demo-form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-cubes"></i> Nuevo Producto</h2>
      <div class="clearfix"></div>
      @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
      @endif
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos del Producto</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
            <div class="row">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="center-block">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <img class="img-responsive avatar-view center-block" src="{{ asset('storage/products/default.png') }}" width="200" id="previewlogo"  alt="Avatar" title="">
                                    <label for="image">Imagen Producto * :</label>
                                    <input type="file" name="image" value="{{ old('image') }}" id="image" data-parsley-trigger="change" required>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="name">Nombre* :</label>
                            <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name" required />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="code">Code * :</label>
                            <input type="text" id="code" class="form-control" value="{{ $folio }}" name="code" autocomplete="off" required />
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="description">Descripción * :</label>
                            <input type="text" id="description" class="form-control" value="{{ old('description') }}" name="description" required />
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="cost">Costo * :</label>
                            <input type="text" id="cost" class="form-control" name="cost" value="{{ old('cost') }}" data-parsley-trigger="change" required />
                            @error('cost')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="price">Precio * :</label>
                            <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}" data-parsley-trigger="change" required />
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="unit_id">Unidad de Medida * :</label>
                            <select id="unit_id" name="unit_id" class="form-control" value="{{ old('unit_id') }}" required data-parsley-trigger="change"></select>
                            @error('unit_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="stock">Stock * :</label>
                            <input type="text" id="stock" class="form-control" name="stock" value="{{ old('stock') }}" data-parsley-trigger="change" required />
                            @error('stock')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label for="alert_stock">Alerta Stock *:</label>
                            <input type="text" id="alert_stock" name="alert_stock" class="form-control" data-parsley-trigger="change" value="{{ old('alert_stock') }}" required />
                            @error('alert_stock')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <label>
                                <br>
                                <input type="checkbox" name="is_active" class="js-switch" /> Activo
                            </label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="actionBar">
                <button type="submit" class="btn btn-primary float-rigth">Guardar</button>
                </div>
            </div>
          </div>   
        </div>
      </div>
    </div>
  </div>
</form>
@endsection

@section('script')
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('/vendors/starrr/dist/starrr.js') }}"></script>
    <script>
      let $select = document.getElementById('municipality_id');
      jQuery(document).ready(function($){
        $(document).ready(function() {
          $("#image").on('change', function(e) {
            let x = e.target;
            if (!x.files || !x.files.length) {
              return false;
            }

            let img = x.files[0];
            const objectURL = URL.createObjectURL(img);
            $("#previewlogo").attr('src',objectURL);
          });

            $('#unit_id').select2({
                placeholder: 'Escribe para comenzar a buscar',
                ajax: {
                    url: '/searchUnit',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: `${item.code} - ${item.name}`,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        });
      });

    </script>
@endsection
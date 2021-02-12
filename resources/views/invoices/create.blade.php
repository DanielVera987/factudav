@extends('layouts.app')

@section('styles')
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">

    <style>
      .select2 {
        width:100%!important;
      }
    </style>
@endsection

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Agregar Factura</h3>
  </div>

  <div class="title_right">
    
  </div>
</div>
<form id="demo-form" method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  <div class="x_panel">
    <div class="x_title">
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
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos Generales</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Conceptos</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
            <div class="row">
              <div class="row">  
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="bussine_name">Serie *: <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Prefijo para la factura ejemplo: Si tienes dos puntos de venta Almacen 1, Almacen 2 entonces el prefijo puede ser A1-, A2-"></i></label>
                  <input type="text" id="bussine_name" name="bussine_name" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name') }}" required />
                  @error('bussine_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="tradename">Forma de Pago * :</label>
                  <input type="text" id="tradename" name="tradename" class="form-control" data-parsley-trigger="change" value="{{ old('tradename') }}" required />
                  @error('tradename')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="rfc">Moneda * :</label>
                    <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                      @foreach($currencies as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                    @error('rfc')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

            <div class="row">  
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="rfc">Folio * :</label>
                  <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required />
                  @error('rfc')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="email">Metodo de Pago * :</label>
                  <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="telephone">Uso del CFDI *:</label>
                    <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                    @error('telephone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="usecfdi_id">Fecha *:</label>
                        <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />                        
                        @error('usecfdi_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
              
                <hr>
                <h3>Datos del cliente</h3>

                <div class="row">  
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="bussine_name">Buscador de Clientes *:</label>
                    <input type="text" id="bussine_name" name="bussine_name" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name') }}" placeholder="Escribe para empezar a buscar" required />
                    @error('bussine_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="row">  
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="rfc">RFC * :</label>
                        <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required />
                        @error('rfc')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="email">Razón Social * :</label>
                        <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="email">Codigo Postal * :</label>
                        <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="telephone">Calle *:</label>
                        <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="usecfdi_id">No. Exterior *:</label>
                        <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                        @error('usecfdi_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="usecfdi_id">No. Interior *:</label>
                        <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                        @error('usecfdi_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="telephone">Estado *:</label>
                        <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                          @foreach($states as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                          @endforeach
                        </select>
                        @error('telephone')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="usecfdi_id">Municipio *:</label>
                        <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                            <option value=""></option>
                        </select>
                        @error('usecfdi_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <br/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        </br>
                        <div class="actionBar">
                            <button class="btn btn-primary float-rigth" role="tab" id="profile-tab" onclick="document.getElementById('profile-tab2').click();" data-toggle="tab" aria-expanded="false">Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">    
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label for="bussine_name">Buscador de Producto *:</label>
                <input type="text" id="bussine_name" name="bussine_name" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name') }}" placeholder="Escribe para empezar a buscar" placeholder="Escribe para comenzar a buscar" required />
                @error('bussine_name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="row">  
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="rfc">Cantidad * :</label>
                    <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required />
                    @error('rfc')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="email">Descripción * :</label>
                    <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="email">Descuento * :</label>
                    <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="telephone">Precio *:</label>
                    <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                    @error('telephone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="usecfdi_id">Clave producto/servicio *:</label>
                    <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                        <option value="">2121</option>
                    </select>
                    @error('usecfdi_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="usecfdi_id">Clave Unidad *:</label>
                    <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                        <option value="">2121</option>
                    </select>
                    @error('usecfdi_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="telephone">Impuestos *:</label>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="tax_id" value="" class="flat"> Checked
                    </label>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                </br>
                <div class="actionBar">
                  <button class="btn btn-primary float-rigth" role="tab" onclick="document.getElementById('home-tab').click();" data-toggle="tab" aria-expanded="false">Anterior</button>
                  <input type="submit" class="btn btn-success float-rigth" value="Guardar">
                </div>
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
    <!-- Country -->
    {{--  <script src="{{ asset('/js/helpers/country.js') }}"></script>  --}}
    <script>
      let $select = document.getElementById('municipality_id');
      jQuery(document).ready(function($){
        $(document).ready(function() {
          $('#taxregimen_id').select2();
          $('#country_id').select2();
          $('#state_id').select2();
          $('#municipality_id').select2();

          $('#state_id').on('change', function () {
            /* Ajax */
            $.get( "{{ url('/municipalities/') }}" + '/' + $('#state_id').val(), function( data ) {
              remove();
              change(data);
            });
          });

          let remove = () => {
            for (let i = $select.options.length; i >= 0; i--) {
              $select.remove(i);
            }
          };

          let change = (data) => {
            for(let x in data) {
              let option = document.createElement('option');
              option.value = data[x].id;
              option.text = data[x].name;
              $select.appendChild(option);
            }
          };

          $("#logo").on('change', function(e) {
            let x = e.target;
            if (!x.files || !x.files.length) {
              return false;
            }

            let img = x.files[0];
            const objectURL = URL.createObjectURL(img);
            $("#previewlogo").attr('src',objectURL);
          });
        });
      });
    </script>
    <!-- Parsley -->
    <script src="{{ asset('/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('/vendors/starrr/dist/starrr.js') }}"></script>
@endsection
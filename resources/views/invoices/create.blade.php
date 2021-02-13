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
                  <label for="serie">Serie *: <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Prefijo para la factura ejemplo: Si tienes dos puntos de venta Almacen 1, Almacen 2 entonces el prefijo puede ser A1-, A2-"></i></label>
                  <input type="text" id="serie" name="serie" class="form-control" data-parsley-trigger="change" value="{{ old('serie') }}" required />
                  @error('serie')
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
                    <label for="currency_id">Moneda * :</label>
                    <select id="currency_id" name="currency_id" class="form-control select2" value="{{ old('currency_id') }}" required data-parsley-trigger="change">
                      @foreach($currencies as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                    @error('currency_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

            <div class="row">  
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="folio">Folio * :</label>
                  <input type="text" id="folio" class="form-control" name="folio" value="{{ old('folio') }}" data-parsley-trigger="change" required />
                  @error('folio')
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
                    <label for="usecfdi_id">Uso del CFDI *:</label>
                    <select id="usecfdi_id" name="currency_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                      @foreach($usecfdi as $value)
                        <option value="{{ $value->id }}">{{ $value->code }} - {{ $value->name }}</option>
                      @endforeach
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
                    <label for="search_customer">Buscador de Clientes *:</label>
                    <select id="search_customer" name="customer_id" class="form-control select2" required data-parsley-trigger="change">
                        <option value="" selected disabled>Escribe para comenzar a buscar</option>
                        @foreach ($customers as $value)
                          <option value="{{ $value->id }}">{{ $value->bussine_name }}</option>
                        @endforeach
                    </select>
                    @error('search_customer')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="row">  
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="rfc">RFC * :</label>
                        <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required readonly="readonly"/>
                        @error('rfc')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="bussine_name">Razón Social * :</label>
                        <input type="text" id="bussine_name" name="bussine_name" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name') }}" required readonly="readonly"/>
                        @error('bussine_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="zip">Codigo Postal * :</label>
                        <input type="text" id="zip" name="zip" class="form-control" data-parsley-trigger="change" value="{{ old('zip') }}" required readonly="readonly"/>
                        @error('zip')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="street">Calle *:</label>
                        <input type="text" id="street" class="form-control" name="street" value="{{ old('street') }}" data-parsley-trigger="change" required readonly="readonly"/>
                        @error('street')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="no_exterior">No. Exterior *:</label>
                        <input type="text" id="no_exterior" class="form-control" name="no_exterior" value="{{ old('no_exterior') }}" data-parsley-trigger="change" required readonly="readonly"/>
                        @error('no_exterior')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="no_inside">No. Interior *:</label>
                        <input type="text" id="no_inside" class="form-control" name="no_inside" value="{{ old('no_inside') }}" data-parsley-trigger="change" required readonly="readonly"/>
                        @error('no_inside')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="state_id">Estado *:</label>
                        <input type="text" id="state_id" class="form-control" name="state_id" value="{{ old('state_id') }}" data-parsley-trigger="change" required readonly="readonly"/>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="municipality_id">Municipio *:</label>
                        <input type="text" id="municipality_id" class="form-control" name="municipality_id" value="{{ old('municipality_id') }}" data-parsley-trigger="change" required readonly="readonly"/>
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
                <label for="search_product">Buscador de Producto *:</label>
                <select id="search_product" name="search_product" class="form-control select2">
                  <option value="" selected disabled>Escribe para comenzar a buscar</option>
                  @foreach ($products as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                  @endforeach
              </select>
                @error('search_product')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="row">  
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="quantity">Cantidad * :</label>
                    <input type="text" id="quantity" class="form-control" name="quantity" data-parsley-trigger="change" required />
                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="description">Descripción * :</label>
                    <input type="text" id="description" name="description" class="form-control" data-parsley-trigger="change" required />
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="discount">Descuento * :</label>
                    <input type="text" id="discount" name="discount" class="form-control" data-parsley-trigger="change" required />
                    @error('discount')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="price">Precio *:</label>
                    <input type="tel" id="price" class="form-control" name="price" data-parsley-trigger="change" required />
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="prodserv_id">Clave producto/servicio *:</label>
                    <select id="prodserv_id" name="prodserv_id" class="form-control select2" value="{{ old('prodserv_id') }}" required data-parsley-trigger="change">
                        <option value="">2121</option>
                    </select>
                    @error('prodserv_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="key_unit_id">Clave Unidad *:</label>
                    <select id="key_unit_id" name="key_unit_id" class="form-control select2" required data-parsley-trigger="change">
                        <option value="">2121</option>
                    </select>
                    @error('key_unit_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="telephone">Impuestos *:</label>
                @foreach($taxes as $value)                  
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="tax_id" value="{{ $value->id }}" class="flat"> &nbsp;<strong>{{ $value->name }}</strong> ({{ $value->type }} {{ $value->tasa }} {{ $value->factor }})
                    </label>
                  </div>
                @endforeach
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
      jQuery(document).ready(function($){
        $(document).ready(function() {
          $('#search_customer').select2();
          $('#search_product').select2();

          $('#search_customer').on('change', function () {
            $.get( "{{ url('/customers/') }}" + '/' + $('#search_customer').val(), function( data ) {
              data = JSON.parse(data);
              $('#rfc').val(data.rfc);
              $('#bussine_name').val(data.bussine_name);
              $('#zip').val(data.zip);
              $('#street').val(data.street);
              $('#no_exterior').val(data.no_exterior);
              $('#no_inside').val(data.no_inside);
              $('#state_id').val(data.state);
              $('#municipality_id').val(data.municipality);
            });
          });

          $('#search_product').on('change', function () {
            $.get( "{{ url('/products/') }}" + '/' + $('#search_product').val(), function( data ) {
              data = JSON.parse(data);
              $('#description').val(data.description);
              $('#price').val(data.price);
            });
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
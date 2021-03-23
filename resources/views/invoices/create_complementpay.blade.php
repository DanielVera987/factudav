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

    <link href="{{ asset('/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    <style>
      .select2 {
        width:100%!important;
      }
    </style>
@endsection

@section('content')
<form id="demo-form" method="POST" action="{{ route('invoices.store') }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-file-text"></i> Agregar Complemento de Pago</h2>
      <div class="clearfix"></div>
      <br>
      @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
      @if(session()->has('warning'))
        <div class="alert alert-warning">
            {{ session()->get('warning') }}
        </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Administrar Pago</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
            <div class="row">
              <div class="col-md-4">
                <h5>
                  <label>Serie :</label>
                  Factura-
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Folio :</label>
                  0000000030
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Monto de Pagado :</label>
                  $2,300.00
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Monto Pendiente :</label>
                  $1,500.00
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Moneda :</label>
                  MXN
                </h5>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h2>Nuevo Pago</h2>
              </div>
            </div>

            <div class="row">  
              <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="serie">Serie *: <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Prefijo para la factura ejemplo: Si tienes dos puntos de venta Almacen 1, Almacen 2 entonces el prefijo puede ser A1-, A2-"></i></label>
                <input type="text" id="serie" name="serie" class="form-control" data-parsley-trigger="change" value="{{ old('serie') ?? $serie->start_serie }}" required />
                @error('serie')
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
                  <input type="text" id="folio" class="form-control" name="folio" value="{{ old('folio') ?? $folio }}" data-parsley-trigger="change" required readonly/>
                  @error('folio')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="date">Fecha *:</label>
                        <input type="text" id="date" class="form-control" name="date" value="{{ old('date') }}" data-parsley-trigger="change" required />                        
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="type_voucher">Tipo de Comprobante * :</label>
                      <select id="type_voucher" name="type_voucher" class="form-control select2" value="{{ old('type_voucher') }}" required data-parsley-trigger="change">
                        <option value="P">P - Pago</option>
                      </select>
                      @error('type_voucher')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                </div>
              
                <hr>
                <h2>Información del Complemento de Pago</h2>

                <div class="row">  
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="rfc_search">Fecha de Pago * :</label>
                        <input type="text" id="rfc_search" class="form-control" value="{{ old('rfc_search') }}" data-parsley-trigger="change" required />
                        @error('rfc_search')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="way_to_pay_id">Forma de Pago * :</label>
                      <select id="way_to_pay_id" name="way_to_pay_id" class="form-control select2" value="{{ old('way_to_pays_id') }}" required data-parsley-trigger="change">
                        @foreach($waytopays as $value)
                          <option value="{{ $value->id }}">{{ $value->code }} - {{ $value->name }}</option>
                        @endforeach
                      </select>
                      @error('way_to_pay_id')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="bussine_name_search">Monto * :</label>
                        <input type="text" id="bussine_name_search" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name_search') }}" required />
                        @error('bussine_name_search')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="zip_search">Número de Operación <small>(Opcional)</small> :</label>
                      <input type="text" id="zip_search" class="form-control" data-parsley-trigger="change" value="{{ old('zip_search') }}" required />
                      @error('zip_search')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="street_search">RFC Emisor cuenta ordenante <small>(Opcional)</small> :</label>
                        <input type="text" id="street_search" class="form-control" value="{{ old('street_search') }}" data-parsley-trigger="change" required />
                        @error('street_search')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="no_exterior_search">Cuenta ordenante <small>(Opcional)</small> *:</label>
                        <input type="text" id="no_exterior_search" class="form-control" value="{{ old('no_exterior_search') }}" data-parsley-trigger="change" required />
                        @error('no_exterior_search')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="no_inside_search">RFC Emisor cuenta beneficiaria <small>(Opcional)</small> :</label>
                        <input type="text" id="no_inside_search" class="form-control" value="{{ old('no_inside_search') }}" data-parsley-trigger="change" required />
                        @error('no_inside_search')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="no_exterior_search">Cuenta beneficiaria <small>(Opcional)</small> :</label>
                      <input type="text" id="no_exterior_search" class="form-control" value="{{ old('no_exterior_search') }}" data-parsley-trigger="change" required />
                      @error('no_exterior_search')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <br />
                <div class="row">
                  <div class="col-md-3">
                    <strong>Importe saldo anterior</strong>
                    <br />$2,300.00
                  </div>

                  <div class="col-md-3">
                    <strong>Importe pagado</strong>
                    <br />$1,000.00
                  </div>

                  <div class="col-md-3">
                    <strong>Importe saldo insoluto</strong>
                    <br />$1,300.00
                  </div>

                  <div class="col-md-3">
                    <strong>No. de parcialidad</strong>
                    <br />1
                  </div>
                </div>

                <div class="row">
                    <br/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        </br>
                        <div class="actionBar">
                            <button class="btn btn-success float-rigth">Timbrar Pago</button>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- end form for validations -->
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
@endsection

@section('script')
    <!-- DecimalJS -->
    <script src="{{ asset('/vendors/decimal.js/decimal.min.js') }}"></script>
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
    <!-- Moment -->
    <script src="{{ asset('/vendors/moment/min/moment.min.js') }}"></script>
    <!-- invoices -->
    <script src="{{ asset('/js/helpers/invoices.js') }}"></script>
    <script>
      jQuery(document).ready(function($){
        $(document).ready(function() {
          //Momentjs
          $('#date').val(moment().format('YYYY-MM-DDTHH:mm:ss'));
          
          $('#search_product').select2({
            placeholder: 'Escribe para comenzar a buscar',
            ajax: {
                url: '/searchProducts',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: `${item.name}`,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
          });

          $('#search_product').on('change', function () {
            $.get( "{{ url('/products/') }}" + '/' + $('#search_product').val(), function( data ) {
              $('#quantity_search').val(1);
              $('#quantity_search').focus();
              $('#description_search').val(data.description);
              $('#discount_search').val(0)
              $('#price_search').val(data.price);
              $('#produserv_id_search').prepend($('<option />', {
                text: `${data.produserv_code} - ${data.produserv_name}`,
                value: data.produserv_id,
              }));

              $('#unit_id_search').prepend($('<option />', {
                text: `${data.unit_code} - ${data.unit_name}`,
                value: data.unit_id,
              }));
            });
          });

          $('#produserv_id_search').select2({
            placeholder: 'Escribe para comenzar a buscar',
            ajax: {
              url: '/searchProduServ',
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

          $('#unit_id_search').select2({
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

          $('#search_customer').select2({
            placeholder: 'Escribe para comenzar a buscar',
            ajax: {
              url: '/searchCustomers',
              dataType: 'json',
              delay: 250,
              processResults: function (data) {
                  return {
                      results: $.map(data, function (item) {
                          return {
                              text: `${item.bussine_name}`,
                              id: item.id
                          }
                      })
                  };
              },
              cache: true
            }
          });

          $('#search_customer').on('change', function () {
            $.get("{{ url('/customers/') }}" + '/' + $('#search_customer').val(), function(data) {
              $('#rfc_search').val(data.rfc);
              $('#bussine_name_search').val(data.bussine_name);
              $('#zip_search').val(data.zip);
              $('#street_search').val(data.street);
              $('#no_exterior_search').val(data.no_exterior);
              $('#no_inside_search').val(data.no_inside);
              $('#state_id_search').val(data.state);
              $('#municipality_id_search').val(data.municipality);
            })
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

    <script src="{{ asset('/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
@endsection
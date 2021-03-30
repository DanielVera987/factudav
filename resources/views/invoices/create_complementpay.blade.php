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
<form id="demo-form" method="POST" action="{{ route('invoices.store.complement', $invoice->id) }}" enctype="multipart/form-data" data-parsley-validate>
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
                  {{ \Auth::user()->bussine->start_serie }}
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Folio :</label>
                  {{ $invoice->folio }}
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Monto Pagado :</label>
                  @empty($invoice->complementpay)
                    $ 0.00
                  @else
                    $ 
                    @php                     
                      $cont = 0;   
                      foreach ($invoice->complementpay as $value) {
                        $cont = $cont + $value['amount_paid'];
                      }
                      echo bcdiv($cont, '1', 2);
                    @endphp
                  @endempty
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Monto Pendiente :</label>
                  @empty($invoice->complementpay)
                    @php
                      $xml = \CfdiUtils\Cfdi::newFromString(file_get_contents(public_path('storage/invoicexml/' . $invoice->name_file)))
                        ->getQuickReader();

                      echo '$'.$xml['Total']
                    @endphp
                  @else
                    $ 
                    @php                     
                      $i = count($invoice->complementpay);
                      $amount_unpaid = $invoice->complementpay[$i - 1]['amount_unpaid'];
                      echo bcdiv($amount_unpaid, '1', 2);
                    @endphp
                  @endempty
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>Moneda :</label>
                  {{ $invoice->currency->code }}
                </h5>
              </div>

              <div class="col-md-4">
                <h5>
                  <label>No. de parcialidad :</label>
                  {{ count($invoice->complementpay) + 1 }}
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

              <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="currency_id">Tipo de Cambio * :</label>
                <input type="text" id="type_change" name="type_change" class="form-control" data-parsley-trigger="change" value="" readonly='readonly' />
                @error('type_change')
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
                      <label for="type_vaucher">Tipo de Comprobante * :</label>
                      <select id="type_vaucher" name="type_vaucher" class="form-control select2" value="{{ old('type_vaucher') }}" required data-parsley-trigger="change">
                        <option value="P">P - Pago</option>
                      </select>
                      @error('type_vaucher')
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
                        <label for="date_pay">Fecha de Pago * :</label>
                        <input type="text" id="date_pay" name="date_pay" class="form-control" value="{{ old('date_pay') }}" data-parsley-trigger="change" required />
                        @error('date_pay')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="way_to_pay_id">Forma de Pago * :</label>
                      <select id="way_to_pay_id" name="way_to_pay_id" class="form-control select2" value="{{ old('way_to_pay_id') }}" required data-parsley-trigger="change">
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
                        <label for="amount">Monto * :</label>
                        <input type="number" id="amount" name="amount" class="form-control" data-parsley-trigger="change" value="{{ old('amount') }}" required />
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="num_operation">Número de Operación <small>(Opcional)</small> :</label>
                      <input type="text" id="num_operation" name="num_operation" class="form-control" data-parsley-trigger="change" value="{{ old('num_operation') }}" />
                      @error('num_operation')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="rfc_payer">RFC Emisor cuenta ordenante <small>(Opcional)</small> :</label>
                        <input type="text" id="rfc_payer" name="rfc_payer" class="form-control" value="{{ old('rfc_payer') }}" data-parsley-trigger="change" />
                        @error('rfc_payer')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="account_payer">Cuenta ordenante <small>(Opcional)</small> *:</label>
                        <input type="text" id="account_payer" name="account_payer" class="form-control" value="{{ old('account_payer') }}" data-parsley-trigger="change" />
                        @error('account_payer')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label for="rfc_beneficiary">RFC Emisor cuenta beneficiaria <small>(Opcional)</small> :</label>
                        <input type="text" id="rfc_beneficiary" name="rfc_beneficiary" class="form-control" value="{{ old('rfc_beneficiary') }}" data-parsley-trigger="change" />
                        @error('rfc_beneficiary')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <label for="account_beneficiary">Cuenta beneficiaria <small>(Opcional)</small> :</label>
                      <input type="text" id="account_beneficiary" name="account_beneficiary" class="form-control" value="{{ old('account_beneficiary') }}" data-parsley-trigger="change" />
                      @error('account_beneficiary')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <br />
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
          $('#date_pay').val(moment().format('YYYY-MM-DDTHH:mm:ss'));
          
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

          $('#currency_id').on('change', function() {
            let val = $('#currency_id').val();
            if(val != 'MXN')
              $('#type_change').attr('readonly', true);
            else 
              $('#type_change').attr('readonly', false);

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
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
<form id="demo-form" method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-users"></i> Agregar Cliente</h2>
      <div class="clearfix"></div>
      @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos del Cliente</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Direcciones</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
            <div class="row">
              <div class="row">  
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="bussine_name">Razón Social *:</label>
                  <input type="text" id="bussine_name" name="bussine_name" class="form-control" data-parsley-trigger="change" value="{{ old('bussine_name') }}" required />
                  @error('bussine_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="tradename">Nombre Comercial * :</label>
                  <input type="text" id="tradename" name="tradename" class="form-control" data-parsley-trigger="change" value="{{ old('tradename') }}" required />
                  @error('tradename')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">  
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="rfc">RFC * :</label>
                  <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required />
                  @error('rfc')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="email">Email * :</label>
                  <input type="email" id="email" name="email" class="form-control" data-parsley-trigger="change" value="{{ old('email') }}" required />
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="telephone">Telefono *:</label>
                  <input type="tel" id="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" data-parsley-trigger="change" required />
                  @error('telephone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="usecfdi_id">Uso de CFDI *:</label>
                  <select id="usecfdi_id" name="usecfdi_id" class="form-control select2" value="{{ old('usecfdi_id') }}" required data-parsley-trigger="change">
                    @foreach($usecfdis as $value)
                      <option value="{{ $value->id }}">{{ $value->code  }} | {{ $value->name  }}</option>
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
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="country_id">País * :</label>
                  <select id="country_id" class="form-control" name="country_id" required data-parsley-trigger="change">
                    @foreach($contries as $value)
                      <option value="{{ $value->id }}">{{ $value->name  }}</option>
                    @endforeach
                  </select>
                  @error('country_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="state_id">Estado *:</label>
                  <select id="state_id" name="state_id" class="form-control select2" value="{{ old('state_id') }}" required data-parsley-trigger="change">
                    @foreach($states as $value)
                      <option value="{{ $value->id }}">{{ $value->name  }}</option>
                    @endforeach
                  </select>
                  @error('state_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>                  
              </div>

              <div class="row">  
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="municipality_id">Municipio *:</label>
                  <select id="municipality_id" name="municipality_id" class="form-control select2" value="{{ old('municipality_id') }}" required data-parsley-trigger="change">
                      <option value="" disabled>Seleccionar...</option>
                  </select>
                  @error('municipality_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="no_inside">No. Interior * :</label>
                  <input type="text" id="no_inside" name="no_inside" class="form-control" data-parsley-trigger="change" value="{{ old('no_inside') }}" required />
                  @error('no_inside')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="location">Localidad * :</label>
                  <input type="text" id="location" name="location" class="form-control" data-parsley-trigger="change" value="{{ old('location') }}" required />
                  @error('location')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="street">Calle * :</label>
                  <input type="text" id="street" name="street" class="form-control" data-parsley-trigger="change" value="{{ old('street') }}" required />
                  @error('street')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="colony">Colonia * :</label>
                  <input type="text" id="colony" name="colony" class="form-control" data-parsley-trigger="change" value="{{ old('colony') }}" required />
                  @error('colony')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="zip">Código Postal * :</label>
                  <input type="text" id="zip" name="zip" class="form-control" data-parsley-trigger="change" value="{{ old('zip') }}" required />
                  @error('zip')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="no_exterior">No. Exterior * :</label>
                  <input type="text" id="no_exterior" name="no_exterior" class="form-control" data-parsley-trigger="change" value="{{ old('no_exterior') }}" required />
                  @error('no_exterior')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="no_inside">No. Interior * :</label>
                  <input type="text" id="no_inside" name="no_inside" class="form-control" data-parsley-trigger="change" value="{{ old('no_inside') }}" required />
                  @error('no_inside')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div> 

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="street_reference">Referencias de domicilio:</label>
                  <textarea id="street_reference" name="street_reference" class="form-control select2" value="{{ old('street_reference') }}"></textarea>
                  @error('street_reference')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

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
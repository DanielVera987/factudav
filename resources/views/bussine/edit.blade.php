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
@endsection

@section('content')
<form id="demo-form" method="POST" action="{{ route('settings.update', [$bussine->id]) }}" data-parsley-validate>
  @csrf
  @method('PUT')
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-institution"></i> Configuración General</h2>
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
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Configuración Facturación</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
                <div class="row">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="center-block">
                        <div class="profile_img">
                          <div id="crop-avatar">
                            <img class="img-responsive avatar-view center-block" src="{{ asset('/images/davadev.png') }}" width="200" id="previewlogo"  alt="Avatar" title="">
                            <input type="file" name="logo" value="{{ old('logo') }}" id="logo" data-parsley-trigger="change" required>
                              @error('logo')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="col-md-6">
                        <label for="bussine_name">Razón Social * :</label>
                        <input type="text" id="bussine_name" class="form-control" value="{{ $bussine->bussine_name }}" name="bussine_name" required />
                        @error('bussine_name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    
                      <div class="col-md-6">
                        <label for="tradaname">Nombre Comercial * :</label>
                        <input type="text" id="tradaname" class="form-control" value="{{ $bussine->tradename }}" name="tradaname" required />
                        @error('tradaname')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="col-md-6">
                        <label for="rfc">RFC * :</label>
                        <input type="text" id="rfc" class="form-control" name="rfc" value="{{ $bussine->rfc }}" data-parsley-trigger="change" required />
                        @error('rfc')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
    
                      <div class="col-md-6">
                        <label for="email">Correo Electrónico * :</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ $bussine->email }}" data-parsley-trigger="change" required />
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="phone">Teléfono * :</label>
                    <input type="tel" id="phone" class="form-control" name="phone" value="{{ $bussine->telephone }}" data-parsley-trigger="change" required />
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4">
                    <label for="type_person">Tipo Persona *:</label>
                    <select id="type_person" name="type_person" class="form-control" value="{{ $bussine->type_person }}" required data-parsley-trigger="change">
                      <option value="M">Moral</option>
                      <option value="F">Fisica</option>
                    </select>
                    @error('type_person')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4">
                    <label for="taxregimen">Régimen Fiscal *:</label>
                    <select id="taxregimen" name="taxregimen" class="form-control" value="{{ $bussine->taxregimen }}" required data-parsley-trigger="change">
                      @foreach($tax_regimens as $value)
                        <option value="{{ $value->id }}" @if($bussine->taxregimen_id == $value->id) selected  @endif>{{ $value->code  }} | {{ $value->name  }}</option>
                      @endforeach
                    </select>
                    @error('taxregimen')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="country">País * :</label>
                    <select id="country" class="form-control" name="country" required data-parsley-trigger="change">
                      @foreach($contries as $value)
                        <option value="{{ $value->id }}">{{ $value->name  }}</option>
                      @endforeach
                    </select>
                    @error('country')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="state">Estado *:</label>
                    <select id="state" name="state" class="form-control" required data-parsley-trigger="change">
                      @foreach($states as $value)
                        <option value="{{ $value->id }}" @if($bussine->state_id == $value->id) selected @endif>{{ $value->name }}</option>
                      @endforeach
                    </select>
                    @error('state')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="municipality">Municipio *:</label>
                    <select id="municipality" name="municipality" class="form-control" value="{{ $bussine->municipality }}" required data-parsley-trigger="change">
                        <option value="" disabled>Seleccionar...</option>
                    </select>
                    @error('municipality')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="location">Localidad * :</label>
                    <input type="text" id="location" name="location" class="form-control" data-parsley-trigger="change" value="{{ $bussine->location }}" required />
                    @error('location')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="street">Calle * :</label>
                    <input type="text" id="street" name="street" class="form-control" data-parsley-trigger="change" value="{{ $bussine->street }}" required />
                    @error('street')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="colony">Colonia * :</label>
                    <input type="text" id="colony" name="colony" class="form-control" data-parsley-trigger="change" value="{{ $bussine->colony }}" required />
                    @error('colony')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="zip">Código Postal * :</label>
                    <input type="text" id="zip" name="zip" class="form-control" data-parsley-trigger="change" value="{{ $bussine->zip }}" required />
                    @error('zip')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="noexterior">No. Exterior * :</label>
                    <input type="text" id="noexterior" name="noexterior" class="form-control" data-parsley-trigger="change" value="{{ $bussine->no_exterior }}" required />
                    @error('noexterior')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4">
                    <label for="nointerior">No. Interior * :</label>
                    <input type="text" id="nointerior" name="nointerior" class="form-control" data-parsley-trigger="change" value="{{ $bussine->no_inside }}" required />
                    @error('nointerior')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <br/>
                  <div class="col-md-12">
                    </br>
                    <div class="actionBar">
                      <button class="btn btn-primary float-rigth" role="tab" id="profile-tab" onclick="document.getElementById('profile-tab2').click();" data-toggle="tab" aria-expanded="false">Siguiente</button>
                    </div>
                  </div>
                </div>
              
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">    
              <div class="row">
                <div class="col-md-4">
                  <label for="certificate">Certificado:</label>
                  <input type="file" class="form-control" id="certificate" name="certificate" data-parsley-trigger="change" value="{{ $bussine->centificate }}"/>
                  @error('certificate')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4">
                  <label for="privatekey">Llave Privada:</label>
                  <input type="file" class="form-control" id="privatekey" name="privatekey" data-parsley-trigger="change" value="{{ $bussine->privatekey }}"/>
                  @error('privatekey')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4">
                  <label for="password">Contraseña:</label>
                  <input type="password" id="password" name="password" class="form-control" data-parsley-trigger="change" value="{{ $bussine->password }}"/>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4">
                  <label for="name_pac">PAC:</label>
                  <input type="text" id="name_pac" name="name_pac" class="form-control" data-parsley-trigger="change" value="{{ $bussine->name_pac }}"/>
                  @error('name_pac')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4">
                  <label for="password_pac">Contraseña PAC:</label>
                  <input type="text" id="password_pac" name="password_pac" class="form-control" data-parsley-trigger="change" value="{{ $bussine->password_pac }}"/>
                  @error('password_pac')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <br/>
                <div class="col-md-12">
                  </br>
                  <div class="actionBar">
                    <button class="btn btn-primary float-rigth" role="tab" onclick="document.getElementById('home-tab').click();" data-toggle="tab" aria-expanded="false">Anterior</button>
                    <input type="submit" class="btn btn-primary float-rigth" value="Guardar">
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
    <script src="{{ asset('/js/helpers/country.js') }}"></script>
    <script>
      let $select = document.getElementById('municipality');
      jQuery(document).ready(function($){
        $(document).ready(function() {
          $('#state').on('change', function () {
            /* Ajax */
            $.get( "{{ url('/municipalities/') }}" + '/' + $('#state').val(), function( data ) {
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
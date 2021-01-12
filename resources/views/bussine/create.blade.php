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
<form id="demo-form" method="POST" action="{{ route('settings.store') }}" data-parsley-validate>
  @csrf
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-institution"></i> Configuración General</h2>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
      <div class="clearfix"></div>
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
                            <img class="img-responsive avatar-view center-block" src="{{ asset('/images/picture.jpg') }}"  alt="Avatar" title="">
                            <input type="file" name="logo" value="{{ old('logo') }}" id="logo">
                            </br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="col-md-6">
                        <label for="bussine_name">Razón Social * :</label>
                        <input type="text" id="bussine_name" class="form-control" value="{{ old('bussine_name') }}" name="bussine_name" required />
                      </div>
                    
                      <div class="col-md-6">
                        <label for="tradaname">Nombre Comercial * :</label>
                        <input type="text" id="tradaname" class="form-control" value="{{ old('tradaname') }}" name="tradaname" required />
                      </div>

                      <div class="col-md-6">
                        <label for="rfc">RFC * :</label>
                        <input type="text" id="rfc" class="form-control" name="rfc" value="{{ old('rfc') }}" data-parsley-trigger="change" required />
                      </div>
    
                      <div class="col-md-6">
                        <label for="email">Correo Electrónico * :</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" data-parsley-trigger="change" required />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="phone">Teléfono * :</label>
                    <input type="tel" id="phone" class="form-control" name="phone" value="{{ old('phone') }}" data-parsley-trigger="change" required />
                  </div>

                  <div class="col-md-4">
                    <label for="type_person">Tipo Persona *:</label>
                    <select id="type_person" name="type_person" class="form-control" value="{{ old('type_person') }}" required>
                      <option value="M">Moral</option>
                      <option value="F">Fisica</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="taxregimen">Régimen Fiscal *:</label>
                    <select id="taxregimen" name="taxregimen" class="form-control" value="{{ old('taxregimen') }}" required>
                      <option value="M">Moral</option>
                      <option value="F">Fisica</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="country">País * :</label>
                    <input type="text" id="country" class="form-control" name="country" value="{{ old('country') }}" data-parsley-trigger="change" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="state">Estado *:</label>
                    <select id="state" name="state" class="form-control" value="{{ old('state') }}" required>
                      <option value="d">Moral</option>
                      <option value="press">Fisica</option>
                    </select>
                  </div>
  
                  <div class="col-md-4">
                    <label for="municipality">Municipio *:</label>
                    <select id="municipality" name="municipality" class="form-control" value="{{ old('municipality') }}" required>
                      <option value="d">Moral</option>
                      <option value="press">Fisica</option>
                    </select>
                  </div>
  
                  <div class="col-md-4">
                    <label for="location">Localidad * :</label>
                    <input type="text" id="location" name="location" class="form-control" data-parsley-trigger="change" value="{{ old('location') }}" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="street">Calle * :</label>
                    <input type="text" id="street" name="street" class="form-control" data-parsley-trigger="change" value="{{ old('street') }}" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="colony">Colonia * :</label>
                    <input type="text" id="colony" name="colony" class="form-control" data-parsley-trigger="change" value="{{ old('colony') }}" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="zip">Código Postal * :</label>
                    <input type="text" id="zip" name="zip" class="form-control" data-parsley-trigger="change" value="{{ old('zip') }}" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="noexterior">No. Exterior * :</label>
                    <input type="text" id="noexterior" name="noexterior" class="form-control" data-parsley-trigger="change" value="{{ old('noexterior') }}" required />
                  </div>
  
                  <div class="col-md-4">
                    <label for="nointerior">No. Interior * :</label>
                    <input type="text" id="nointerior" name="nointerior" class="form-control" data-parsley-trigger="change" value="{{ old('nointerior') }}" required />
                  </div>

                  <br/>
                  <div class="col-md-12">
                    </br>
                    <div class="actionBar">
                      <a href="#tab_content2" class="btn btn-primary float-rigth" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Siguiente</a>
                    </div>
                  </div>
                </div>
              
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">    
              <div class="row">
                <div class="col-md-4">
                  <label for="centificate">Certificado:</label>
                  <input type="file" class="form-control" id="centificate" name="centificate" data-parsley-trigger="change" value="{{ old('centificate') }}"/>
                </div>

                <div class="col-md-4">
                  <label for="privatekey">Llave Privada:</label>
                  <input type="file" class="form-control" id="privatekey" name="privatekey" data-parsley-trigger="change" value="{{ old('privatekey') }}"/>
                </div>

                <div class="col-md-4">
                  <label for="password">Contraseña:</label>
                  <input type="password" id="password" name="password" class="form-control" data-parsley-trigger="change" value="{{ old('password') }}"/>
                </div>

                <div class="col-md-4">
                  <label for="name_pac">PAC:</label>
                  <input type="text" id="name_pac" name="name_pac" class="form-control" data-parsley-trigger="change" value="{{ old('name_pac') }}"/>
                </div>

                <div class="col-md-4">
                  <label for="password_pac">Contraseña PAC:</label>
                  <input type="text" id="password_pac" name="password_pac" class="form-control" data-parsley-trigger="change" value="{{ old('password_pac') }}"/>
                </div>

                <br/>
                <div class="col-md-12">
                  </br>
                  <div class="actionBar">
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
    <!-- Parsley -->
    <script src="{{ asset('/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('/vendors/starrr/dist/starrr.js') }}"></script>
@endsection
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
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-institution"></i> Configuración General</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos Generales <i class="fa fa-warning"></i></a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Direcciones</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Configuración Facturación</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
              <form id="demo-form" data-parsley-validate>
                <div class="row">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="center-block">
                        <div class="profile_img">
                          <div id="crop-avatar">
                            <img class="img-responsive avatar-view center-block" src="images/picture.jpg" alt="Avatar" title="">
                            <input type="file">
                            </br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="col-md-6">
                        <label for="fullname">Razón Social * :</label>
                        <input type="text" id="fullname" class="form-control" name="fullname" required />
                      </div>
                    
                      <div class="col-md-6">
                        <label for="fullname">Nombre Comercial * :</label>
                        <input type="text" id="fullname" class="form-control" name="fullname" required />
                      </div>

                      <div class="col-md-6">
                        <label for="email">RFC * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                      </div>
    
                      <div class="col-md-6">
                        <label for="email">Correo Electrónico * :</label>
                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="email">Teléfono * :</label>
                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                  </div>

                  <div class="col-md-4">
                    <label for="heard">Tipo Persona *:</label>
                    <select id="heard" class="form-control" required>
                      <option value="">Moral</option>
                      <option value="press">Fisica</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="heard">Régimen Fiscal *:</label>
                    <select id="heard" class="form-control" required>
                      <option value="">Moral</option>
                      <option value="press">Fisica</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="email">Registro Patronal * :</label>
                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                  </div>

                  <div class="col-md-4">
                    <label for="email">CURP * :</label>
                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                  </div>

                  <br/>
                  <div class="col-md-12">
                    </br>
                    <div class="actionBar">
                      <input type="submit" class="btn btn-primary float-rigth" value="Guardar">
                    </div>
                  </div>
                </div>
              </form>
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            <form id="demo-form" data-parsley-validate>
              <div class="row">
                <div class="col-md-4">
                  <label for="email">País * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="heard">Estado *:</label>
                  <select id="heard" class="form-control" required>
                    <option value="">Moral</option>
                    <option value="press">Fisica</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="heard">Municipio *:</label>
                  <select id="heard" class="form-control" required>
                    <option value="">Moral</option>
                    <option value="press">Fisica</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="email">Localidad * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Calle * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Colonia * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Código Postal * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">No. Exterior * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">No. Interior * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <br/>
                <div class="col-md-12">
                  </br>
                  <div class="actionBar">
                    <input type="submit" class="btn btn-primary float-rigth" value="Guardar">
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <form id="demo-form" data-parsley-validate>
              <div class="row">
                <div class="col-md-4">
                  <label for="email">Certificado * :</label>
                  <input type="file" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Llave Privada * :</label>
                  <input type="file" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Contraseña * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">PAC * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <div class="col-md-4">
                  <label for="email">Contraseña PAC * :</label>
                  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                </div>

                <br/>
                <div class="col-md-12">
                  </br>
                  <div class="actionBar">
                    <input type="submit" class="btn btn-primary float-rigth" value="Guardar">
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>
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
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
      <h2>Configuración General</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos Generales</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Direcciones</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sellos Digitales</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">

          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
              
              <form id="demo-form" data-parsley-validate>
                <div class="row">
                  <div class="col-md-4">
                    <label for="fullname">Razon Social * :</label>
                    <input type="text" id="fullname" class="form-control" name="fullname" required />
                  </div>
                
                  <div class="col-md-4">
                    <label for="email">RFC * :</label>
                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                  </div>

                  <div class="col-md-4">
                    <label for="fullname">Nombre Comercial * :</label>
                    <input type="text" id="fullname" class="form-control" name="fullname" required />
                  </div>

                  <div class="col-md-4">
                    <label for="heard">Tipo Persona *:</label>
                    <select id="heard" class="form-control" required>
                      <option value="">Moral</option>
                      <option value="press">Fisica</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="message">Message (20 chars min, 100 max) :</label>
                    <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                      data-parsley-validation-threshold="10"></textarea>
                  </div>

                  <br/>
                  <div class="col-md-12">
                    </br>
                    <span class="btn btn-primary">Validate form</span>
                  </div>
                </div>
              </form>
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            <p>Food truck fixie locavore, accusamus mcsweeneys marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
              booth letterpress, commodo enim craft beer mlkshk aliquip</p>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <p>xxFood truck fixie locavore, accusamus mcsweeneys marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
              booth letterpress, commodo enim craft beer mlkshk </p>
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
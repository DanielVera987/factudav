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
<form id="demo-form" method="POST" action="{{ route('settings.update', [$bussine->id]) }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  @method('PUT')
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-institution"></i> Configuración General</h2>
      <div class="clearfix"></div>
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
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-cog"></i> Datos Generales</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-file-text"></i> Facturación</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false"><i class="fa fa-money"></i> Monedas</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false"><i class="fa fa-file"></i> Impuestos</a>
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
                            <img class="img-responsive avatar-view center-block" src="{{ asset('/images/logos/'. $bussine->logo) }}" width="200" id="previewlogo"  alt="Avatar" title="">
                            <label for="logo">Logo * :</label>
                            <input type="file" name="logo" class="@error('logo') parsley-error @enderror" value="" id="logo">
                              @error('logo')
                                <span class="invalid-feedback red" role="alert">
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
                        <label for="bussine_name">Razón Social * :</label>
                        <input type="text" id="bussine_name" class="form-control @error('bussine_name') parsley-error @enderror" value="{{ $bussine->bussine_name }}" name="bussine_name" required />
                        @error('bussine_name')
                          <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="tradename">Nombre Comercial * :</label>
                        <input type="text" id="tradename" class="form-control @error('tradename') parsley-error @enderror" value="{{ $bussine->tradename }}" name="tradename" required />
                        @error('tradename')
                          <span class="invalid-feedback red" role="alert">
                            <strong >{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="rfc">RFC * :</label>
                        <input type="text" id="rfc" class="form-control @error('rfc') parsley-error @enderror" name="rfc" value="{{ $bussine->rfc }}" data-parsley-trigger="change" required />
                        @error('rfc')
                          <span class="invalid-feedback red" role="alert">
                            <strong >{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
    
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <label for="email">Correo Electrónico * :</label>
                        <input type="email" id="email" class="form-control @error('email') parsley-error @enderror"  name="email" value="{{ $bussine->email }}" data-parsley-trigger="change" required />
                        @error('email')
                          <span class="invalid-feedback red" role="alert">
                            <strong >{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="telephone">Teléfono * :</label>
                    <input type="tel" id="telephone" class="form-control @error('telephone') parsley-error @enderror" name="telephone" value="{{ $bussine->telephone }}" data-parsley-trigger="change" required />
                    @error('telephone')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="type_person">Tipo Persona *:</label>
                    <select id="type_person" name="type_person" class="form-control @error('type_person') parsley-error @enderror" value="{{ $bussine->type_person }}" required data-parsley-trigger="change">
                      <option value="M">Moral</option>
                      <option value="F">Fisica</option>
                    </select>
                    @error('type_person')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="taxregimen_id">Régimen Fiscal *:</label>
                    <select id="taxregimen_id" name="taxregimen_id" class="form-control @error('taxregimen_id') parsley-error @enderror" value="{{ $bussine->taxregimen_id }}" required data-parsley-trigger="change">
                      @foreach($tax_regimens as $value)
                        <option value="{{ $value->id }}" @if($bussine->taxregimen_id == $value->id) selected  @endif>{{ $value->code  }} | {{ $value->name  }}</option>
                      @endforeach
                    </select>
                    @error('taxregimen_id')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="country_id">País * :</label>
                    <select id="country_id" class="form-control @error('country_id') parsley-error @enderror" name="country_id" required data-parsley-trigger="change">
                      @foreach($contries as $value)
                        <option value="{{ $value->id }}">{{ $value->name  }}</option>
                      @endforeach
                    </select>
                    @error('country_id')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="state_id">Estado *:</label>
                    <select id="state_id" name="state_id" class="form-control @error('state_id') parsley-error @enderror" required data-parsley-trigger="change">
                      @foreach($states as $value)
                        <option value="{{ $value->id }}" @if($bussine->state_id == $value->id) selected @endif>{{ $value->name }}</option>
                      @endforeach
                    </select>
                    @error('state_id')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="municipality_id">Municipio *:</label>
                    <select id="municipality_id" name="municipality_id" class="form-control @error('municipality_id') parsley-error @enderror" value="{{ $bussine->municipality_id }}" required data-parsley-trigger="change">
                        <option value="" disabled>Seleccionar...</option>
                        @foreach($municipalities as $value)
                        <option value="{{ $value->id }}" @if($bussine->municipality_id == $value->id) selected @endif>{{ $value->name }}</option>
                      @endforeach
                    </select>
                    @error('municipality_id')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="location">Localidad * :</label>
                    <input type="text" id="location" name="location" class="form-control @error('location') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->location }}" required />
                    @error('location')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="street">Calle * :</label>
                    <input type="text" id="street" name="street" class="form-control @error('street') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->street }}" required />
                    @error('street')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="colony">Colonia * :</label>
                    <input type="text" id="colony" name="colony" class="form-control @error('colony') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->colony }}" required />
                    @error('colony')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="zip">Código Postal * :</label>
                    <input type="text" id="zip" name="zip" class="form-control @error('zip') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->zip }}" required />
                    @error('zip')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="no_exterior">No. Exterior * :</label>
                    <input type="text" id="no_exterior" name="no_exterior" class="form-control @error('no_exterior') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->no_exterior }}" required />
                    @error('no_exterior')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="no_inside">No. Interior * :</label>
                    <input type="text" id="no_inside" name="no_inside" class="form-control @error('no_inside') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->no_inside }}" required />
                    @error('no_inside')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
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
              
            <!-- end form for validations -->
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">    
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="serie">Serie: <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Prefijo para la factura ejemplo: Factura-"></i></label>
                  <input type="text" class="form-control @error('serie') parsley-error @enderror" id="serie" name="serie" data-parsley-trigger="change" value="{{ $bussine->start_serie }}"/>
                  @error('serie')
                    <span class="invalid-feedback red" role="alert">
                      <strong >{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="folio">Folio: <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="ingresa el número  con el que vas a elaborar la próxima factura, Folio predeterminado: 0000000001"></i></label>
                  <input type="text" class="form-control @error('folio') parsley-error @enderror" id="folio" name="folio" data-parsley-trigger="change" value="{{ $bussine->start_folio }}"/>
                  @error('folio')
                    <span class="invalid-feedback red" role="alert">
                      <strong >{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <hr>
                  <h4>Datos Para Timbrado</h4>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="certificate">Certificado:</label>
                    <input type="file" accept=".cer" class="form-control @error('certificate') parsley-error @enderror" id="certificate" name="certificate" data-parsley-trigger="change" value="{{ $bussine->centificate }}"/>
                    @if ($bussine->certificate != '' && $bussine->certificate)    
                      <small class="text-small green">
                        <strong>Certificado ya registrado</strong>
                      </small>
                    @endif

                    @error('certificate')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="key_private">Llave Privada:</label>
                    <input type="file" accept=".key" class="form-control @error('key_private') parsley-error @enderror" id="key_private" name="key_private" data-parsley-trigger="change" value="{{ $bussine->key_private }}"/>
                    @if ($bussine->key_private != '' && $bussine->key_private)    
                      <small class="text-small green">
                        <strong>Llave privada ya registrado</strong>
                      </small>
                    @endif
                    @error('key_private')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->password }}"/>
                    @error('password')
                      <span class="invalid-feedback red" role="alert">
                        <strong >{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="name_pac">PAC:</label>
                  <input type="text" id="name_pac" name="name_pac" class="form-control @error('name_pac') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->name_pac }}"/>
                  @error('name_pac')
                    <span class="invalid-feedback red" role="alert">
                      <strong >{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="password_pac">Contraseña PAC:</label>
                  <input type="text" id="password_pac" name="password_pac" class="form-control @error('password_pac') parsley-error @enderror" data-parsley-trigger="change" value="{{ $bussine->password_pac }}"/>
                  @error('password_pac')
                    <span class="invalid-feedback red" role="alert">
                      <strong >{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <br/>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  </br>
                  <div class="actionBar">
                    <button class="btn btn-primary float-rigth" role="tab" onclick="document.getElementById('home-tab').click();" data-toggle="tab" aria-expanded="false">Anterior</button>
                    <button class="btn btn-primary float-rigth" role="tab" id="profile-tab" onclick="document.getElementById('profile-tab3').click();" data-toggle="tab" aria-expanded="false">Siguiente</button>
                  </div>
                </div>
              </div>      
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">    
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div style="float: right;">
                      <div style="float: right;">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Agregar Moneda</button>
                      </div>
                      
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped" id="table_currency">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Tipo de Cambio</th>
                          <th>Admin</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bussine->currency as $value)
                        <tr>
                            <td>{{ $value->code }}</td>
                            <td>{{ $value->name }}</td>
                            <td>$ {{ $value->exchange_rate }}</td>
                            <td>
                              <button type="button" class="btn btn-sm btn-danger" onclick="delete_currency(this, {{ $value->id }})"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <br/>
              <div class="col-md-12 col-sm-12 col-xs-12">
                </br>
                <div class="actionBar">
                  <button type="button" class="btn btn-primary float-rigth" role="tab" onclick="document.getElementById('profile-tab2').click();" data-toggle="tab" aria-expanded="false">Anterior</button>
                  <button type="button" class="btn btn-primary float-rigth" role="tab" id="profile-tab" onclick="document.getElementById('profile-tab4').click();" data-toggle="tab" aria-expanded="false">Siguiente</button>
                </div>
              </div>
            </div>      
          </div>

          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">    
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div style="float: right;">
                      <div style="float: right;">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-tax-modal-sm">Agregar Impuesto</button>
                      </div>
                      
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped" id="table_tax">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Tasa</th>
                          <th>Tipo factor</th>
                          <th>Tipo</th>
                          <th>Admin</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($bussine->tax as $key => $value)
                        <tr>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->tasa }}</td>
                          <td>{{ $value->factor }}</td>
                          <td>{{ $value->type }}</td>
                          <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="delete_tax(this, {{ $value->id }})"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                          @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <br/>
              <div class="col-md-12 col-sm-12 col-xs-12">
                </br>
                <div class="actionBar">
                  <button type="button" class="btn btn-primary float-rigth" role="tab" onclick="document.getElementById('profile-tab3').click();" data-toggle="tab" aria-expanded="false">Anterior</button>
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

<!-- Small modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Agregar Moneda</h4>
      </div>
      <div class="modal-body">
        <p>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="code_currency_modal">Codigo * <small>(ejemplo: MXN, USD, EUR)</small></label>
              <input type="text" id="code_currency_modal" class="form-control" data-parsley-trigger="change" value=""/>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="name_currency_modal">Nombre * <small>(ejemplo: peso mexicano)</small></label>
              <input type="text" id="name_currency_modal" class="form-control" data-parsley-trigger="change" value=""/>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="type_currency_modal">Tipo de cambio * <small>(ejemplo: 1.0, 21.23)</small></label>
              <input type="text" id="type_currency_modal" class="form-control" data-parsley-trigger="change" value=""/>
            </div>
          </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" id="close_currency" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" onclick="add_currency()" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- /modals -->

<!-- Small modal -->
<div class="modal fade bs-tax-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Agregar Impuesto</h4>
      </div>
      <div class="modal-body">
        <p>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="name_tax_modal">Nombre * <small>(ejemplo: iva retenido)</small></label>
              <input type="text" id="name_tax_modal" class="form-control" data-parsley-trigger="change" value=""/>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="tax_tax_modal">Impuestos * <small>(ejemplo: iva o isr)</small></label>
              <select id="tax_tax_modal" class="form-control" data-parsley-trigger="change">
                <option value="iva">IVA</option>
                <option value="isr">ISR</option>
                <option value="ieps">IEPS</option>
              </select>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="type_tax_modal">Tipo * <small>(ejemplo: traslado o retenido)</small></label>
              <select id="type_tax_modal" class="form-control" data-parsley-trigger="change">
                <option value="traslado">Traslado</option>
                <option value="retenido">Retenido</option>
              </select>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="factor_tax_modal">Factor * <small>(ejemplo: traslado o retenido)</small></label>
              <select id="factor_tax_modal" class="form-control" data-parsley-trigger="change">
                <option value="tasa">Tasa</option>
                <option value="cuota">Cuota</option>
                <option value="exento">Exento</option>
              </select>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <label for="tasa_tax_modal">Tasa * <small>(ejemplo: 0.16)</small></label>
              <input type="text" id="tasa_tax_modal" class="form-control" data-parsley-trigger="change" value=""/>
            </div>
          </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" id="close_tax" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" onclick="add_tax()" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- /modals -->
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
    <!-- Country -->
    <script src="{{ asset('/js/helpers/bussine.js') }}"></script>
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
      
      function delete_tax(e, id = null){
        var table = document.getElementById('table_tax');
        var td = e.parentNode;
        var tr = td.parentNode;
        var table = tr.parentNode;
        var rowCount = table.rows.length;
        
        if (rowCount > 1) {
          if (id) {
            $.ajax({
              url: "{{ url('/tax/') }}" + '/' + id,
              type: 'GET',
              success: function(result) {
                table.removeChild(tr);
              }
            }); 
          } else {
            table.removeChild(tr);
          }
        }
      }
      
      function delete_currency(e, id = null){
        var table = document.getElementById('table_currency');
        var td = e.parentNode;
        var tr = td.parentNode;
        var table = tr.parentNode;
        var rowCount = table.rows.length;
        
        if (rowCount > 1) {
          if (id) {
            $.ajax({
              url: "{{ url('/currency/') }}" + '/' + id,
              type: 'GET',
              success: function(result) {
                table.removeChild(tr);
              }
            }); 
          } else {
            table.removeChild(tr);
          }
        }
      }
    </script>
@endsection
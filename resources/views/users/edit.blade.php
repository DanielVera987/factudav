@extends('layouts.app')

@section('content')
<form id="demo-form" method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data" data-parsley-validate>
  @csrf
  @method('put')
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-cubes"></i> Perfil</h2>
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
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos del Usuario</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <!-- start form for validation -->
            <span class="clearfix"></span>
            <div class="row">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="name">Usuario* :</label>
                            <input type="text" id="name" class="form-control @error('name') parsley-error @enderror" value="{{ $user->name }}" name="name" required />
                            @error('name')
                                <span class="invalid-feedback red" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="code">Email * :</label>
                            <input type="email" id="email" class="form-control @error('email') parsley-error @enderror" value="{{ $user->email }}" readonly="readonly" name="email" autocomplete="off" required />
                            @error('email')
                                <span class="invalid-feedback red" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="password">Contraseña :</label>
                            <input type="password" id="password" class="form-control @error('password') parsley-error @enderror" placeholder="contraseña" value="" name="password" />
                            @error('password')
                                <span class="invalid-feedback red" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="password">Confirmar Contraseña :</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmación contraseña" autocomplete="new-password">
                            <small>Dejar en blanco si no desea cambiar la contraseña</small>

                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="actionBar">
                <button type="submit" class="btn btn-primary float-rigth">Editar</button>
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
    <!-- jQuery Tags Input -->
    <script src="{{ asset('/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
@endsection
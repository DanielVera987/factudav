@extends('layouts.app')

@section('styles')
  <!-- Datatables -->
  <link href="{{ asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
  <!-- page content -->
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2><i class="fa fa-users"></i> Listado De Clientes</h2>
              <div style="float: right;">
                <button data-href="/customer/export/cvs" id="exportcvs" onclick="exportCustomer(event.target);" class="btn btn-secondary" type="button">
                  Respaldar
                </button>
                <a href="{{ route('customers.create') }}" class="btn btn-success" type="button">
                  Crear Nuevo
                </a>
              </div>
              <div class="clearfix"></div>
              @if(session()->has('success'))
                <div class="alert alert-success">
                  <strong>{{ session()->get('success') }}</strong>
                </div>
              @endif
            </div>
            <div class="x_content">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre/Empresa</th>
                      <th>Razón Social</th>
                      <th>RFC</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Pais</th>
                      <th>Estado</th>
                      <th>Admin.</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($customers as $key => $customer)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $customer->bussine_name}}</td>
                        <td>{{ $customer->tradename}}</td>
                        <td>{{ $customer->rfc}}</td>
                        <td>{{ $customer->email}}</td>
                        <td>{{ $customer->telephone}}</td>
                        <td>{{ $customer->country->abbreviation}}</td>
                        <td>{{ $customer->state->abbreviation ?? 'NaN'}}</td>
                        <td>
                          <div class="btn-group btn-group-sm">
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                              @csrf 
                              @method('delete')
                              <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target=".mod{{$customer->id}}"><i class="fa fa-trash-o"></i></button>
                              <div class="modal fade mod{{$customer->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title" id="myModalLabel2">¿Esta seguro?</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Borrar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /page content -->
@endsection

@section('script')
  <!-- Datatables -->
  <script src="{{ asset('/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
  <script src="{{ asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
  <script src="{{ asset('/vendors/jszip/dist/jszip.min.js') }}"></script>
  <script src="{{ asset('/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
  <script src="{{ asset('/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
  <script>
    function exportCustomer(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
  </script>
@endsection
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
      <div class="page-title">
        <div class="title_left">
          <h3>Listado De Productos</h3>
        </div>

        <div class="title_right">
          <div style="float: right;">
            <a href="{{ route('products.create') }}" class="btn btn-success" type="button">
              Crear Nuevo
            </a>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        @if(session()->has('success'))
          <div class="alert alert-success">
            <strong>{{ session()->get('success') }}</strong>
          </div>
        @endif
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title"></div>
            <div class="x_content">
              <p class="text-muted font-13 m-b-30"></p>
    
              <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Imgen</th>
                    <th>Code</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Costo</th>
                    <th>Estado</th>
                    <th>Admin.</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{ $product->image}}</td>
                      <td>{{ $product->code}}</td>
                      <td>{{ $product->nombre}}</td>
                      <td>{{ $product->stock}}</td>
                      <td>{{ $product->price}}</td>
                      <td>{{ $product->cost}}</td>
                      <td>{{ $product->is_active}}</td>
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                          <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
@endsection
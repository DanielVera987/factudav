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
              <h2><i class="fa fa-file-text"></i> Listado De Facturas</h2>
              <div class="title_right">
                <div style="float: right;">
                  <a href="{{ route('invoices.create') }}" class="btn btn-success" type="button">
                    Crear Nuevo
                  </a>
                </div>
              </div>
              <div class="clearfix"></div>
              @if(session()->has('success'))
                <div class="alert alert-success">
                  <strong>{{ session()->get('success') }}</strong>
                </div>
              @endif
            </div>
            <div class="x_content">
              <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered" width="100%">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Cliente</th>
                      <th>Fecha</th>
                      <th>Moneda</th>
                      <th>Forma de pago</th>
                      <th>Subtotal</th>
                      <th>UUID</th>
                      <th>Admin.</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($invoices as $invoice)
                      <tr>
                        <td class="text-center">
                          <a href="{{ route('invoices.show', $invoice->id) }}">
                            {{ $invoice->folio }}
                            @if (!App\Helpers\Cfdi33Helper::getTimbreFiscal($invoice->name_file))
                                <br><strong>Pre-CFDI</strong>
                            @endif
                          </a>
                        </td>
                        <td class="text-center">{{ $invoice->customer->bussine_name }}</td>
                        <td class="text-center">{{ $invoice->date ?? '' }}</td>
                        <td class="text-center">{{ $invoice->currency->code ?? '' }}</td>
                        <td class="text-center">
                          @php
                              $wtp = App\Models\WayToPay::find($invoice->way_to_pay_id);
                              $name = $wtp->name ?? '';
                              echo $name;
                          @endphp
                        </td>
                        <td class="text-center">$ {{ App\Models\Invoice::getAmountInvoice($invoice->id) }}</td>
                        <td class="text-center">
                          @if(App\Helpers\Cfdi33Helper::getTimbreFiscal($invoice->name_file))
                            {{ App\Helpers\Cfdi33Helper::getTimbreFiscal($invoice->name_file) }}
                          @endif
                        </td>
                        <td class="text-center" width="5%">
                          <ul class="nav navbar-nav navbar-right">
                              <li class="">
                                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                      <span class=" fa fa-navicon"></span>
                                  </a>
                                  <ul style="width: 30px;" class="dropdown-menu dropdown-usermenu pull-right">
                                      <li><a href="{{ route('invoices.show', $invoice->id) }}">Ver</a></li>
                                      <li><a href="{{ route('invoices.downloadPDF', $invoice->id) }}">Descargar PDF</a></li>
                                      <li><a href="{{ route('invoice.createEmail', $invoice->id) }}">Enviar por correo</a></li>
                                  </ul>
                              </li>
                          </ul>
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
@endsection
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
              @if(session()->has('warning'))
                <div class="alert alert-success">
                  <strong>{{ session()->get('warning') }}</strong>
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
                      <th>Forma de pago</th>
                      <th>Tipo Comprobante</th>
                      <th>UUID</th>
                      <th>Metodo Pago</th>
                      <th>Estado</th>
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
                            @if ($invoice->cancel_status == 'success')
                              <br><p style="color: red;">Cancelado ante el SAT</p>
                              {{ $invoice->cancel_date }}
                            @elseif($invoice->cancel_status == 'cancel')
                              <br><p style="color: red;">Cancelado</p>
                            @endif 
                          </a>
                        </td>
                        <td class="text-center">{{ $invoice->customer->bussine_name }}</td>
                        <td class="text-center">{{ $invoice->date ?? '' }}</td>
                        <td class="text-center">
                          @php
                            $wtp = App\Models\WayToPay::find($invoice->way_to_pay_id);
                            $name = $wtp->name ?? '';
                            echo $name;
                          @endphp
                        </td>
                        <td class="text-center" width="5%">@if($invoice->type_voucher == 'I') I - Ingreso @elseif($invoice->type_voucher == 'E') E - Egreso @elseif($invoice->type_voucher == 'P') P - Pago @endif</td>
                        <td class="text-center">
                          @if(App\Helpers\Cfdi33Helper::getTimbreFiscal($invoice->name_file))
                            {{ App\Helpers\Cfdi33Helper::getTimbreFiscal($invoice->name_file) }}
                          @endif
                        </td>
                        <td class="text-center">
                          @php
                            $pm = App\Models\PaymentMethod::find($invoice->payment_method_id);
                            echo $pm->code;
                          @endphp
                        </td>
                        <td class="text-center" width="5%">
                          Pagado
                        </td>
                        <td class="text-center" width="5%">
                          <ul class="nav navbar-nav navbar-right">
                              <li class="">
                                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class=" fa fa-navicon"></span>
                                  </a>
                                  <ul style="width: 30px;" class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{ route('invoices.show', $invoice->id) }}"><i class="fa fa-eye"></i>  Ver</a></li>
                                    <li><a href="{{ route('invoices.downloadPDF', $invoice->id) }}"><i class="fa fa-file-pdf-o"></i>  Descargar PDF</a></li>
                                    <li><a href="{{ route('invoices.createEmail', $invoice->id) }}"><i class="fa fa-send"></i>  Enviar por correo</a></li>
                                    @if ($invoice->payment_method_id === 2 && $invoice->type_voucher != 'P')
                                      <li><a href="{{ route('invoices.create.complement', $invoice->id) }}"><i class="fa fa-money"></i>  Agregar Pago</a></li>  
                                    @endif
                                    <li><a data-toggle="modal" data-target=".mod{{$invoice->id}}"><i class="fa fa-remove"></i>  Cancelar</a></li>
                                  </ul>
                              </li>
                          </ul>
                        </td>
                        <div class="modal fade mod{{$invoice->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">¿Esta seguro?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <a href="{{ route('invoices.cancel', [$invoice->id, 'cancelar']) }}" class="btn btn-sm btn-danger"> Cancelar</a>
                              </div>
                            </div>  
                          </div>
                        </div>
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
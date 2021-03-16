@extends('layouts.app')

@section('styles')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
  
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
@endsection

@section('content')
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-users"></i> Total Clientes</span>
      <div class="count">{{ $totalsCustomer }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-file-text"></i> Total  Facturas</span>
      <div class="count">{{ $totalsInvoice }}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-cubes"></i> Total Productos</span>
      <div class="count">{{ $totalsProduct }}</div>
    </div>
  </div>
  <!-- /top tiles -->

  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Alerta Producto</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content"> 
          @if (is_array($productsMinStock))
            @foreach($productsMinStock as $produc)
                [{{ $produc['code'] }}] - {{ $produc['name'] }} - {{ $produc['stock'] }}<br>
            @endforeach
          @else
            No hay productos con alerta
          @endif
        </div>
      </div>
    </div>

    <div class="col-md-8 col-sm-8 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Perfil Completado</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">
            <ul class="quick-list">
              <li><i class="fa @if($completeBussine['step1']) fa-check @else fa-close @endif"></i><a href="#">Agregar archivos .cer y .key</a></li>
              <li><i class="fa @if($completeBussine['step2']) fa-check @else fa-close @endif"></i><a href="#">Agregar nombre PAC y Contraseña</a> </li>
              <li><i class="fa @if($completeBussine['step3']) fa-check @else fa-close @endif"></i><a href="#">Crear Impuestos</a></li>
              <li><i class="fa @if($completeBussine['step4']) fa-check @else fa-close @endif"></i><a href="#">Crear Moneda</a></li>
              <li><i class="fa @if($completeBussine['step5']) fa-check @else fa-close @endif"></i><a href="#">Crear un cliente</a></li>
              <li><i class="fa @if($completeBussine['step6']) fa-check @else fa-close @endif"></i><a href="#">Crear un producto</a></li>
            </ul>

            <div class="sidebar-widget">
                <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                <div class="goal-wrapper">
                  <span id="gauge-text" class="gauge-value pull-left">0</span>
                  <span class="gauge-value pull-left">%</span>
                  <span id="goal-text" class="goal-value pull-right">100%</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Atajos del sistema</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content"> 
          <strong>Ctrl + Alt + F</strong> Crear Nueva Factura<br />
          <strong>Ctrl + Alt + C</strong> Crear Nuevo Cliente<br />
          <strong>Ctrl + Alt + P</strong> Crear Nuevo Producto<br />
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script src="{{ asset('/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script>
          gauge();
          function gauge()
          {
            if( typeof (Gauge) === 'undefined'){ return; }	

            var chart_gauge_settings = {
              lines: 12,
              angle: 0,
              lineWidth: 0.4,
              pointer: {
                length: 0.75,
                strokeWidth: 0.042,
                color: '#1D212A'
              },
              limitMax: 'false',
              colorStart: '#1ABC9C',
              colorStop: '#1ABC9C',
              strokeColor: '#F0F3F3',
              generateGradient: true
            };
            
            if ($('#chart_gauge_01').length){ 
              var chart_gauge_01_elem = document.getElementById('chart_gauge_01');
              var chart_gauge_01 = new Gauge(chart_gauge_01_elem).setOptions(chart_gauge_settings);
            }	

            if ($('#gauge-text').length){ 
              chart_gauge_01.maxValue = 100;
              chart_gauge_01.animationSpeed = 32;
              chart_gauge_01.set({{ $completeBussine['total'] }});
              chart_gauge_01.setTextField(document.getElementById("gauge-text"));
            }
          }
    </script>
    <script>
      @if($alertProduct)
         new PNotify({
          title: 'Oh No!',
          text: 'Hay productos con su minimo de stock!!',
          type: 'error',
          styling: 'bootstrap3'
        });
      @endif
    </script>
@endsection
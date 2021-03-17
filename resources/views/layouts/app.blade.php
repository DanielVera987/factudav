@extends('layouts.head')

@section('styles')
  @yield('styles')
@endsection

@section('app') 
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- Page sider -->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                @if(Auth::user() && Auth::user()->bussine_id && Auth::user()->bussine->tradename != '')
                  <span>{{ Auth::user()->bussine->tradename }}</span>
                @else
                  <span>FactuDav</span>
                @endif
              </a>
            </div>
        
            <div class="clearfix"></div>
        
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                @if(Auth::user() && Auth::user()->bussine_id && Auth::user()->bussine->logo != '')
                  <img class="img-circle profile_img" src="{{ asset('/images/logos/'. Auth::user()->bussine->logo) }}" width="50" height="52">
                @else

                @endif
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
        
            <br />
        
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                    <a href="{{ route('home') }}">
                      <i class="fa fa-home"></i> Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('invoices.index') }}">
                      <i class="fa fa-file-text"></i> Facturas
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('customers.index') }}">
                      <i class="fa fa-users"></i> Clientes
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('products.index') }}">
                      <i class="fa fa-cubes"></i> Productos
                    </a>
                  </li>

                  <li>
                    <a href="{{ route('settings.create') }}">
                      <i class="fa fa-cog"></i> Configuración
                    </a>
                  </li>
                  
                </ul>
              </div>
        
            </div>
            <!-- /sidebar menu -->
        
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="{{ route('settings.create') }}" data-toggle="tooltip" data-placement="top" title="Configuración">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" onclick="toggleFullScreen()">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Cerrar" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
        
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- /Page sider -->

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('user.edit', Auth::user()->id) }}"> Perfil</a></li>
                    <li>
                      <a href="{{ route('settings.create') }}">
                        <span> Configuración</span>
                      </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> Cerrar
                        </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            @if(Auth::user() && Auth::user()->bussine_id && Auth::user()->bussine->bussine_name != '')
              <span>{{ Auth::user()->bussine->bussine_name }}</span>
            @else
              <span>FactuDav</span>
            @endif
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('/vendors/parsleyjs/dist/parsley.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/js/custom.min.js') }}"></script>
    
    @yield('script')

    <!-- Command Direct -->
    <script>
      $('body').on("keydown", function(e) { 

        if (e.ctrlKey && e.altKey && e.which === 70) {
            window.location.href =  "{{ route('invoices.create') }}";
            e.preventDefault();
        }

        if (e.ctrlKey && e.altKey && e.which === 67) {
            window.location.href =  "{{ route('customers.create') }}";
            e.preventDefault();
        }

        if (e.ctrlKey && e.altKey && e.which === 80) {
          window.location.href =  "{{ route('products.create') }}";
          e.preventDefault();
        }
      });

      function toggleFullScreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
          if (document.exitFullscreen) {
            document.exitFullscreen();
          }
        }
      }
    </script>
	
  </body>
</html>
@endsection


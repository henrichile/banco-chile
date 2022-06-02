<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>

                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>Mi Cuenta</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Salir</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        @php
        $rol = auth()->user()->roles()->first()->name;
        $rol_desc=auth()->user()->roles()->first()->description;
        @endphp
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title"><strong>Menú {{ $rol_desc }}</strong></li>
                @if( $rol=="admin")
                <li>
                    <a href="{{ route('administradores.listado') }}"> Administradores</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo")
                <li>
                    <a href="{{ route('registrados.listado') }}"> Artistas registrados</a>
                </li>
                @endif
                <li class="menu-title"><strong>Pre-seleccionados</strong></li>
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszn" || $rol=="juradosel")
                <li>
                    <a href="{{ route('preSeleccionadosNorte') }}">Zona Norte</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszc" || $rol=="juradosel")
                <li>
                    <a href="{{ route('preSeleccionadosCentro') }}">Zona Centro</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszs" || $rol=="juradosel")
                <li>
                    <a href="{{ route('preSeleccionadosSur') }}">Zona Sur</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradosel")
                <li>
                    <a href="{{ route('listadoseleccionados') }}">Todos</a>
                </li>
                @endif
                <li class="menu-title"><strong>Ranking pre-seleccionados</strong></li>
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszn" || $rol=="juradosel")
                <li>
                    <a href="{{ route('seleccionadosNorte',["tipo"=>0]) }}">Zona Norte</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszc" || $rol=="juradosel")
                <li>
                    <a href="{{ route('seleccionadosCentro',["tipo"=>0]) }}">Zona Centro</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradoszs" || $rol=="juradosel")
                <li>
                    <a href="{{ route('seleccionadosSur',["tipo"=>0]) }}">Zona Sur</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradosel")
                <li>
                    <a href="{{ route('rankingseleccionados',["tipo"=>0]) }}">Todos</a>
                </li>
                @endif



                
                <li class="menu-title"><strong>Pre-Clasificados</strong></li>
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozn" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('preClasificadosNorte') }}">Zona Norte</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozc" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('preClasificadosCentro') }}">Zona Centro</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozs" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('preClasificadosSur') }}">Zona Sur</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('preclasificados.listado') }}">Todos</a>
                </li>
                @endif
                <li class="menu-title"><strong>Ranking</strong></li>
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozn" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('clasificadosNorte',["tipo"=>0]) }}">Zona Norte</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozc" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('clasificadosCentro',["tipo"=>0]) }}">Zona Centro</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradozs" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('clasificadosSur',["tipo"=>0]) }}">Zona Sur</a>
                </li>
                @endif
                @if( $rol=="admin" || $rol=="kraneo" || $rol=="juradotodos")
                <li>
                    <a href="{{ route('rankingclasificados',["tipo"=>0]) }}">Todos</a>
                </li>
                @endif
                <li class="menu-title"><strong>Rechazados</strong></li>
                @if( $rol=="admin" || $rol=="kraneo")
                <li>
                    <a href="{{ route('noclasificados.listado') }}"> Artistas Rechazados</a>
                </li>
                @endif
            </ul>
           
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

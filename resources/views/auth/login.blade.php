<!DOCTYPE html>
<html lang="es">
    <head>
        @include('layouts.shared.title-meta', ['title' => "Log In"])
        @include('layouts.shared.head-css')
    </head>
    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">      
                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="{{ route('login') }}" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('img/logo-banco.png')}}" alt="" width="60%">
                                    </span>
                                </a>
                                <a href="{{route('login')}}" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('img/logo-banco.png')}}" alt="" width="60%">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))

                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>
                        <!-- title-->
                        <h4 class="mt-0">Ingreso de administradores y jurados</h4>
                        <p class="text-muted mb-4">Ingrese con su correo y contraseña. </p>
                    
                       

                        <form method="POST" action="{{ route('login') }}" novalidate>
                     @csrf
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-group input-group-merge">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="input-group-append" data-password="false">
                                        <div class="input-group-text">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                

                                </div>
                            </div>
                           
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" style="background-color:#116da8 !important" type="submit">Ingreso </button>
                            </div>
                            <!-- social-->
                        </form>
                    
                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

        </div>
        <!-- end auth-fluid-->
        
        @include('layouts.shared.footer-script')
        
    </body>
</html>
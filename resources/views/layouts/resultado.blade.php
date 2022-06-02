@extends('layouts.frontRegistro')

@section('content')  
<section class="band main" id="registro">
               <div class="background-img">
                  <img src="{{ asset('img/24.jpg')}}" alt="">
               </div>
            <!--Container-->
            <div class="container bg-white-trans">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Registro</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container bg-white-trans">
               <!--Row-->
               <div class="row">
                
                <div class="col-md-12">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
            
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                    </div> <!-- end .flash-message -->
                    <div class="form-group mb-3 col-md-6">
                        @if($resultado)
                        <h2>Tu registro se realizo de manera exitosa</h2>
                        @else
                        <h2>Tu registro no pudo ser realizado, intenta más tade</h2>
                        @endif
                    </div>
                    
                </div>

               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section> 
         @endsection 
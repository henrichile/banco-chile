@extends('layouts.front')

@section('content')  
<section class="band main" id="registro">
               <div class="background-img">
                  <img src="{{ asset('img/24.jpg')}}" alt="">
               </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <h1 class="uppercase">Registrate como</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-md-2 col-lg-2">
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <a href="{{ route('solista.nuevo') }}">
                     <div class="block-member">
                        <img src="{{ asset('img/solista.jpg') }}" alt="">
                        <div class="member-info">
                           <h6 class="uppercase mb-0 ">Solista</h6>
                        </div>
                     </div>
                  </a>
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <a href="{{ route('banda.nuevo') }}">
                     <div class="block-member">
                        <img src="{{ asset('img/banda.jpg')}}" alt="">
                        <div class="member-info">
                           <h6 class="uppercase mb-0 ">Banda</h6>
                        </div>
                     </div>
                  </a>
                  </div>
                  <div class="col-md-2 col-lg-2">
                  </div>

               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section> 
         @endsection 
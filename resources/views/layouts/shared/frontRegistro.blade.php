<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Banco de Chile</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Css -->
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,300,400,400i,600,700,800" rel="stylesheet">
      <link rel="shortcut icon" href="https://portales.bancochile.cl/uploads/000/000/015/3328d923-73b6-4acd-a87f-65526e65ba78/C32x32/favicon.ico">
   
      <style>
       .header.default {
            position: fixed !important; 
       }  
       .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: rgb(1,28,77) !important;
        background-color: rgb(255,255,255) !important;
        background-clip: padding-box;
        border: 2px solid rgb(1,28,77) !important;
        border-radius: 0.25rem;
       }
       </style>
    </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#13181d" stroke-width="2"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <section class="hero">
            <!--Header-->
            <header class="header default">
               <div class=" left-part">
                  <a class="logo scroll" href="#wrapper">
                     <h2 class="mb-0 mt-2 uppercase">
                        <img src="{{ asset('img/logo-bch.png') }}" width="200" >
                     </h2>
                  </a>
               </div>
               <div class="right-part">
                  <nav class="main-nav">
                     <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                           <div class="lines"></div>
                        </a>
                     </div>
                     <ul class="main-menu list-inline">
                        <li><a class="scroll list-inline-item" href="#wrapper">Home</a></li>
                        <li><a class="scroll list-inline-item" href="#about">about</a></li>
                        <li><a class="scroll list-inline-item" href="#discography">discography</a></li>
                        <li><a class="scroll list-inline-item" href="#band">Band</a></li>
                        <li class="dropdown"><a class="scroll list-inline-item" href="#tour">Tours</a>


                        </li>


                        <li><a class="scroll list-inline-item" href="#gallery">Gallery</a></li>
      <li><a class="scroll list-inline-item " href="#news">News</a>

                          

                        </li>
                        <li><a class="scroll list-inline-item" href="#contact">Contact</a></li>
                        
                        <li class="block-helper">
                           <a href="#album" class="scroll"><span ><i class="icon-cd-2"></i></span></a>
                        </li>
                        <li class="block-helper">
                           <span class="icon search-ico"><i class="icon-search"></i></span>
                        </li>
                     </ul>
                  </nav>
               </div>
            </header>
            <!--End header-->
         </section>
         @yield('content')
         <footer class="pt-5 pb-5 footer">
            <!--Container-->
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-6">
                     <small class="small"><span>&copy; 2021 all rights reserved - a product of</span> Estalisto.cl.</small>
                  </div>
                  <div class="col-md-6 text-md-right">
                     <ul class="list-inline small">
                        <li class="list-inline-item">
                           <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">Legal</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--End container-->
         </footer>
         <a class="block-top scroll" href="#wrapper">
         <i class="icon-angle-up"></i></a>
      </div>
      <!-- End wrapper-->
      <!--Javascript--> 
      <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
      <script src="{{ asset('js/smooth-scroll.js') }}" ></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" ></script>
      <script src="{{ asset('js/twitterFetcher_min.js') }}" ></script>
      <script src="{{ asset('js/jquery.countdown.min.js') }}" ></script>
      <script src="{{ asset('js/placeholders.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script>
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
var Fn = {
  // Valida el rut con su cadena completa "XXXXXXXX-X"
  validaRut : function (rutCompleto) {
    rutCompleto = rutCompleto.replace("‐","-");
    if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
      return false;
    var tmp   = rutCompleto.split('-');
    var digv  = tmp[1]; 
    var rut   = tmp[0];
    if ( digv == 'K' ) digv = 'k' ;
    
    return (Fn.dv(rut) == digv );
  },
  dv : function(T){
    var M=0,S=1;
    for(;T;T=Math.floor(T/10))
      S=(S+T%10*(9-M++%6))%11;
    return S?S-1:'k';
  }
}

function validarRut(){
    console.log($("#rut").val() );
    if (Fn.validaRut( $("#rut").val() )){
        console.log("entro rut");
            if( $('#terminos').prop('checked') ) {
                console.log("check");
                $("#btnsubmit").removeAttr("disabled");
            }else{
                $("#btnsubmit").attr('disabled','disabled');
                console.log("no check");
            }
        } else {
            console.log("rut malo");
            $("#btnsubmit").attr('disabled','disabled');
            $("#error_rut").show();
            $("#rut").focus();
    }
}

function validarTerminos(){
    if( $('#terminos').prop('checked') ) {
        console.log("check");
        if (Fn.validaRut( $("#rut").val() )){
            $("#btnsubmit").removeAttr("disabled");
            console.log("llego");
        } else {
            $("#msgerror").html("El Rut no es válido :'( ");
            $("#rut").focus();
    }
                
    }else{
        $("#btnsubmit").attr('disabled','disabled');
        console.log("no check");
    }
    
}



          $.fn.datepicker.dates['es'] = {
             dateFormat: "dd-mm-yy",
             firstDay: 1,
             days: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
             daysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom"],
             daysMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
             months: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
             monthsShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ]
            };
          $('#fnac').datepicker({
            language:"es",
            dateFormat: "dd/mm/yy"
            }
          )
        .on('changeDate', function(ev){
            console.log(ev);
            console.log($(this).attr("data-indice"));
            fecha = $(this).val();
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $("#edad").val(edad);
            if(edad<18){
               $("#menor").show();
            }else{
                $("#menor").hide();
            }
            console.log(edad);
        });


      function traeintegrantes(){
        var integra= $('#integrantes').val();
        var formData = new FormData();
        formData.append('integrantes', integra );
        $.ajax({
              type: "POST",
              url:  "{{ route('integrantes.agregar')}}",
              data: formData,
              contentType: false,
              processData: false, 
              success: function (data) {
                  console.log(data.path);
                  if (data.success){
                     $("#lista_integrantes").html(data.path);
                  }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                  console.log(jqXHR);
                  alert('Ocurrio un error al traer el listado de integrantes');
              }
        });
      }

      </script>

      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>


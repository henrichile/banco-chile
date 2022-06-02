<!-- bundle -->
<!-- Vendor js -->
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
@yield('script')
    <!-- Plugins js-->
    <script src="{{ asset('assets/libs/selectize/selectize.min.js')}}"></script>
    <script src="{{ asset('assets/libs/mohithg-switchery/mohithg-switchery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/multiselect/multiselect.min.js')}}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ asset('assets/libs/devbridge-autocomplete/devbridge-autocomplete.min.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery-mockjax/jquery-mockjax.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

    <script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
        <script src="{{asset('assets/libs/dropify/dropify.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{asset('assets/js/pages/form-fileuploads.init.js')}}"></script>

    <!-- Page js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script>

$(function () {
        $("#listados").DataTable(
			{
                "order": [[ 10, "desc" ]],
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],
                "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró nada, lo siento",
                "info": "Mostrando _PAGE_ de _PAGES_ paginas",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
            }});

            $("#listado2").DataTable(
			{
                "order": [[ 0, "desc" ]],
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],
                "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró nada, lo siento",
                "info": "Mostrando _PAGE_ de _PAGES_ paginas",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
            }});

            $("#listadosel").DataTable(
			{
                "order": [[ 4, "desc" ]],
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],
                "language": {
                "paginate": {
                    "previous": "<i class='mdi mdi-chevron-left'>",
                    "next": "<i class='mdi mdi-chevron-right'>"
                },
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró nada, lo siento",
                "info": "Mostrando _PAGE_ de _PAGES_ paginas",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
            }});

        
        
            });

function clasificar(idArtista){
    Swal.fire({
        title: 'Esta seguro?',
        text: "El usuario sera pre-seleccionado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI, Pre-Seleccionar!'
        }).then((result) => {
        if (result.isConfirmed) {
           $("#idArtista").val(idArtista);
           $("#formclasificar").submit();
        }
        });
}

function preclasificar(idArtista,zona){
    Swal.fire({
        title: 'Esta seguro?',
        text: "El usuario sera pre-clasificado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI, Pre-clasificar!'
        }).then((result) => {
        if (result.isConfirmed) {
           $("#idArtista").val(idArtista);
           $("#zona").val(zona);
           $("#formclasificar").submit();
        }
        });
}


function descalificar(idArtista){
    Swal.fire({
        title: 'Esta seguro?',
        text: "De descalificar a este artista!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI, Descalificar!'
        }).then((result) => {
        if (result.isConfirmed) {
           $("#idArtista2").val(idArtista);
           $("#formdescalificar").submit();
        }
        });
}





        
        </script>

@yield('script-bottom')

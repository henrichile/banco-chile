<!-- bundle -->
<!-- Vendor js -->
<script src="<?php echo e(asset('assets/js/vendor.min.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
    <!-- Plugins js-->
    <script src="<?php echo e(asset('assets/libs/selectize/selectize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/mohithg-switchery/mohithg-switchery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/multiselect/multiselect.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap-select/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/devbridge-autocomplete/devbridge-autocomplete.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-mockjax/jquery-mockjax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/dropify/dropify.min.js')); ?>"></script>

        <!-- Init js-->
        <script src="<?php echo e(asset('assets/js/pages/form-fileuploads.init.js')); ?>"></script>

    <!-- Page js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
<!-- App js -->
<script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
<script>
         $(function () {
        $("#listado").DataTable(
			{
      	  "order": [[ 0, "desc" ]],
          dom: 'Bfrtip',
          buttons: [
             'csv', 'excel'
          ]
   		 }  );
        
      });
        </script>

<?php echo $__env->yieldContent('script-bottom'); ?>
<?php /**PATH /home/desafio/public_html/trivia/resources/views/layouts/shared/footer-script.blade.php ENDPATH**/ ?>
</body>

<footer>

  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo BASE_URL('assets/bootstrap-select'); ?>/dist/js/bootstrap-select.js"></script>


  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

<?php if ($this->uri->segment(2) == 'Dashboard'): ?>

  <!-- Morris Charts JavaScript -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/raphael/raphael.min.js"></script>
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/morrisjs/morris.min.js"></script>
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/data/morris-data.js"></script>

<?php endif; ?>


  <!-- Custom Theme JavaScript -->
  <script src="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/dist/js/sb-admin-2.js"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->

  <!-- AngularJS -->
  <script src="<?php echo BASE_URL()?>/AngularService/angular-1.7.2/angular.min.js"></script>
  <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>

  <script src="<?php echo BASE_URL()?>/AngularService/App.js"></script>
  <!-- Service -->
  <!-- <script src="<?php echo BASE_URL()?>/AngularService/Service/myService.js"></script> -->
  <!-- Controller -->
  <script src="<?php echo BASE_URL()?>/AngularService/QuotationController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/CustomerController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/CustomerFormController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/SupplierController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/SupplierFormController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductFormController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductCategoryController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductBrandController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/EmployeeController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/EmployeeFormController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductImportController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductImportFormController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductExportController.js"></script>
  <script src="<?php echo BASE_URL()?>/AngularService/ProductExportFormController.js"></script>


  <!-- Angular Datatable -->
  <script src="<?php echo BASE_URL('/AngularService/angular-datatables/dist/angular-datatables.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/AngularService/angular-datatables/dist/plugins/tabletools/angular-datatables.tabletools.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/AngularService/angular-datatables/dist/plugins/buttons/angular-datatables.buttons.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/AngularService/angular-datatables/dist/plugins/select/angular-datatables.select.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/AngularService/angular-datatables/dist/plugins/columnfilter/angular-datatables.columnfilter.js')?>"></script>

  <script>
  $(document).ready(function() {
      $('.dataTable').DataTable({
          responsive: true
      });
  });

  $('.selectpicker').selectpicker({
    liveSearch: true,
    // maxOptions: 10
  });

  </script>

</footer>

</html>

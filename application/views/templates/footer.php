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
  <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>

  <!-- AngularJS -->
  <script src="<?php echo BASE_URL()?>/Service/angular-1.7.2/angular.min.js"></script>

  <script src="<?php echo BASE_URL()?>/Service/AnApp.js"></script>
  <!-- Controller -->
  <script src="<?php echo BASE_URL()?>/Service/QuotationController.js"></script>

  <!-- Angular Datatable -->
  <script src="<?php echo BASE_URL('/Service/angular-datatables/dist/angular-datatables.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/Service/angular-datatables/dist/plugins/tabletools/angular-datatables.tabletools.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/Service/angular-datatables/dist/plugins/buttons/angular-datatables.buttons.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/Service/angular-datatables/dist/plugins/select/angular-datatables.select.min.js')?>"></script>
  <script src="<?php echo BASE_URL('/Service/angular-datatables/dist/plugins/columnfilter/angular-datatables.columnfilter.js')?>"></script>

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

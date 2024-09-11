  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="#">Solutions</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.3
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('frontend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ url('frontend/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ url('frontend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ url('frontend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('frontend/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
 <!-- date-range-picker -->
 <script src="{{ url('frontend/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap color picker -->
  <script src="{{ url('frontend/plugins//bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('frontend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 <!-- Bootstrap Switch -->
 <script src="{{ url('frontend/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('frontend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('frontend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('frontend/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ url('frontend/dist/js/demo.js') }}"></script>
<script src="{{ url('frontend/js/custom.js') }}"></script>

<script src="{{ url('frontend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('frontend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('frontend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('frontend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('frontend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ url('frontend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('frontend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ url('frontend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('frontend/plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ url('frontend/dist/js/pages/dashboard2.js') }}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>
</html>

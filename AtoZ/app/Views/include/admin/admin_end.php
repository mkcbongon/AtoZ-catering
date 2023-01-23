<!-- jQuery -->
<script src="<?=base_url('admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('admin/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?=base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?=base_url('admin/plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?=base_url('admin/plugins/sparklines/sparkline.js');?>"></script>
<!-- JQVMap -->
<script src="<?=base_url('admin/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('admin/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?=base_url('admin/plugins/moment/moment.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?=base_url('admin/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('admin/js/adminlte.js');?>"></script>

<script src="<?=base_url('admin/js/pages/dashboard.js');?>"></script>




<!-- DataTables  & Plugins -->
<script src="<?=base_url('admin/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/jszip/jszip.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/pdfmake/pdfmake.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/pdfmake/vfs_fonts.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?=base_url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>

<!-- SweetAlert2 -->
<script src="<?=base_url('admin/plugins/sweetalert2/sweetalert2.min.js');?>"></script>
<!-- Toastr -->
<script src="<?=base_url('admin/plugins/toastr/toastr.min.js');?>"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });

  $(document).ready(function(){
 
 // get Edit Product
 $('.btn-edit').on('click',function(){
     // get data from button edit
     const package_id = $(this).data('package_id');
     const package_name = $(this).data('package_name');
     const package_details = $(this).data('package_details');
     const package_amount = $(this).data('package_amount');
     const package_image = $(this).data('package_image');
     const package_availability = $(this).data('package_availability');
     // Set data to Form Edit
     $('.package_id').val(package_id);
     $('.package_name').val(package_name);
     $('.package_details').val(package_details);
     $('.package_amount').val(package_amount);
     $('.package_image').val(package_image);
     $('.package_availability').val(package_availability).trigger('change');
     // Call Modal Edit
     $('#editModal').modal('show');
 });

 
  
});

  

</script>


                    
</body>
</html>
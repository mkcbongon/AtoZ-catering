<?=$this->include('include/admin/admin_header');?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?=$this->include('include/admin/admin_nav');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?=$this->include('include/admin/admin_sidebar');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pending Reservation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Email</th>
                    <th>Contact#</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($reserv as $reserved): ?>
                    <tr>
                      <td><?=$reserved['reservation_id'];?></td>
                      <td><?=$reserved['lastname'];?></td>
                      <td><?=$reserved['firstname'];?></td>
                      <td><?=$reserved['date_start'];?></td>
                      <td><?=$reserved['date_end'];?></td>
                      <td><?=$reserved['email'];?></td>
                      <td><?=$reserved['contact'];?></td>
                      <td><?=$reserved['reservation_status'];?></td>
                      <td>
                        
                        <a href="#" class="btn btn-info btn-sm btn-edit" 
                        data-id="<?= $reserved['reservation_id'];?>" data-name="<?= $reserved['lastname'];?>"
                        data-id="<?= $reserved['reservation_id'];?>" data-name="<?= $reserved['lastname'];?>"
                        
                        >Edit</a>
                      
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Email</th>
                    <th>Contact#</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Modal Edit Product-->
    <form action="/product/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control lastname" id="name" name="lastname" placeholder="LastName">
                </div>
                 
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control product_price" name="product_price" placeholder="Product Price">
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="product_id" class="product_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?=$this->include('include/admin/admin_end');?>




<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category_id');
            // Set data to Form Edit
            $('.product_id').val(id);
            $('.product_name').val(name);
            $('.product_price').val(price);
            $('.product_category').val(category).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
         
    });
</script>

</body>
</html>

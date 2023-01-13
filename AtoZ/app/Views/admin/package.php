<!-- <----- Admin Header ----->
<?=$this->include('include/admin/admin_header');?>
<!-- <----- End Admin Header ----->

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
            <h1>Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
              <div class="col">
                 <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
              </div>
          <div class="col-12">
             
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Package ID</th>
                            <th>Package Name</th>
                            <th>Package Details</th>
                            <th>Amount</th>
                            <th>Image</th>
                            <th>Availability</th>
                        </tr>
                    </thead>

                  <tbody>
                        <tr>
                            <td>01</td>
                            <td>Package 1</td>
                            <td>Fried Chicken, Siomai</td>
                            <td>2,500</td>
                            <td>image 1</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Combo</td>
                            <td>1kl Pancit Malabon</td>
                            <td>3,500</td>
                            <td>Malabon.jpg</td>
                            <td>Available</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Package ID</th>
                            <th>Package Name</th>
                            <th>Package Details</th>
                            <th>Amount</th>
                            <th>Image</th>
                            <th>Availability</th>
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

         <!-- Modal Add Product-->
            <form action="<?=base_url('new_package');?>" method="post" enctype="multipart/form-data">
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="package_name" placeholder="Product Name">
                        </div>
                        
                        <div class="form-group">
                            <label>Product Details</label>
                            <input type="text" class="form-control" name="package_details" placeholder="Product Price">
                        </div>

                        <div class="form-group">
                            <label>Product Amount</label>
                            <input type="text" class="form-control" name="package_amount" placeholder="Product Price">
                        </div>

                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" id="package_image" name="package_image" class="form-control" accept="image/png, image/jpeg">
                        </div>
        
                        <div class="form-group">
                            <label>Package Availability</label>
                            <select name="package_availability" class="form-control">
                                <option value="">-Select-</option>
                                <option value="">Available</option>
                                <option value="">Not Available</option>
                                
                            </select>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
    <!-- End Modal Add Product-->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('include/admin/admin_footer');?>
</div>
<!-- ./wrapper -->

<?=$this->include('include/admin/admin_end');?>
</body>
</html>

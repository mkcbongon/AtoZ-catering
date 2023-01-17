<!-- <----- Admin Header ----->
<title>A to Z | Package</title>
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
         <?php if(!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
           <?php endif ?>

                    <?php if(!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success alert-dismissible"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
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
                            <th>Action</th>
                        </tr>
                    </thead>

                  <tbody>
                      <?php foreach($package as $pack): ?>
                        <tr>
                            <td><?=$pack['package_id']?></td>
                            <td><?=$pack['package_name']?></td>
                            <td><?=$pack['package_details']?></td>
                            <td><?=$pack['package_amount']?></td>
                            <td><img src="uploads/<?= $pack['package_image']?>" height="80" width="80" alt=""></td>
                            <td><?=$pack['package_availability']?></td>
                            <td>
                            <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Package ID</th>
                            <th>Package Name</th>
                            <th>Package Details</th>
                            <th>Amount</th>
                            <th>Image</th>
                            <th>Availability</th>
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

         <!-- Modal Add Product-->
            <form action="<?=base_url('new_package');?>" method="post" enctype="multipart/form-data">
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header " style="background-color: #FEA116">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add New Package</h5>
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
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                                
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

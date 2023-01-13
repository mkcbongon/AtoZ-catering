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
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-danger">
                <h3 class="card-title">Package List</h3>
                <a href="" class="btn btn-primary float-right"><i class="nav-icon fa-solid fa-plus"></i></a>
              </div>
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

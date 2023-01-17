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
            <h1>Booking List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bookings</li>
            </ol>
          </div>
         
        </div>
        
      </div>
      <!-- /.container-fluid -->
      
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
                    <th>Reservation ID</th>
                    <th>Event ID</th>
                    <th>User ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>01/17/2023</td>
                    <td>Active</td>
                    <td>Pending</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Reservation ID</th>
                    <th>Event ID</th>
                    <th>User ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('include/admin/admin_footer');?>
</div>
<!-- ./wrapper -->

<?=$this->include('include/admin/admin_end');?>
</body>
</html>

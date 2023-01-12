<?=$this->include('include/admin/admin_header');?>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    <?=$this->include('include/admin/admin_nav');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?=$this->include('include/admin/admin_sidebar');?>
  <!-- Sidebar -->
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150,000.00</h3>

                <p>Monthly Earnings</p>
              </div>
              <div class="icon">
                  <i class="fa-solid fa-peso-sign"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>20,000.00</h3>

                <p>Annualy Earnings</p>
              </div>
              <div class="icon">
                 <i class="fa-solid fa-peso-sign"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$booking['totalbooking']?></h3>

                <p>Bookings</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <div class="container">
          <div class="row">
            <div class="col-xl-12">
            <div class="col-sm-6">
            <h1 class="m-0">Calendar</h1>
          </div><!-- /.col -->
            <?=$this->include('admin/calendar');?>
            </div>
          </div>

        </div>

        
    </section>
    <!-- /.content -->
  </div>

  
  
  <!-- /.content-wrapper -->
  
  <?=$this->include('include/admin/admin_footer');?>
</div>

<?=$this->include('include/admin/admin_end');?>
<!-- ./wrapper -->



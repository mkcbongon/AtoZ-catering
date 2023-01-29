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
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="card shadow " >
              <img class="card-img-top" src="../img/back.jpg" alt="Card image cap">

              <div class="card-body">
                <div class="row mb-2">
                  
                  <div class="col-4">
                    <label for="">Date Start</label>
                    <input type="date" name="" id="" class="form-control">
                  </div>
                  <div class="col-4">
                    <label for="">Time</label>
                    <input type="time" name="" id="" class="form-control">
                  </div>
                  <div class="col-4">
                    <label for="">Date End</label>
                    <input type="date" name="" id="" class="form-control">
                  </div>
                </div>

                <div class="row mb-2">
                  
                  <div class="col-6">
                    <label for="">Last Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Last Name">
                  </div>
                  <div class="col-6">
                    <label for="">First Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Last Name">
                  </div>
                  
                </div>

                <div class="row mb-2">
                  
                  <div class="col-6">
                    <label for="">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control">                 
                   </div>
                  <div class="col-6">
                    <label for="">Email</label>
                    <input type="email" name="" id="" class="form-control" placeholder="Email">
                  </div>
                  
                </div>

                <div class="form-group">
                  <label for="">Event Name</label>
                  <input type="text" name="eventname" id="" placeholder="Event Name" class="form-control">
                </div>

                <div class="form-group">
                  <label for="">Event Category</label>
                  <select name="" id="" class="form-control">
                    <option value="">Event Category</option>
                    <option value="">Birthday</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" name="" id="" placeholder="Address" class="form-control">
                </div>

                <div class="form-group">
                  <label for="">Package</label>
                  <select name="" id="" class="form-control">
                    <option value="">Package</option>
                    <option value="">Package 1</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-6">
                    <input type="submit" value="Cancel" class="btn btn-danger form-control">
                  </div>
                  <div class="col-6">
                    <input type="submit" value="Reserve" class="btn btn-success form-control">
                  </div>
                </div>

                

             

              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!--/section -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('include/admin/admin_footer');?>
</div>
<!-- ./wrapper -->

<?=$this->include('include/admin/admin_end');?>
</body>
</html>

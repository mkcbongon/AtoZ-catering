<?=$this->include('include/header');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?=$this->include('include/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <?=$this->include('include/topbar');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-white border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Monthly Earnings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">₱40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-800"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-gradient-white border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Annualy Earnings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">₱215,000</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-peso-sign fa-2x text-gray-800"></i>
                                       
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Pending Requests Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-white border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Transaction</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">18</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-sharp fa-solid fa-chart-simple fa-2x text-gray-800"></i>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-white border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">18</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fa-sharp fa-solid fa-chart-simple fa-2x text-gray-800"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                  

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Monthly Earnings Overview</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                 <canvas id="myChart" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Annualy Earnings Overview</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                 <canvas id="myChartLine" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                        <canvas id="myChartDoughnut"></canvas>
                                  
                                </div>
                            </div>

                    </div>
                        
                        </div>
                   
                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- footer -->
<?=$this->include('include/footer');?>

<!-- end -->
<?=$this->include('include/end');?>
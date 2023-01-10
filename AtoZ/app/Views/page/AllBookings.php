<head><title>A to Z | All Bookings</title></head>

<?= $this->include('include/header') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <?= $this->include('include/sidebar') ?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('include/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php if(!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if(!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Booking List</h1>
                        <div class="mb-2 px-4">
                            <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#addmodal"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <!-- Adding Modal -->
                    <?=$this->include('include/transaction_modal');?>

                       

                 <div class="container-fluid">

                    
                

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer</th>
                                            <th>Date Start</th>
                                            <th>Date End</th>
                                            <th>Package</th>
                                            <th>Quantity</th>
                                            <th>Location</th>
                                            <th>Down Payment</th>
                                            <th>Payment Status</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>ID</th>
                                            <th>Customer</th>
                                            <th>Date Start</th>
                                            <th>Date End</th>
                                            <th>Package</th>
                                            <th>Quantity</th>
                                            <th>Location</th>
                                            <th>Down Payment</th>
                                            <th>Payment Status</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  foreach($bookings as $book): ?>
                                        <tr>
                                            <td><?=$book['ID']?></td>
                                            <td><?=$book['customer']?></td>
                                            <td><?=$book['datestart']?></td>
                                            <td><?=$book['dateend']?></td>
                                            <td><?=$book['package']?></td>
                                            <td><?=$book['qnty']?></td>
                                            <td><?=$book['location']?></td>
                                            <td><?=$book['downpayment']?></td>
                                            <td><?=$book['paymentStatus']?></td>
                                            <td><?=$book['status']?></td>
                                            <td><?=$book['status']?></td>
                                            
                                            
                                        </tr>
                                        <?php endforeach;?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                

            </div>
         
            <!-- footer -->
            <?= $this->include('include/footer') ?>

            <!-- end -->
            <?= $this->include('include/end') ?>


    

   

<head>
    <title>A to Z | Add Bookings</title>
</head>

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
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Bookings</h1>
                        <div class="mb-2 px-4">
                            <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#addmodal"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <!-- Adding Modal -->
                    <?=$this->include('include/transaction_modal');?>

                       

                 <div class="container-fluid">

                    <!-- DataTales Example -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="<?=base_url('add_Bookings');?>" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="customer">Customer</label>
                                                    <input type="text" name="customer" placeholder="Customer" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="eventname">Event Name</label>
                                                    <input type="text" name="eventname" placeholder="Event Name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="qnty">Quantity</label>
                                                    <input type="number" name="qnty" placeholder="Quantity" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="downpayment">DownPayment</label>
                                                    <input type="number" name="downpayment" placeholder="Down Paymemt" class="form-control">
                                                </div>
                                                
                                            </div>

                                            
                                            

                                            <div class="col-sm-6 mb-3">
                                                <div class="row">
                                                    <div class="col-sm-6 mb-3">
                                                        <label for="datestart">Date Start</label>
                                                        <input type="date" name="datestart" placeholder="Date" class="form-control">
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <label for="enddate">Date End</label>
                                                        <input type="date" name="dateend" placeholder="Date" class="form-control">
                                                    </div>

                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="package">Package</label>
                                                    <select name="package" class="form-control">
                                                    <option value="">Choose Package....</option>
                                                        <?php foreach($package as $pack): ?>
                                                            
                                                        <option value="<?=$pack['packagename']; ?>"><?=$pack['packagename'];?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="text" name="location" placeholder="Location" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="paymentStatus">Payment Status</label>
                                                    <input type="number" name="paymentStatus" placeholder="Payment Status" class="form-control">
                                                </div>


                                                <!-- <div class="row mb-3 mt-5">
                                                    <div class="col-sm-6 mb-3">
                                                         <input type="submit" value="Cancel" class="btn btn-danger form-control">
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <input type="submit" value="Add" class="btn btn-primary form-control">
                                                    </div>

                                                </div> -->


                                            </div>

                                           

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="comment">Note:</label>
                                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="submit" value="Cancel" class="btn btn-danger form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="submit" value="Add" class="btn btn-primary form-control">
                                                        </div>
                                                    </div>
                                                   

                                                </div>

                                               
                                            </div>

                                        </div>
                                       

                                       
                                        
                                       
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                   

    
                

            </div>
         
<!-- footer -->
 <?= $this->include('include/footer') ?>

<!-- end -->
<?= $this->include('include/end') ?>


    

   
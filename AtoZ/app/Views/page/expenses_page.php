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
                     <?php if(!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if(!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Expenses</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Adding Modal -->
                    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalLabel" aria-hidden="true">
                       
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addmodalLabel">Add Expenses</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <form action="<?=base_url('addExpenses'); ?>" method="post">
                                        <input type="text" placeholder="Payable to" name="payableto" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Item" name="item" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Quantity" name="qnty" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Price" name="price" class="form-control">
                                        </div>
                                       
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success">Add Transaction</button>
                                        </div>
                                         
                                        </form>
                                        
                                    </div>
                                </div>
                                
                             </div>
                         </div>
                    </div>

                        <div class="text-right mb-2 px-4">
                            <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#addmodal"><i class="fa-solid fa-plus"></i>Add</a>
                        </div>

                        <!-- End of adding modal -->
                    

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="container-fluid col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      
                                        <tr>
                                        <th>ID</th>
                                            <th>Payable To</th>
                                            <th>Date</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Payable To</th>
                                            <th>Date</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php foreach($expenses as $ex):?>
                                        <tr>
                                            <td><?=$ex['ID']?></td>
                                            <td><?=$ex['payableto']?></td>
                                            <td><?=$ex['date']?></td>
                                            <td><?=$ex['item']?></td>
                                            <td><?=$ex['qnty']?></td>
                                            <td><?=$ex['price']?></td>
                                            
                                            <td>
                                                <a href='<?=base_url('deletedata'.$ex['ID'])?>'></a><i class="btn btn-success fas fa-edit"></i>
                                                <a href='<?=site_url('deletedata/'.$ex['ID'])?>'></a><i class="btn btn-danger far fa-trash-alt"></i>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                     </div>

                        
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
      <!-- footer -->
<?=$this->include('include/footer');?>

<!-- end -->
<?=$this->include('include/end');?>
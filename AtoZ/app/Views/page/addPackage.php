
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
                        <div class="alert alert-success alert-dismissible"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Package</h1>
                        <div class="mb-2 px-4">
                            <a class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#addmodal"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <!-- Adding Modal -->
                    <?=$this->include('include/transaction_modal');?>

                       

                 <div class="container-fluid">

                    <!-- DataTales Example -->

                    <div class="row">
                        <div class="col-sm-8 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Package Name</th>
                                            <th>Good For</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Package Name</th>
                                            <th>Good For</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($package as $pack): ?>
                                        
                                        <tr>
                                            <td><?=$pack['ID']?></td>
                                            <td><?=$pack['packagename']?></td>
                                            <td><?=$pack['goodfor']?></td>
                                            <td><?=$pack['description']?></td>
                                            <td><?=$pack['price']?></td>
                                            <td><img src="uploads/<?= $pack['image']?>" height="130" width="95" alt=""></td>

                                        </tr>
                                        
                                       
                                       <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>

                                   

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form action="<?=base_url('add_package');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="packagename">Package Name</label>
                                            <input type="text" name="packagename" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="goodfor">Good For:</label>
                                            <input type="number" name="goodfor" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="avatar">Choose Package Picture</label>

                                                <input type="file"
                                                    id="image" name="image"
                                                    accept="image/png, image/jpeg">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Add" class="btn btn-primary form-control font-weight-bold text-lg">
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


    

   
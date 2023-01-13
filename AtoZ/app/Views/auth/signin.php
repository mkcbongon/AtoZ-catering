<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <!-- Favicon -->
     <link href="img/logofinal.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/auth/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url();?>/auth/css/login_style.css">

    <title>A to Z | Sign in </title>
  </head>
  <body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('/auth/images/bg_2.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h1 class="text-center mb-2" >LOG IN</h1>

                    <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                            </div>
                        <?php endif;?>

                    <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group first">
                        <label for="username">Username</label>
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group last mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-flex mb-5 align-items-center">
                        
                        <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                    </div>

                    <input type="submit" value="Log In" class="btn btn-block btn-primary">

                    </form>
                </div>
                </div>
            </div>
        </div>

        
    </div>
  
 
  </body>
</html>
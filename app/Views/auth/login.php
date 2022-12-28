<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Log in</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="<?=base_url('ccs/register_style.css'); ?>">
</head>
<body>
<div class="signup-form">
    <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
		<h2>Log in</h2>
		
		<hr>
		<?php if(!empty(session()->getFlashdata('msg'))): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
        <?php endif ?>

        <div class="form-group">
            <label for="email">Email Address</label>
			<div class="input-group">
                
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
            <label for="password">Password</label>
			<div class="input-group">
                
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		
        <div class="form-group text-right">
			<a href="#">Forget Password?</a>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg form-control">Log in</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="<?=base_url('/');?>">Sign up</a></div>
</div>
</body>
</html>
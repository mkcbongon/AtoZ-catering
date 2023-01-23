
  <body>
		
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="ion-ios-person"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
		      	<form action="#" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="form-check w-50">
		            	<label class="custom-control fill-checkbox">
										<input type="checkbox" class="fill-control-input">
										<span class="fill-control-indicator"></span>
										<span class="fill-control-description">Remember Me</span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
		      <div class="modal-footer justify-content-center">
		      	<p>Not a member? <a href="#">Create an account</a></p>
		      </div>
		    </div>
		  </div>
		</div>


    <script src="<?=base_url('guest/login/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('guest/login/js/popper.js');?>"></script>
    <script src="<?=base_url('guest/login/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('guest/login/js/main.js');?>"></script>
  </body>
</html>
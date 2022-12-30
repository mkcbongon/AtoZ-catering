<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalLabel" aria-hidden="true">
                       
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                               

                               <div class="modal-body">
                                   
                                   <div class="form-group">
                                       <form action="<?=base_url('SigninController/loginAuth'); ?>" method="post">
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                        </button>
                                        <br>

                                        <div class="signin-text text-center mt-4">
                                            <h3>Sign in</h3>
                                        </div>
                                       
                                       <div class="form-group mt-4">
                                            <label for="eventname">Username or Email:</label>
                                           <input type="email" placeholder="Username or Email:" name="email" class="form-control">
                                       </div>

                                       <div class="form-group">
                                            <label for="qnty">Password</label>
                                           <input type="password" placeholder="Password" name="password" class="form-control">
                                       </div>

                                       <div class="form-groupmt-3">
                                              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                                        </div>

                                        <div class="text-center">
                                            <p>or</p>
                                        </div>

                                       <div class=" form-group">
                                            <button type="submit" class="btn btn-success form-control">Register</button>
                                        </div>
                                      
                                    </form>
                                       
                                </div>
                            </div>
                               
                           </div>
                       </div>
                   </div>
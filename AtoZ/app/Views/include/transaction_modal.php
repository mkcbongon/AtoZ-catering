<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalLabel" aria-hidden="true">
                       
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                               <div class="modal-header bg-gradient-danger">
                                   <h5 class="modal-title text-white fw-bold" id="addmodalLabel">Add New Transaction</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                               <div class="modal-body">
                                   <div class="form-group">
                                       <form action="<?=base_url('add_transaction'); ?>" method="post">
                                            <label for="client">Cater to</label>
                                             <input type="text" placeholder="Cater to" name="client" class="form-control">
                                       </div>
                                       <div class="form-group row">
                                            <div class="col-sm-6 block">
                                                <label for="date">Start of Event</label>
                                                <input type="date" name="date" class="form-control">
                                            </div>
                                               
                                            <div class="col-sm-6">
                                                <label for="date">End of Event</label>
                                                 <input type="date" name="date" class="form-control">
                                            </div>
                                       </div>
                                      
                                       <div class="form-group">
                                            <label for="eventname">Event Name</label>
                                           <input type="text" placeholder="Event Name" name="eventname" class="form-control">
                                       </div>
                                       <div class="form-group">
                                            <label for="qnty">Quantity</label>
                                           <input type="text" placeholder="Quantity" name="qnty" class="form-control">
                                       </div>
                                       <div class="form-group">
                                            <label for="amount">Amount</label>
                                           <input type="text" placeholder="Amount" name="amount" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <input type="text" placeholder="Amount Paid" name="amount_paid" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <input type="date" placeholder="Date Paid" name="date_paid" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <input type="text" placeholder="Remarks" name="remarks" class="form-control">
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
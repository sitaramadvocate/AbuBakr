<?php include('header.php');?>

<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Send TOKEN </h3>
  </div>



 <div class="row">
     <div class="col-lg-6 col-md-12">
         <div class="dashboard-box">
             <div class="create-wallet-block">
                <div class="row send-rwn-block">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Recipient Wallet Address</label>
                      <input type="text" class="form-control" placeholder="Please paste your address here">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Withdraw From</label>
                      <input type="text" class="form-control" readonly="" placeholder="54f6dsf7sdf8s7787f8778s87">
                    </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                    <label>Amount</label>
                       <div class="input-group send">
                            <input type="text" class="form-control bg-white" placeholder="0.00">
                            <div class="input-group-append">
                              
                              <span class="input-group-text bg-white"><img src="assets/images/buy-coin.png" class="img-fluid " style="height: 20px;">&nbsp; TOKEN</span>
                            </div>
                          </div>
                        </div>
                        <p class="text-left"><i class="fa fa-info-circle"></i> <small><b>125</b> <span>TOKEN</span> Reamining. You need minimum balance 00.00 TRX to process this transaction.</small></p>
                      </div>
                     <div class="col-md-6"> 
                        <div class="form-group">
                    <label>Reciever would get 0000</label>
                       <div class="input-group send">
                            <input type="text" class="form-control bg-white" placeholder="0.00">
                            <div class="input-group-append">
                              
                              <span class="input-group-text bg-white"><img src="assets/images/buy-coin.png" class="img-fluid " style="height: 20px;">&nbsp; TOKEN</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                    <label>Transaction fee</label>
                       <div class="input-group send">
                            <input type="text" class="form-control bg-white" placeholder="0.00">
                            <div class="input-group-append">
                              
                              <span class="input-group-text bg-white"><img src="assets/images/buy-coin.png" class="img-fluid " style="height: 20px;">&nbsp; TOKEN</span>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-12">
                     <div class="text-center mlti-btn">
                        <button class="btn btn-common light-green">Cancel</button>
                        <button class="btn btn-common light-green" data-toggle="modal" data-target="#keyModal">Send TOKEN</button>
                     </div>
                  </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-lg-6 col-md-12">
        <div class="card steps-card text-center for-all-pages">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="font-small-3 token-balance clearfix">
                                     <h6 class="hbg my-2 text-left">Tips</h6>
                                     <ol class="text-left four-step-list">
                                        <li>Please check the network and wallet address carefully
                                          your TRX wallet should be at least 0.5 to carry out transaction
                                        </li>
                                        <li>
                                          Once you click on submit button, you will be asked for private key
                                          After entering correct private key,</li>
                                          <li> You will get an OTP on registered email
                                          once it is submitted, transaction cannot be reversed.</li>
                                    </ol>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
</div>

<!-- Modal -->
<div class="modal fade modal-key" id="keyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <h3 class="green-heading text-center">Enter Your Private Key</h3>
             <p class="text-upper text-center">Please enter your private key stored with you.</p> 
            <div class="form-group">
              <input type="text" name="" class="form-control">
            </div>
            <div class="text-center mt-4">
              <a href="send-history.php" class="btn btn-common light-green">Submit</a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>



<?php include('footer.php');?>
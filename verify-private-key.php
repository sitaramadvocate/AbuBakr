<?php include('header.php');?>

<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Verify Private Key </h3>
  </div>


<section class="dash-inner-sec">
     <div class="row">
             <div class="col-lg-6 col-md-12">
                 <div class="dashboard-box wow slideInUp">
                     <div class="create-wallet-block">
                           
                            <h3 class="main-heading">Yes Let's get set up.</h3> 
                          
                           <p class="head-commn-text">This will create a new wallet.</p>

                            <h4 class="green-heading">Please enter your passphrase below to <br> Confirm your wallet.</h4>

                          <div class="input-group input-dash copy-id-dash enter-passphrase">
                             <input class="form-control" type="text" placeholder="Enter Passphrase" value="" style="color: #474747;">
                          </div>

                          <div class="clearfix note-line">
                            <span class=""><b><i class="fa fa-info-circle"></i> Make sure you keep the passphrase safe. If you loose your passphrase, your account can't be restored and all your funds will be last.</b></span>
                          </div>

                          <div class="text-center">
                              <a href="wallet-success.php" class="btn btn-common light-green">Continue</a>
                          </div>
                        </div>
                 </div>
             </div>
              <div class="col-lg-6">
               <div class="img-box-side">
                 <img src="assets/images/wallet-img.jpg" class="img-fluid">
               </div>
             </div>
        </div>
</section>




<?php include('footer.php');?>
<?php include('header.php');?>

<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Private Key </h3>
  </div>


<section class="dash-inner-sec">
     <div class="row">
             <div class="col-lg-6 col-md-12">
                 <div class="dashboard-box  wow slideInUp">
                     <div class="create-wallet-block">

                           <h3 class="main-heading">Yes Let's get set up.</h3> 
                          
                           <p class="head-commn-text">This will create a new wallet.</p>

                            <h4 class="green-heading">Here is your passphrase. You must copy it <br> and save it  a secure place.</h4>
                           
                          <div class="input-group input-dash copy-id-dash">
                             <input class="form-control" type="text" placeholder="" value="2798ehgdgdsffsfsfighj9832q787ysuueh">
                             <a href=""><i class="fa fa-copy"></i></a>
                             <a href=""><i class="fa fa-share"></i></a>
                            <!--  <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><a href="#"><i class="fa fa-copy"></i></a></span>
                          </div> -->
                        </div>
                        <div class="clearfix">
                            <span class=""><b><i class="fa fa-info-circle"></i> Make sure you keep the passphrase safe. You will be asked to re-type it for cofirmation.</b></span>
                          </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            <span class="cr"><i class="fa fa-check cr-icon"></i></span>
                            I agree with <a href="">terms and conditions</a> of TOKEN.
                          </label>
                        </div>

                          <div class="text-center mlti-btn">
                              <a href="" class="btn btn-common light-green">Download</a>
                               <a href="verify-private-key.php" class="btn btn-common light-green">Next</a>
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
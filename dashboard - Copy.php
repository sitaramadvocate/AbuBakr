<?php include('header.php');?>

   <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Dashboard </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <div class="row">
              <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Worth 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 15,0000</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">TOKEN 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">

                    <h2 class="mb-5">$ 15,0000</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Rewards Earned  
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 95,5741</h2>
                  </div>
                </div>
              </div>
               <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">BNB  
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 15,0000</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-2 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/other/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">ETH 
                    </h4>
                    <img src="assets/images/buy-coin.png" class="img-fluid icon-img">
                    <h2 class="mb-5">$ 45,6334</h2>
                  </div>
                </div>
              </div>
             

            </div>

  <div class="row align-item-strech dash-inner-sec">
             <div class="col-lg-6 col-md-12 mt-3">
                  <div class="dashboard-box resent-box mb-0  shadow-box" style="height: 100%;">
                       <div class="create-wallet-block">
                           <h4 class="green-heading">TOKEN</h4>
                           <div class="resent-bottom-logo">
                            <img src="assets/images/buy-coin.png" alt="logo">
                           </div>
                           <p><small>Your Wallet Address</small></p>
                            <div class="input-group input-dash copy-id-dash">
                             <input class="form-control" type="text" placeholder="" value="2798ehgdgdsffsfsfighj9832q787ysuueh">
                             <a href=""><i class="fa fa-copy"></i></a>
                             <a href=""><i class="fa fa-share"></i></a>
                        </div>
                           <h5>0.00000000 ETH</h5>

                            <div class="text-center mlti-btn">
                              <a href="send-rowan.php" class="btn btn-common light-green">Send</a>
                              <a href="buy-coin.php" class="btn btn-common light-green">Buy</a>
                              <a href="receive.php" class="btn btn-common light-green">Receive</a>
                          </div>
                           
                          
                        </div>
                    </div>
             </div>
             <div class="col-lg-6 col-md-12 mt-3">
                <div class="upper-block-coin dashboard-box shadow-box" style="min-height: auto;height: 100%;">
                    <div style="width: 100%;padding: 20px;">
                      <div class="header-block clearfix">
                      <span class="name-side green-heading">TOKEN</span>
                      <span class="logo-side"><img src="assets/images/buy-coin.png"></span>
                    </div>
                    <div class="next-block">
                      <span class="left-side">TOKEN - 0.0000000</span>
                      <span class="equal">≅</span>
                      <span class="right-side">
                         <select name="food_selector" data-placeholder="US$ - 0.0000000">
                            <option value="pancakes"><img src="assets/images/other/4.png">TOKEN - 0.0000000</option>
                            <option value="pancakes"><img src="assets/images/other/4.png">BNB - 0.0000000</option>
                            <option value="pancakes"><img src="assets/images/other/4.png">ETH - 0.0000000</option>
                          </select>
                      </span>
                    </div>
                    </div>
                  </div>
             </div>
            
     </div>


 
           
           

<?php include('footer.php');?>
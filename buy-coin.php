<?php include('header.php');?>

 <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Buy Coin </h3>
  </div>
 <section class="dash-inner-sec token for-token-page"  >
    <div class="card-content for-equal-only">       
        <div class="row">
         <div class="col-lg-6 col-md-12">

          <div class=" buy-upper card pull-up buy-token mb-3">
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="bitcoin-flex-box">
                      <img src="assets/images/eth-icon.png" alt="Bitcoin Icon">
                      <div class="center-box">
                          <h6>Coin</h6>
                          <div class="form-group m-0">
                            <select class="form-control" style="box-shadow: none;outline: none;border: 1px solid #ddd !important;">
                                 <option>ETH</option>
                                
                              </select>
                          </div>

                      </div>
                     
                    </div>
                    <div class="row d-flex align-items-center" action="https://pixinvent.com/demo/crypto-ico-admin/html/ltr/vertical-menu/buy-ico.html">
                        <div class="col-lg-2 col-md-3 col-12">
                        
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="card steps-card text-center">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="font-small-3 token-balance clearfix">
                                     <h6 class="hbg my-2 text-left">5 step guide</h6>
                                     <ol class="text-left four-step-list">
                                        <li>Calculate how much tokens you want to buy.</li>
                                        <li>Copy/Scan the displayed address</li>
                                        <li>Send your TRX to that address. You may send it right from your exchange.</li>
                                        <li>Upon transaction confirmation, please fill in your transaction details (Bitcoin Wallet address, Ethereum Wallet address and transaction ID) in the form. We need Ethereum wallet address so that we can transfer TOKEN coins to you.</li>
                                        <li>Our team will verify the transaction and will send your TOKEN tokens within 48 hours which will be reflected in your wallet.</li>
                                    </ol>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12">
              <div class="dashboard-box shadow-box side-box-by-now">
                  <form>
               
                    <div class="form-body">
                      <div class="row">
                          <div class="col-12 col-lg-5 col-md-12">
                              <div class="form-group row">
                                  <label class="col-2 label-control" for="projectinput1">BUY<span style="color:red;">*</span></label>
                                  <fieldset class="col-10">
                                    <div class="input-group">
                                      <input type="text" class="form-control" data-rule-number="true" onkeyup="multiply()"  name="rowan" id="rowan" data-rule-min="1" data-msg-min="You have to buy minimum 1 TOKEN." data-rule-required="true" data-msg-required="Please enter value in digit." aria-describedby="basic-addon4" >
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon4">TOKEN</span>
                                      </div>
                                    </div>
                          
                                  </fieldset>
                                  <span for="rowan" class="error_validate" id="rowan_err"></span>
                              </div>
                          </div>
                          <div class="col-12 col-lg-2 col-md-12">
                              <fieldset class="col-12">
                                <p class="mb-0 text-center font-medium-5">=</p>
                              </fieldset>
                          </div>
                          <div class="col-12 col-lg-5 col-md-12">
                              <div class="form-group row">
                                  <fieldset class="col-12">
                                    <div class="input-group">
                                      <input class="form-control" id="btc"  aria-describedby="basic-addon4" readonly="" name="btc" type="text">
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon4">ETH</span>
                                      </div>
                                    </div>
                                  </fieldset>
                              </div>
                          </div>
                      </div>
                  </div>
              <p class="font-italic value-coin-line mt-3 mx-1 mb-2"> <b>1 TOKEN = 23 TRX</b></p>
                 <div class="col-md-12 p-0">
                    <div id="tran_wallet">
                   
                    <!-- <div class="form-group">
                      <div class="row">
                          <label class="control-label col-sm-5">Sender's Bitcoin Wallet Address<span style="color:red;">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control secure" id="bit_wallet_address" name="bit_wallet_address" data-rule-required="true" data-msg-required="Please enter Wallet Address." >
                      </div>
                      </div>
                    </div> -->
                     <div class="form-group">
                      <div class="row">
                          <label class="control-label col-sm-5">Client Wallet Address<span style="color:red;">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control secure" value="" id="eth_wallet_address" name="eth_wallet_address" data-rule-required="true" data-msg-required="Please enter Ethereum Wallet Address." readonly="" >
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <label class="control-label col-sm-5">Reference/Transaction ID</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control secure" id="transaction_id" name="transaction_id" >
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <label class="control-label col-sm-5">Upload Screenshot</label>
                      <div class="col-sm-7">
                        <div class="input-group file-input">
                        <input type="text" class="form-control file-upload-text" disabled="" placeholder="select a file...">
                        <button type="button" class="btn btn-common light-green file-upload-btn upload-btn p-0">
                          Upload
                          <input type="file" class="file-upload" data-rule-required="true" data-msg-required="Please upload Payment Screenshot" name="transactionImage" id="file-input-1" style="width: 0;" placeholder="No File Selected">
                          <span class="input-group-btn">
                        </span></button>
                        
                      </div>
                       
                      </div>
                      </div>
                    </div>

                      <!--  <div class="form-group" >
                          <div class="form-check form-check-flat form-check-primary">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> If did not remember and you have a screen shot of transaction id and wallet address then click here.</label>
                        </div>
                      </div> -->
                  </div>
                   
                    <div class="form-group mt-4">
                     
                      <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            <span class="cr"><i class="fa fa-check cr-icon"></i></span>
                            I agree with <a href="">terms and conditions</a> of TOKEN.
                          </label>
                        </div>
                      </div>
                        
                  <input type="hidden" name="_csrf" value="<%=csrfToken%>" />
                    <div class="form-group">
                      <div class="row">
                          <div class="col-sm-12">
                        <div class="btn-block">
                            <button type="submit" class="btn btn-common light-green">Submit</button>
                        </div>
                      </div>
                      </div>
                    </div>
                
                 
                   </div>
                  </form>
              </div>
                
              
            </div>
        </div>
                

    </div>
 </section>




<?php include('footer.php');?>

  <script>
    function initializeFileUploads() {
      $('.file-upload').change(function () {
        var file = $(this).val();

        var parts = file.split("\\");
        var lastpart = parts[parts.length - 1]
        //alert("file"+lastpart);
        $(this).closest('.input-group').find('.file-upload-text').val(lastpart);
      });
      $('.file-upload-btn').click(function () {
        $(this).find('.file-upload').trigger('click');
      });
      $('.file-upload').click(function (e) {
        e.stopPropagation();
      });
    }


    // On document load:
    $(function () {
      initializeFileUploads();
    });
  </script>


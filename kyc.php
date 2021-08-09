<?php include('header.php');?>

<style>
  .form-group .nice-select.form-control {
    border: 1px solid #ddd !important;
    padding: 0 10px;
    height: 32px;
    border-radius: 5px;
}
</style>


  <div class="heading-row mb-20">
    <div class="row align-item-center">
       <div class="col-lg-6">
          <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-file-document-box"></i></span>KYC </h3>
       </div>
        <div class="col-lg-6">
         <div class="text-right">
           <div>
             <a href="dashboard.php" class="btn btn-common bg-gradient-primary">Go Back</a>
           </div>
         </div>
       </div>
  </div>
  </div>
  <div class="row">
      <div class="col-md-12">
        <div class="card">
           <div class="card-body">
             <div class="row">
               <div class="col-md-11 m-auto">
                 <div class="add-painting-form">
                   <div class="profile-form mt-20 view-banner-page">
                       <div class="row">
                          <div class="col-md-5">
                             <div class="form-group">
                              <label>Upload KYC Documents <br>(you can add multiple Documents)</label>
                               <div id="attribute_section_add_main">
                                 <div id="attribute_section_add" class="attribute_section-add-new">
                                     <div class="border-gray document-upload-box artist-img">
                                       <div class="text-left">
                                          <div class="uploader-img mt-0">
                                            <img id="user_profile_image_preview" src="assets/images/other/demo-img.png" class="m-t-5 painting-main-img kyc-img-new" >
                                          </div>
                                           <div class="input-group mb-3 mb-3 verification">
                                              <input type="text" class="form-control" readonly="" id="text_img_name" data-rule-required="true" data-msg-required="Please select your Id.">
                                              <span class="input-group-btn">
                                                <span class="btn btn-common bg-gradient-primary btn-file1" style="min-width: auto;">
                                                Upload <input type="file" id="imgInp6" value="" name="image" accept="image/*" onchange="readURL(this);">
                                                 <input type="hidden" name="old_image" value="">
                                                </span>   
                                              </span>
                                              <button class="btn btn-common bg-gradient-primary ml-15" style="min-width: auto;">Remove</button>
                                             </div>
                                          </div>
                                        </div>
                                        <div class="mt-20 ml-15">
                                            <a href="javascript:void(0);" class="btn-clone" title="Add" onclick="attribute_cloning_add();">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <a  href="javascript:void(0);" id="attribute_cloning" class="btn-clone" title="Remove" onclick="remove_current_div_venues($(this));">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                  </div>
                                </div>
                            </div>
                         </div>
                        
                         <div class="col-md-7">
                            <div class="row">
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control">
                                  </div>
                              </div>
                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" id="datepicker" placeholder="DD/MM/YYYY">
                                  </div>
                              </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Country</label>
                                     <div class="box">
                                      <select class="form-control">
                                        <option>Country 1</option>
                                        <option>Country 2</option>
                                        <option>Country 3</option>
                                        <option>Country 4</option>
                                        <option>Country 5</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>

                               <div class="col-md-6">
                                 <div class="form-group">
                                    <label>ID Document Type</label>
                                     <div class="box">
                                      <select class="form-control">
                                        <option>1 Position</option>
                                        <option>2 Position</option>
                                        <option>3 Position</option>
                                        <option>4 Position</option>
                                        <option>5 Position</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                             
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>ID Document Number</label>
                                    <input type="text" class="form-control">
                                  </div>
                              </div>
                             
                            
                            </div>
                              <div class="popup-btn text-center">
                        <a href="kyc-details.php" class="btn btn-common bg-gradient-primary">Save</a>
                        <a href="" class="btn btn-common bg-gradient-primary">Cancel</a>
                      </div>
                         </div>
                       </div>
                     
                      
               

                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
      </div>
    </div>
      


<?php include('footer.php');?>
<script>
var countval = 1; //for Increase id num  
function attribute_cloning_add(){
    var new_count = countval++; //for increase id number
    // both for change id  
    $clone1 = $("#attribute_section_add").clone();
    $clone1.attr('id','attribute_section_add'+new_count);
    $('#attribute_section_add_main').append($clone1); //for append Clone Data
    re_arrange_qualification();
    
}

</script>

<!-- Remove Clone by Click Minus Button -->
<script>
    function remove_current_div_venues(obj){
        var parent_id = obj.parent().parent().attr('id'); //for parent ID
        if( parent_id != 'attribute_section_add'){
            obj.parent().parent().remove();
            re_arrange_qualification(); 
        }    
    }
</script>

  <script type="text/javascript" > 
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#user_profile_image_preview')
.attr('src', e.target.result)
.width(200)
.height(150);
};

reader.readAsDataURL(input.files[0]);
}
var src = $('#imgInp6').val(); // "static/images/banner/blue.jpg"
var tarr = src.split('/');      // ["static","images","banner","blue.jpg"]
var file = tarr[tarr.length-1]; // "blue.jpg"
var data = file.split('.')[0];  // "blue"

//alert(data);
$('#text_img_name').val(src);
}

</script>

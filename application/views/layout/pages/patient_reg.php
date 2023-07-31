



    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                        
                     <h5 class="mb-50">Patient Registration  </h5>
                     <div id="msg"></div>
                        <!-- <form action="<?//=base_url('home/patient_reg')?>" method="POST"> -->
                            <div class="form-group">
                                <input type="text" name="firstname" id="firstname" class="form-control" id="contact-name" placeholder="firstname">
                                 <div style="color:red;"> <?=form_error('username')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="othernames" id="othernames" class="form-control" id="contact-email" placeholder="othername">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" id="contact-email" placeholder="phone">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control" id="contact-email" placeholder="address">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="ailment" id="ailment" class="form-control" id="contact-email" placeholder="ailment">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="symptoms" id="symptoms" class="form-control" id="contact-email" placeholder="symptoms">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="date" name="date" id="date" class="form-control" id="contact-email" placeholder="symptoms">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                       
                            <button type="submit" onclick="makechange()" class="btn  medilife-btn">  Submit Record  </button>
                            <button type="submit" class="btn medilife-btn" style="margin-left:150px;"> <a href="<?=site_url('home/view_result')?>" style="color:white;">  Doctors Response </a>  </button>
                        <!-- </form> -->
                    </div>
                  
                </div>

            </div>
        </div>
    </section> 




    <script> 

function makechange(){
    const full = $('#firstname').val();
    const other = $('#othernames').val();
    const phone = $('#phone').val();
    const address = $('#address').val();
    const ailment = $('#ailment').val();
    const symptoms = $('#symptoms').val();
    const date = $('#date').val();

     if(full=="" || other=="" || phone=="" || address=="" || ailment=="" || symptoms=="" || date==""){
          alert(" please fill all entries ");
       }else{
          //e.preventDefault();
          $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/patient_reg'); ?>",
                    data: {
                        full,
                        other,
                        phone,
                        address,
                        ailment,
                        symptoms,
                        date
                    },
                        dataType: "JSON",
                        success: function(data){
                            location.reload();
                                if(data){
                                    alert(" Patient Details Sent To Doctor");
                                // $('#msg').html(" Patients record sent to Doctor");
                                }

                        },
                        error: function() { alert("Error posting feed or record already exist."); }
                    });
      
    
    }             
        

 }


</script>
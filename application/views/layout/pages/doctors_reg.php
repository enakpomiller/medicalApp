



    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50">Doctors Registration  </h5>
                        <!-- <form action="<?//=base_url('home/doctors_reg')?>" method="POST"> -->
                            <div class="form-group">
                                <input type="text" name="fullnames" id="fullnames" class="form-control" id="contact-name" placeholder="ffull names">
                                 <div style="color:red;"> <?=form_error('username')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" id="contact-email" placeholder="phone">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="specialty" id="specialty" class="form-control" id="contact-email" placeholder="specialty">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" id="contact-email" placeholder="email">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <button type="submit" onclick="makechange()" class="btn medilife-btn">  Submit Detials  </button>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>





<script> 
function makechange(){
    const full = $('#fullnames').val();
    const phone = $('#phone').val();
    const special = $('#specialty').val();
    const email = $('#email').val();
    const pass = $('#password').val();

     if(full=="" || phone=="" || special=="" || email=="" || pass==""){
         alert(" please fill all entries ");
       }else{
          //e.preventDefault();
          $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/doctors_reg'); ?>",
                    data: {
                        full,
                        phone,
                        special,
                        email,
                        pass
                    },
                        dataType: "JSON",
                        success: function(data){
                            location.reload();
                            window.location = "<?=base_url('home/doctors_login')?>";

                        },
                        error: function() { alert("Error posting feed or record already exist."); }
                    });
      
    
    }             
        

 }


</script>
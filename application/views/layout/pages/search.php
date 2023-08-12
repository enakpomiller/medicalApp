


    <section class="medilife-contact-area section-padding-100">
        <div class="container">

            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
             <div class="contact-form">
                 <form action="<?=base_url('home/search')?>" method="POST">
                           <div class="col-md-8 bg-dark"> 
                                 <input type="text" name="search"  class="form-control text-dark"  id="search" placeholder="search for patient">
                            </div>
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    
 </section>




<script> 
   function makechange(){
    const pre = $('#prescription').val();
    const dose = $('#dose').val();

     if(pre=="" || dose==""){
         alert(" please fill all entries ");
       }else{
          //e.preventDefault();
          $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/doctors_reg'); ?>",
                    data: {
                        pre,
                        dose
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



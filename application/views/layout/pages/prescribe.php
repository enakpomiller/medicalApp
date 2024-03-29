


    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <?php if(($active)>0) { ?>
                <div class="container text-center">
                    <img src="<?=base_url('assets/img/bg-img/not found.png')?>" style="width:25%;position:relative;bottom:50px;">
                    <h5 style="position:relative;bottom:50px;"> <?=ucfirst($user->firstname)?>  <?=ucfirst($user->othernames)?> </h5>
                    <p style="position:relative;bottom:60px;"> Sorry! Prescription has been made and test result Approved for this patient</p>
                    <a href="<?=site_url('home/doct_board')?>" class="btn  medilife-appoint-btn pl-4 pr-4" style="position:relative;bottom:60px;background:#006cff;color:white;"><i class="fa fa-backward"></i> Previous </a>
                </div>
           <?php }else{?>
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                 
                 <form action="<?=base_url('home/prescribe/'.$patient_details->id)?>" method="POST">
                     <h5 class="mb-50"> <?="Patient Medical  Details"?> </h5>
                           <?=$this->session->flashdata('success')?>
                            <div class="form-group">
                                <p> Firstname </p>
                                <input type="text" name="firstname" readonly class="form-control text-dark"  value="<?=$patient_details->firstname?>" id="contact-name" placeholder="email">
                                 <div style="color:red;"> <?=form_error('email')?> </div>
                            </div>
                            <div class="form-group">
                                <p> Othernames </p>
                                <input type="text" name="othernames" readonly class="form-control text-dark" value="<?=$patient_details->othernames?>" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <p> Phone Numner </p>
                                <input type="text" name="phone" readonly class="form-control text-dark" value="<?=$patient_details->phone?>" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <p> Ailment </p>
                                <input type="text" name="ailment" readonly class="form-control text-dark" value="<?=$patient_details->ailment?>" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <p> Symptoms </p>
                                <input type="text" name="symptoms" readonly class="form-control text-dark" value="<?=$patient_details->symptoms?>" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                            <h5 class="mt-50"> <?="Doctors Prescription "?> </h5>
                            <input type="hidden" name="patient_id" value="<?=$patient_details->id?>">
                                 <textarea require name="prescription" id="prescription"></textarea>
                                 <p> Dose </p>
                             <input type="text" required name="dose" id="dose" class="form-control">
                            </div>
                        <button type="submit" class="btn btn-primary">Submit </button>
                        <a href="<?=site_url('home/doct_board')?>" class="btn btn-dark" style="margin-top:40px;"><i class="fa fa-backward"></i> Prevoius </a>
                    </div>
                </div>
            </div>
        </div>
     <?php } ?>
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



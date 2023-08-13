


    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <?php if(($active)) { ?>
      
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                 
                 <form action="<?=base_url('home/edit_patient_rec/'.$patient_details->id)?>" method="POST">
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
                              <?php $var = $this->db->get_where('prescription',array('patient_id'=>$patient_details->id))->row(); ?>
                                 <textarea require name="prescription" id="prescription"><?=$var->prescription ?></textarea>
                                 <p> Dose </p>
                             <input type="text"  name="dose" id="dose" value="<?=$var->dose?>" class="form-control text-dark">
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



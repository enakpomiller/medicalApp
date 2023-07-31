


    <section class="medilife-contact-area section-padding-100">
        <div class="container">
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
                                 <textarea name="prescription"></textarea>
                                 <p> Dose </p>
                             <input type="text" name="dose" class="form-control">
                            </div>
                        
                        <button type="submit" class="btn btn-primary">Submit </button>
                    </div>
                </div>


            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- <script>
        $(document).ready(function() {
            // Add event listener to the "Add More" button
            $("#addBtn").click(function() {
                // Clone the first set of fields and append it to the container
                var $clone = $(".repeaterRow:first").clone();
                $("#repeaterContainer").append($clone);

                // Clear the input values of the cloned fields
                $clone.find("input").val("");

                // Add event listener to the "Remove" button in the cloned set
                $clone.find(".removeBtn").click(function() {
                    $(this).parent().remove();
                });
            });
        });
    </script> -->




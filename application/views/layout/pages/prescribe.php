





    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50"> <?="Patient Medical  Details"?> </h5>
                     <?=$this->session->flashdata('inserted')?>
                     <div class="text-danger"> <?=$this->session->flashdata('error')?> </div>
                        <form action="<?=base_url('home/doctors_login')?>" method="POST">
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

                            <h5 class="mb-50"> <?=$title?> </h5>

                            <button type="submit" class="btn medilife-btn"> Login </button>
                        </form>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
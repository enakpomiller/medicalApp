



    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50">Doctors Registration  </h5>
                     <?=$this->session->flashdata('inserted')?>
                        <form action="<?=base_url('home/doctors_reg')?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="fullnames" class="form-control" id="contact-name" placeholder="ffull names">
                                 <div style="color:red;"> <?=form_error('username')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="contact-email" placeholder="phone">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="specialty" class="form-control" id="contact-email" placeholder="specialty">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="contact-email" placeholder="email">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="contact-email" placeholder="specialty">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                     
                            <button type="submit" class="btn medilife-btn">  Submit Detials  </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50"> Doctors Login </h5>
                     <?=$this->session->flashdata('inserted')?>
                     <div class="text-danger"> <?=$this->session->flashdata('error')?> </div>
                        <form action="<?=base_url('home/doctors_login')?>" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="contact-name" placeholder="email">
                                 <div style="color:red;"> <?=form_error('email')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <button type="submit" class="btn medilife-btn"> Login </button>
                        </form>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
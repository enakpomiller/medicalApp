



    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50">Patient Registration  </h5>
                     <?=$this->session->flashdata('inserted')?>
                        <form action="<?=base_url('home/patient_reg')?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" id="contact-name" placeholder="firstname">
                                 <div style="color:red;"> <?=form_error('username')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="othernames" class="form-control" id="contact-email" placeholder="othername">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="contact-email" placeholder="phone">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="ailment" class="form-control" id="contact-email" placeholder="ailment">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="symptoms" class="form-control" id="contact-email" placeholder="symptoms">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" id="contact-email" placeholder="symptoms">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>

                     
                            <button type="submit" class="btn medilife-btn">  Submit Record  </button>

                            <button type="submit" class="btn medilife-btn" style="margin-left:150px;">  Doctors Response  </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
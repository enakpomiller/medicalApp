


    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6" style="margin:auto;">
                    <div class="contact-form">
                     <h5 class="mb-50"> Desk Login </h5>
                         <?php 
                           if($_SESSION['error']){
                             echo $_SESSION['error'];
                             unset($_SESSION['error']);
                            }
                          ?>
                        <form action="<?=base_url('home/desk_login')?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" id="contact-name" placeholder="username">
                                 <div style="color:red;"> <?=form_error('username')?> </div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" id="contact-email" placeholder="password">
                                <div style="color:red;"> <?=form_error('password')?></div>
                            </div>
                            <button type="submit" onclick=" makechange()" class="btn medilife-btn"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 




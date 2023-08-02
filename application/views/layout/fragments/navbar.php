        <!-- Main Header Area -->
        
        
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="<?=site_url()?>"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Desk Officer</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <!-- <a class="dropdown-item" href="<?=base_url()?>">Home</a>
                                                <a class="dropdown-item" href="">About Usx</a>
                                                <a class="dropdown-item" href="services.html">Services</a>
                                                <a class="dropdown-item" href="blog.html">News</a>
                                                <a class="dropdown-item" href="single-blog.html">News Details</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="elements.html">Elements</a> -->
                                                <a class="dropdown-item" href="<?=base_url('home/desk_login')?>"> Login</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('home/aboutus')?>">About Usx</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('home/contact')?>">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href="<?=base_url('home/doctors_reg')?>" class="btn medilife-appoint-btn ml-30">For <span>Doctors</span> Only</a>
                                    <a href="<?=base_url('home/doctors_login')?>" class="btn medilife-appoint-btn ml-30"> <span>Doctors</span> Login</a>

                                <a href="<?=base_url('home/logout')?>"  class="appoint-btn bg-dark pt-2 pb-2 pl-4 pr-4 text-white" style="position:relative;left:100px;" onclick=" return confirm(' Do you wish to logout')"> Logout </a>
                     
                                </div>
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->




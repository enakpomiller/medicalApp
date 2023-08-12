<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> <?=$this->session->fullnames?> </title>

    <!-- Favicon  -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>For Your Web Site Development Contact : <span> 080-5952-6974 Via WhatsApp</span></p>
                            <p class="text-white" style="position:relative;left:10%;">
                                <?php if($this->session->userdata('usertype')=="doctor"){?>
                                <?=$this->session->fullnames?>
                                 <?php }else{?>
                               <?=$this->session->username?>
                               <?php  } ?>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

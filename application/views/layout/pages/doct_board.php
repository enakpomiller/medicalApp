



    <section class="medilife-contact-area section-padding-100" >
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <?php if($patient_rec) { ?>
                 <h5> <?=$this->session->fullnames?> </h5>
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient Firstname</th>
                            <th scope="col">Other Names</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Ailment</th>
                            <th scope="col">Symptoms</th>
                            <th scope="col" style="float:right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter=1; foreach($patient_rec as $row){ ?>
                            <tr>
                            <th scope="row"><?=$counter++;?></th>
                            <td><?=$row->firstname?></td>
                            <td><?=$row->othernames?></td>
                            <td><?=$row->phone?></td>
                            <td><?=$row->ailment?></td>
                            <td><?=$row->symptoms?></td>
                            <td style="float:right;"> 
                                <a href="<?=base_url('home/prescribe/'.$row->id)?>" class=" medilife-btn"><i class="fa fa-pencil"></i> Prescribe </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                        <div class="container text-center">
                            <img src="<?=base_url('assets/img/bg-img/not found.png')?>" style="width:25%;position:relative;bottom:50px;">
                            <h4 style="position:relative;bottom:60px;">ooPs!!!<br> No Record Found </h4>
                            <a href="<?=site_url('/')?>" class="btn  medilife-appoint-btn" style="position:relative;bottom:60px;background:#006cff;color:white;"> Refresh </a>
                        </div>
                    </div>
                   
                    <?php } ?>
            </div>
        </div>
    </section>
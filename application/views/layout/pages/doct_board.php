

    <a href="<?=base_url('home/view_prescription/'.$row->id)?>" class=" medilife bg-dark pt-2 pb-2 pr-2 pl-2 text-white" style="position:relative;left:78%;top:70px;"><i class="fa fa-eye"></i>View Prescriptions </a>

    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="text-success text-center"> 
                <?php 
                  if($_SESSION['success']){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                  }
                ?>
            </div>
            <div class="row">
                <!-- Contact Form Area -->
                <?php if(($patient_rec)>0) { ?>
                 <h5> <?=$this->session->fullnames?> </h5>
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-center"> State </th>
                            <th scope="col">Patient Firstname</th>
                            <th scope="col">Other Names</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Ailment</th>
                            <th scope="col">Symptoms</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                               <?php $counter=1; foreach($patient_rec as $row){ ?>
                                    <tr>
                                    <th scope="row"><?=$counter++;?></th>
                                    <td><?=$this->db->get_where('prescription',array('patient_id'=>$row->id))->row()->status==1?'<div class="alert alert-success pt-1 pb-1 text-center">Result Approved</div>':'<div class="alert alert-danger pt-1 pb-1 text-center">Result Pending</div>'?></td>
                                    <td><?=$row->firstname?></td>
                                    <td><?=$row->othernames?></td>
                                    <td><?=$row->phone?></td>
                                    <td><?=$row->ailment?></td>
                                    <td><?=$row->symptoms?></td>
                                    <td style="float:right;"> 
                                    <?php if($this->db->get_where('prescription',array('patient_id'=>$row->id))->row()->status){ ?>
                                        <a href="<?=base_url('home/prescribe/'.$row->id)?>" onclick="return confirm('Prescription Has Been done for this patient, do wish to proceed?')" class=" medilife-btn"><i class="fa fa-pencil"></i> Prescribe Drug</a>
                                    <?php }else{?>
                                        <a href="<?=base_url('home/prescribe/'.$row->id)?>" class=" medilife-btn"><i class="fa fa-pencil"></i> Prescribe Drug</a>
                                     <?php }?>
                                    
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
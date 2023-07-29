



    <section class="medilife-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
               <?=$this->session->fullnames?>

               <table class="table table-striped">
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
                            <a href="<?=base_url('home/prescribe/'.$row->id)?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Prescribe </a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>

            </div>
        </div>
    </section>
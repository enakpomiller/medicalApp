



    <section class="medilife-contact-area section-padding-100" >
        <div class="container">
           <?php if($_SESSION['deleted']) { ?>
                 <div class="alert alert-success text-center"><?=$_SESSION['deleted']?></div>
                 <?php unset($_SESSION['deleted']) ?>
             <?php } ?>
            <div class="row">
                <!-- Contact Form Area -->
                <?php if($result) { ?>
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Prescription</th>
                            <th scope="col"> Dose</th>
                            <th scope="col"> Date</th>
                            <th scope="col" style="float:right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter=1; foreach($result as $row){ ?>
                            <tr>
                            <th scope="row"><?=$counter++;?></th>
                            <td><?=$row->prescription?></td>
                            <td><?=$row->dose?></td>
                            <td><?=$row->date?></td>
                            <td style="float:right;"> 
                              <a href="<?=base_url('home/delete_prescription/'.$row->prescribe_id)?>" onclick="return confirm(' Action Will Delete!')"  class="appoint bg-danger pl-2 pr-2 text-white pt-2 pb-2 text-end" onclick="return confirm('Are you sure you want to delete')"><i class="fa fa-trash"></i> Delete  </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                         <div class="container text-center">
                            <img src="<?=base_url('assets/img/bg-img/not found.png')?>" style="width:25%;position:relative;bottom:50px;">
                            <h5 style="position:relative;bottom:60px;">ooPs!!!<br> Doctor Has not prescribe drug for patient!</h5>
                            <a href="<?=site_url('home/patient_reg')?>" class="btn  medilife-appoint-btn" style="position:relative;bottom:60px;background:#006cff;color:white;"> Refresh </a>
                        </div>
                   
                    <?php } ?>
                    <a href="<?=site_url('home/doct_board')?>" class="medilife bg-dark text-white pr-4 pl-4 pt-2 pb-2"><i class="fa fa-backward"></i> Prev </a>
            </div>
        </div>
    </section>



    <script> 
    // function deleterecord(id){
    //     //   const id = $('#id'+id).val();
    //         //e.preventDefault();
    //         $.ajax({
    //             type: "POST",
    //             url: "<?php// echo base_url('home/delete_patient_rec'); ?>",
    //             data: {id},
    //                 dataType: "JSON",
    //                 success: function(data){
    //                     location.reload();
    //                 },
    //                 error: function() { alert("Error posting feed or record already exist."); }
    //             });         

    // }


</script>
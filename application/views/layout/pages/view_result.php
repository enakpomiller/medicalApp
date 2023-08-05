



    <section class="medilife-contact-area section-padding-100" >
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <?php if($result) { ?>
                    <h4> Result From Doctor </h4>
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient Firstname</th>
                            <th scope="col">Other Names</th>
                            <th scope="col"> Status </th>
                            <th scope="col" style="float:right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter=1; foreach($result as $row){ ?>
                            <tr>
                            <th scope="row"><?=$counter++;?></th>
                            <td><?=$row->firstname?></td>
                            <td><?=$row->othernames?></td>
                            <td><?=$row->status==1?'<div class="text-success">Result Approved</div>':'<div class="text-danger"> Pending </div>'?></td>
                            <td style="float:right;"> 
                             <?php if($row->status==1){  ?>
                                <a href="<?=base_url('home/print/'.$row->id)?>" class="appoint-btn bg-primary pl-4 pr-2 text-white pt-2 pb-2"><i class="fa fa-eye"></i> Get Receipt</a>
                             <?php }else{?>
                                <a href="#" class="appoint-btn bg-primary pl-4 pr-2 text-white pt-2 pb-2" onclick="alert('Sorry! This Patient Result Has Not Benn Approved By Doctor')"><i class="fa fa-eye"></i> Get Receipt</a>
                              <?php }?>
                              <a href="<?=base_url('home/delete_patient_rec/'.$row->id)?>" onclick="return confirm(' Action Will Delete!')"  class="appoint bg-danger pl-2 pr-2 text-white pt-2 pb-2 text-end"><i class="fa fa-trash"></i> Delete  </a>
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
            </div>
            <a href="<?=site_url('home/patient_reg')?>" class="medilife-appoint btn-dark pt-2 pb-2 pl-4 pr-4"><i class="fa fa-backward"></i> Prev </a>
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
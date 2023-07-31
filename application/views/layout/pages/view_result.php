



    <section class="medilife-contact-area section-padding-100" >
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                    <table class="table table-striped border-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient Firstname</th>
                            <th scope="col">Other Names</th>
                            <th scope="col" style="float:right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter=1; foreach($result as $row){ ?>
                            <tr>
                            <th scope="row"><?=$counter++;?></th>
                            <td><?=$row->firstname?></td>
                            <td><?=$row->othernames?></td>
                            <td style="float:right;"> 
              <a href="<?=base_url('home/print/'.$row->id)?>" class="btn btn-primary"><i class="fa fa-eye"></i> View </a>
              <a   class="btn btn-danger text-light" class="btn btn-danger" onclick=" return confirm(' Do you wish to delete this record?')"><i class="fa fa-trash"></i> Delete  </a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>



    <script> 
    function deleterecord(id){
        // const id = $('#id'+id).val();
            //e.preventDefault();
            $.ajax({
                type: "DELETE",
                url: "<?php //echo base_url('home/delete_patient_rec'); ?>",
                data: {id},
                    dataType: "JSON",
                    success: function(data){
                        location.reload();
                    },
                    error: function() { alert("Error posting feed or record already exist."); }
                });         

    }


</script>
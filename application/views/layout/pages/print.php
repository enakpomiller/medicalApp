



    <section class="medilife-contact-area section-padding-100 bg-light" >
            <div class="container" style="position:relative;bottom:50px;">

                 <div class="card">
                    <div class="card-header bg-dark text-center">
                    <a class="navbar-brand" href="<?=site_url('home/print/'.$this->uri->segment(3))?>"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt="Logo"></a>
                        </div>
                      <div class="card-body" id="div_print">
                         <?php foreach($printresult as $getship){?>
                                <div class="row">
                                   <div class="col-md-10">
                                       <label> <label><i class="fa fa-user"></i> Name: <?=ucfirst($getship->firstname)."  ".ucfirst($getship->othernames)?> </label><p>
                                       <label><label><i class="fa fa-home"></i> Address: <?=ucfirst($getship->address)?></label><br>
                                       <label><i class="fa fa-phone"></i> Phone : <?=$getship->phone?></label>
                                   </div>

                                   <div class="col-md-2">
                                       <label><i class="fa fa-bolt"></i>  Date </label><p>
                                       <label><?=$getship->date?>< </label>
                                       <label><i class="fa fa-hashtag"></i> Receipt No: <?="MD0".$getship->id?> </label>
                                   </div>
                                </div>
                                <h2 class="text-center mt-2"> Result </h2>
                                <table class="table" style="margin-bottom:40px;">
                                    <thead>
                                      <tr>
                                      <th> Ailment </th>
                                      <th> Symptoms </th>
                                      <th> Prescription </th>
                                      <th> Dose </th>
                                      <th> Status </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <td class='text-danger'>  <?=ucfirst($getship->ailment)?></td>
                                      <td class='text-danger'>  <?=ucfirst($getship->symptoms)?></td>
                                      <td class='text-success'>  <?=$getship->prescription?></td>
                                      <td class='text-success'>  <?=$getship->dose?></td>
                                      <td><?=$getship->status==1?'<b">Approved</b>':'<div class="text-danger">not approved</div>'?></td>
                                      </tr>

                                    </tbody>
                                 </table>
                                 <a class="navbar-brand" href="<?=site_url()?>"><img src="<?=base_url()?>assets/img/core-img/approve1.png" style="width:40%;margin-left:260%;" alt="Result Approved"></a>
                              <?php } ?>
                        </div>
                        
                           <div class="row">
                                <div class="col-md-6">
                                  <a href="<?=base_url('home/view_result')?>" class="text-white btn-dark pt-2 pb-2 pl-2 pr-2 ml-3"><i class="fa fa-backward"></i> Prevoius </a>
                               </div>
                             <div class="col-md-4">
                                <button class="btn btn-success mb-4" onClick="printdiv('div_print');" style="position:relative;left:110%;"><i class="fa fa-print"></i> Print Result </button>
                             </div>
                          </div>
                   </div>

            </div>
            </div>

    </section>



    <script language="javascript">
     function printdiv(printpage) {
         var headstr = "<html><head><title></title></head><body>";
         var footstr = "</body>";
         var newstr = document.all.item(printpage).innerHTML;
         var oldstr = document.body.innerHTML;
         document.body.innerHTML = headstr + newstr + footstr;
         window.print();
         document.body.innerHTML = oldstr;
         return false;
     }
 </script>

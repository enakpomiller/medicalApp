



    <section class="medilife-contact-area section-padding-100" >
            <div class="container">
                     <div id="div_print">
                        <h2 class="text-center"> Patient Result </h2>
                     <table class="table">
                          <thead>
                              <tr>
                                <th>First Name</th>
                                <th> Other Names </th>
                                <th> Ailment </th>
                                <th> Symptoms </th>
                                <th> Prescription </th>
                                <td> Dose </td>
                                <td> Date </td>
                             </tr>
                           </thead>
                              <?php foreach($printresult as $getship):?>

                            <tbody>
                              <tr>
                              <td>  <?=$getship->firstname?> </td>
                              <td>  <?=$getship->othernames?></td>
                              <td>  <?=$getship->ailment?></td>
                              <td>  <?=$getship->symptoms?></td>
                              <td>  <?=$getship->prescription?></td>
                              <td>  <?=$getship->dose?></td>
                              <td>  <?=$getship->date?></td>
                            </tr>
                          </tbody>
                        <?php endforeach;?>
                      </table>
                     <br>

                 </div>
                 <a href="<?=base_url('home/view_result')?>" class="text-white btn-dark pt-2 pb-2 pl-2 pr-2"><i class="fa fa-circle"></i> Prevoius </a>
                  <button class="btn btn-success" onClick="printdiv('div_print');" style="position:relative;left:76%;"><i class="fa fa-print"></i> Print Result </button>
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

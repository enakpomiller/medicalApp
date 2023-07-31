



    <section class="medilife-contact-area section-padding-100" >
        <div class="container">
            <div class="row" id="sectionToPrint">
                <!-- Contact Form Area -->
                     <div class="card w-100" style="margin:auto;">
                        <div class="card-header">
                            Result Details
                        </div>
                        <div class="card-body">
                            <div class="row">
                             <div class="col-md-2">
                                PATIENT NAME
                                </div>
                                <div class="col-md-2">
                                 AILMENT
                                </div>
                                <div class="col-md-2">
                                 SYMPTOMS
                                </div>
                                <div class="col-md-2">
                                  PRESCRIPTION
                                </div>
                                <div class="col-md-2">
                                   DOSE
                                </div>
                                <div class="col-md-2">
                                   Date
                                </div>
                           </div>

                           <?php foreach($printresult as $row){ ?>
                           <div class="row mt-2">
                             <div class="col-md-2">
                               <?=$row->firstname."  ".$row->othernames?>
                                </div>
                                <div class="col-md-2">
                                <?=$row->ailment?>
                                </div>
                                <div class="col-md-2">
                                <?=$row->symptoms?>
                                </div>
                                <div class="col-md-2">
                                <?=$row->prescription?>
                                </div>
                                <div class="col-md-2">
                                <?=$row->dose?>
                                </div>
                                <div class="col-md-2">
                                <?=$row->date?>
                                </div>
                           </div>
                           <?php } ?>

                        <br>
                        <button onclick="printSection()" class="btn btn-primary mt-4" style="position:relative;left:85%;">Print Result </button>


                     </div>
                 </div>
            </div>
        </div>
    </section>



   <script> 
        function printSection() {
            // Get the HTML content of the section to print
            var sectionContent = document.getElementById('sectionToPrint').innerHTML;

            // Open a new window
            var printWindow = window.open('', '_blank');

            // Write the section content into the new window
            printWindow.document.write('<html><head><title>Print Section</title></head><body>');
            printWindow.document.write(sectionContent);
            printWindow.document.write('</body></html>');

            // Close the document stream to ensure all content is written
            printWindow.document.close();

            // Wait for the content to be fully loaded before printing
            printWindow.onload = function() {
                printWindow.print();
            };
        }

</script>
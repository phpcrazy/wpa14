<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_invo.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Invoice</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Invoice</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">      
            <div class="col-lg-7"> 
            <h2>Invoice</h2>

            <br><br>

            
            <div class="table-responsive">
            
              <table class="table table-bordered table-hover table-striped tablesorter">
                
                <tbody>
                <thead>
                 
                </thead>
                  <tr class="warning">
                    <td>Room No.</td>
                    <td>007</td>
                    
                  </tr>
                  <tr class="active">
                    <td>Name</td>
                    <td>Mg Mg</td>
                    
                  </tr>
                  
                  <tr class="warning">
                    <td>NRC / Passport</td>
                    <td>7/bta 09766</td>
                                      
                  </tr>  
                  <tr class="active">
                    <td>Phone Number</td>
                    <td>09 765432</td>
                    
                  </tr>
                  
                  <tr class="warning">
                    <td>Check In Date</td>
                    <td>3.4.2014</td>
                                      
                  </tr>  
                  <tr class="active">
                    <td>Number of Days</td>
                    <td>2</td>
                    
                  </tr>
                  
                  <tr class="warning">
                    <td>Amount</td>
                    <td>50000</td>
                                      
                  </tr>      
                  <tr class="active">
                  <td>
                    Accessories
                   </td>
                   <td> 
                    lsflafr
                  </td>
                  </tr>
                   <tr class="warning">
                  <td>
                     Discount
                  </td>
                  <td>   
                     90%
                  </td>
                  </tr>
                  <tr class="active">
                    <td>Total</td>
                    <td>50000</td>
                                      
                  </tr>   

                </tbody>
              </table>
             
            </div>
            
              <button class="btn btn-primary" type="submit">Print</button>
              
            </div>
               

          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->









    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
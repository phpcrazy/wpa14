<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_c-o.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Check Out</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Check out</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">      
            <div class="col-lg-7"> 
            <h2>Check Out</h2>

            <br><br>

            <form role="form" action="" method="">

              <div class="form-group">
                <label>Room Number
                <input class="form-control" type="text" name="roomno" id="roomno" placeholder="Room No.">
                </label>
              </div>
            </form>
            <hr>
            <br>
            <div class="table-responsive">
            <form role="form" action="" method="">
              <table class="table table-bordered table-hover table-striped tablesorter">
                
                <tbody>
                
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
                  <tr>
                  <td>
                    Accessories
                   </td>
                   <td> 
                    <input class="form-control" type="text" name="accessories" id="accessories">
                  </td>
                  </tr>
                  <tr>
                  <td>
                     Discount
                  </td>
                  <td>   
                     <input class="form-control" type="text" name="discount" id="discount">
                  </td>
                  </tr>
                  <tr class="warning">
                    <td>Total</td>
                    <td>50000</td>
                                      
                  </tr>   

                </tbody>
              </table>
            </form> 
            </div>
            
              <button class="btn btn-primary" type="submit">Check out</button>
              <button class="btn btn-primary" type="reset">Cancel</button>
            </div>
               

          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
    <?php include 'footer.php'; ?>
    
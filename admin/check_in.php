<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_c-i.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Please Check In </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Check in</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

          <button class="btn btn-primary btn-lg" type="button">New Customer</button><br><br>

            <form role="form">

              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
                
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" name="phno" id="phno" placeholder="Enter phone number">
                
              </div>
              <button class="btn btn-primary" type="submit">Find</button>

              <hr>      
            </form>

            
            <h2>Customer Information</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                
                <tbody>
                  <tr class="active">
                    <td>NRC / Passport No.</td>
                    <td>5/bsf (N) 049356</td>
                   
                  </tr>
                  <tr class="success">
                    <td>Gender</td>
                    <td>Male</td>
                    
                  </tr>
                  <tr class="warning">
                    <td>Email</td>
                    <td>mg@gmail.com</td>                    
                  </tr>                  
                </tbody>
              </table>
            </div>
         

               <form role="form">

              <div class="form-group">
                <label>Room No.</label>
                <input class="form-control" type="text" name="room_no" id="room_no" placeholder="Enter room no.">
                
              </div>
              <div class="form-group">
                <label>Check In Date</label>
                <input class="form-control" type="text" name="checkin_date" id="checkin_date" placeholder="Enter check in date">
                
              </div>
              <div class="form-group">
                <label>Number of Days</label>
                <input class="form-control" type="text" name="dayno" id="dayno" placeholder="Enter number of days">
                
              </div>
              <button class="btn btn-primary" type="submit">Check In</button>
              <button class="btn btn-primary" type="reset">Cancel</button>
              <hr>      
            </form>

          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->









    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
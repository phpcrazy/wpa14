<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_b-e.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Booking <small>Myanmar Links</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Booking Entry</li>
            </ol>
        <h3>Booking Entry</h3>

  <form action="bookingentry.php" method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text">
    <label>Phone</label>
    <input type="text">
    <label>Room Type</label>
    <select>
    <optgroup label="Silver">
    <option>Silver</option>
    <option>SilverDouble</option>
    </optgroup>
    
    <optgroup label="Gold">
    <option>Gold</option>
    <option>GoldDouble</option>
    </optgroup>
    
    <optgroup label="Platinum">
    <option>Platinum</option>
    <option>PlatinumDouble</option>
    </optgroup>
    
    
    <optgroup label="Diamond">
    <option>Diamont</option>
    <option>DiamondDouble</option>
    </optgroup>
    
    
    </select>
    <label>Quantity</label>
    <input type="text">
    <br/>
    <br/>
    <input type="submit" value="Save" class="btn btn-info">
    <input type="reset" value="Cancel" class="btn btn-info">
    
  </form>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_b-l.php';
    ?>

       <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Room List</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard </a></li>
          <li><i class="icon-file-alt"></i> Room </li>
          <li class="active"><i class="icon-file-alt"></i> Room List </li>
            </ol>
          </div>
        </div><!-- /.row -->
  
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <h3>Recently Creating Room List....</h3>
            <ol>
              <li>S0001</li>
              <li>S0002</li>
              <li>S0003</li>
              <li>S0004</li>
              <li>S0005</li>
              <li>S0006</li>
              <li>S0007</li>
              <li>S0008</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <form role="form">
          <div class="form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
              <button type="submit" class="btn btn-default">Save</button>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <button type="reset" class="btn btn-default">Cancel</button>  
            </div>  
          </div>
          </form>
        </div>
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
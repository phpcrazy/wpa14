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
            <h1>Room Type</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard </a></li>
          <li><i class="icon-file-alt"></i> Room </li>
          <li class="active"><i class="icon-file-alt"></i> Room Type </li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Type :</label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input class="form-control">
              </div>
            </div>     
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Price :</label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input class="form-control">
              </div>
            </div>     
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Minimun No. of People :</label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input class="form-control">
              </div>
            </div>     
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Photo :</label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="file">
              </div>
            </div>     
          </form>
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
    
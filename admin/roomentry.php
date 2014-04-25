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
            <h1>Room Entry</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i></i> Dashboard </a></li>
          <li><i class="icon-file-alt"></i> Room </li>
          <li class="active"><i class="icon-file-alt"></i> Room Entry </li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Room Type :</label>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                <select class="form-control">
                  <option>Delux</option>
                  <option>Superior</option>
                  <option>Double Room</option>
                  <option>Single Room</option>
                </select>
              </div>
            </div>     
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Building No. :</label>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
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
                <label>Floor No. :</label>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
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
                  <label>Roon No. :</label>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2">
                      <label>From</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                      <input class="form-control">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                      <label>To</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                      <input class="form-control">
                    </div>
                  </div>
              </div>
            </div>
          </form>
        </div>

        <div class="row">
          <form role="form">
          <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <button type="submit" class="btn btn-default">Create</button>
            </div> 
          </div>
          </form>
        </div>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_cm-e.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Customer Entry</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard </a></li>
              <li><i class="icon-file-alt"></i> Customer </li>
              <li class="active"><i class="icon-file-alt"></i> Customer Entry </li>
            </ol> 
          </div>
        </div><!-- /.row -->

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Name :&nbsp;&nbsp;*</label>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input class="form-control" placeholder="John Smith">
              </div>
            </div>     
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Phone Number :&nbsp;&nbsp;*</label>
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
                <label>NRC / Passport :&nbsp;&nbsp;*</label>
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
              <label>Gender : </label>
            </div>
            <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12">
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked> Male
              </label>
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2"> Female
              </label>
            </div>
          </div>
          </form>
        </div>

        <div class="row">
          <form role="form">
            <div class="form-group">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <label>Email :</label>
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
    
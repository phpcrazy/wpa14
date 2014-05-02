<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_cm-l.php';
    ?>

    <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Customer list</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-bar-chart-o"></i> Customer list</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-3">

          <div class="row">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title" align="center" >  search ( in case ) </h3>
              </div>
              <div class="panel-body" align="center">
                <div class="btn-group">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"> choose one to  find  out   <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NRC</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ph no:</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Name</a></li>
                  </ul>
                </div>
                <br><br>
                <div class="form-group">
                 <input type="text" class="form-control " id="select_box" placeholder="text" >
               </div>

               <button type="submit" class="btn btn-default ">Submit</button>
             </div><!-- end of panel body-->
           </div><!-- end of panel-->
          </div><!-- end of 1st row-->
          <div class="row">
            <img src="img/question.jpg"  class="img-responsive" alt="question">
          </div><!-- end of 2nd row-->
            

         </div><!-- end of col-3-->

         <div class="col-md-9">

          <div class="panel panel-default"  align="center">
           <div class="panel-body">
       <div class="table-responsive">
            <table  class="table table-striped">
            <tr>
              <td>no:</td>
              <td>Name</td>
              <td>Ph no:</td>
              <td>NRC/Passport</td>
              <td>Gender</td>
              <td>Email</td>
              <td>Action</td>
            </tr>
            <tr>
              <td>1.</td>
              <td> U Tun</td>
              <td>01-12345</td>
              <td>12/ta wa ma(ning)21345678</td>
              <td>male</td>
              <td>tuntuntuntun@gmail.com</td>
              <td><a href="#">Edit </a>&nbsp;<a href="#">Delete</a></td>
            </tr>
            <tr>
              <td> 2.</td>
               <td> U Tun</td>
              <td>09-1234657</td>
              <td>12/ta wa ma(ning)345678789</td>
              <td>male</td>
              <td>tun12-23-34-green@gmail.com</td>
              <td><a href="#">Edit </a>&nbsp;<a href="#">Delete</a>
            <tr>
              <td>3.</td>
               <td> U Tun</td>
              <td>01-234567</td>
               <td>12/ta wa ma(ning)45656576</td>
              <td>male</td>
              <td>country-tun55555@gmail.com</td>
              <td><a href="#">Edit </a>&nbsp;<a href="#">Delete</a>
            <tr>
              <td>4. </td>
               <td> U Tun</td>
              <td>09-4567889</td>
               <td>12/ta wa ma(ning)132422222</td>
              <td>male</td>
              <td>hellotunhellotun@gmail.com</td>
            <td><a href="#">Edit </a>&nbsp;<a href="#">Delete</a>
            <tr>
              <td>5. </td>
                <td> U Tun</td>
              <td>09-3456789</td>
               <td>12/ta wa ma(ning)487657858</td>
              <td>male</td>
              <td>goodgoodwelcome@gmail.com</td>
              <td><a href="#">Edit </a>&nbsp;<a href="#">Delete</a>
            </table>

            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>

            </div>
            </div><!-- end of table responsive-->
          </div>
        </div><!-- end of col-9-->
      </div><!-- end of 1st row-->

  
 </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
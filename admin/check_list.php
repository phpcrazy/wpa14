<?php
 include 'header.php';
echo "header";
?>

  

    <?php 
     include 'slider/slider_c-l.php';
    ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Check in list </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-edit"></i> Check in list</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">      
            
            <h2>Check in list</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                
                <tbody>
                <thead>
                  <tr>
                    <th>No. <i class="fa fa-sort"></i></th>
                    <th>Name <i class="fa fa-sort"></i></th>
                    <th>Phone Number <i class="fa fa-sort"></i></th>
                    <th>NRC/Passport <i class="fa fa-sort"></i></th>
                    <th>Email <i class="fa fa-sort"></i></th>
                    <th>Room No. <i class="fa fa-sort"></i></th>
                    <th>Checkin Date <i class="fa fa-sort"></i></th>
                    <th colspan="2">Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                  <tr class="active">
                    <td>1</td>
                    <td>Mg hla</td>
                    <td>092423</td>
                    <td>5/wr (n)34546</td>
                    <td>mghal@gmail.com</td>
                    <td>45</td>
                    <td>3/3/2014</td>
                    <td><button class="btn btn-primary btn-xs" type="button">Edit</button> </td>
                    <td><button class="btn btn-primary btn-xs" type="button">Delete</button></td>
                   
                  </tr>
                  
                  <tr class="warning">
                    <td>1</td>
                    <td>Mg hla</td>
                    <td>092423</td>
                    <td>5/wr (n)34546</td>
                    <td>mghal@gmail.com</td>
                    <td>45</td>
                    <td>3/3/2014</td>
                    <td><button class="btn btn-primary btn-xs" type="button">Edit</button> </td>
                    <td><button class="btn btn-primary btn-xs" type="button">Delete</button></td>
                                      
                  </tr>                  
                </tbody>
              </table>
             <div class="btn-group">

                <button class="btn btn-default" type="button">1</button>
                <button class="btn btn-default" type="button">2</button>
                <button class="btn btn-default" type="button">3</button>
                <button class="btn btn-default" type="button">4</button>

            </div>
            </div>
         

               

          </div>
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->









    </div><!-- /#wrapper -->
    <?php include 'footer.php'; ?>
    
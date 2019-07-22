<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Hotel Reservation</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>HOTEL<span>BOOKING</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <!--  notification end -->
      </div>
      <div class="top-menu">         
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
      <li><a class="logout" href="admin.html" >Admin</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered"></h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-desktop"></i>
              <span>Homepage</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-edit"></i>
              <span>User Details</span>
              </a>
            <ul class="sub">
              <li><a href="profile.php">Profile</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments"></i>
              <span>Form</span>
              </a>
            <ul class="sub">
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <button class="btn btn-theme04" type="button" style="float: right;"><a href="index.html">Back</a></button>
              <table class="table table-striped table-advance table-hover">
                <h4><i class="" style=""></i>Available Rooms</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class=""></i>id</th>
                    <th class="hidden-phone"><i class=""></i>Room</th>
                    <th><i class=""></i>Type</th>
                    <th><i class=" "></i>Capacity</th>
                    <th><i class=""></i>Price in Kshs. per night</th>
                    <th><i class=""></i>Image</th>
                    <th><i class=""></i>Action</th>
                    <th></th>
                  </tr>                  
                    <?php
                      include("connect.php");
                         $select_query=mysqli_query($conn, "select * from book") or die(mysqli_error($conn));
                         $i=0;
                             while($rows=mysqli_fetch_array($select_query)){
                              $i++;
                              $color=($i%2==0)?"lightblue":"white";                          
                    ?> 
                    <tr bgcolor="<?php echo $color?>">
                      <td><?php echo $i;?></td>
                      <td><?php echo $rows['room_name'];?></td>
                      <td><?php echo $rows['Type'];?></td>
                      <td><?php echo $rows['Capacity'];?></td>
                      <td><?php echo $rows['Price'];?></td>
                      <td><img src="<?php echo $rows['Image']?>" class="img-responsive img-rounded" style="width:80px; height:80px;"></td>
                      <td><?php
                        echo "<a href='book.html' class='btn btn-success btn-xs'><i class='fa fa-check'>Book Room</i></a>"?>                       
                      </td>
                      <?php
                        }
                      ?>
                    </tr>

                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created by <a href="https://templatemag.com/">Rogers Kimani</a>
        </div>
        <a href="advanced_form_components.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>

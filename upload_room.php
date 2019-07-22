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
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
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
            <a class="" href="registration_database.php">
              <i class="fa fa-group"></i>
              <span>Registration</span>
              </a>
          </li>
          <li>
            <a class="" href="room_record.php">
              <i class="fa fa-home"></i>
              <span>Rooms Booked</span>
              </a>
          </li>
          <li>
            <a class="" href="dinner_record.php">
              <i class="fa fa-cutlery"></i>
              <span>Dinner</span>
              </a>
          </li>
          <li>
            <a class="" href="contact_record.php">
              <i class="fa fa-comments"></i>
              <span>Messages</span>
              </a>
          </li>
          <li>
            <a class="" href="upload_room.php">
              <i class="fa fa-key"></i>
              <span>Upload Room</span>
              </a>
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
    <section id="main-content" style="padding: 0px">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Rooms</h3>
        <div class="row mt">
      <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="form-panel">
      <form action="newupload.php" method="POST" class="form-horizontal style-form" enctype="multipart/form-data">
        <h3 style="text-align: center;">The Available Rooms</h3>
        <div class="form-group col-lg-offset-6">
          <div class="col-md-6">           
           <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Room">
           <span class="help-block" style="text-align: center;">The available room</span>
          </div>
        </div>
        <div class="form-group col-lg-offset-4">
          <div class="col-md-6">            
            <input class="form-control" type="text" id="Type" placeholder="Type of Room" name="Type">
          <span class="help-block" style="text-align: center;">Room Type</span>
          </div>          
        </div>
        <div class="form-group col-lg-offset-4">
          <div class="col-md-6">            
            <input class="form-control" type="number" id="Capacity" placeholder="Room Capacity" name="Capacity">
          <span class="help-block" style="text-align: center;">Room Capacity</span>
          </div>          
        </div>
        <div class="form-group col-lg-offset-4">
          <div class="col-md-6">            
            <input class="form-control" type="text" id="Price" placeholder="Price of Room" name="Price">
          <span class="help-block" style="text-align: center;">Price of Room in Kshs.</span>
          </div>          
        </div>
        <div class="form-group col-lg-offset-4" style="float: center;">
          <div class="col-md-6">
            <input class="" type="file" id="image" name="image">
          <span class="form-label">Room Picture</span>
          </div>          
        </div>
        <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-10">
                      <button class="btn btn-theme" type="submit" value="Upload Image">Upload</button>
                    </div>
                </div>
        </form>
                
            </div>
            <!-- /form-panel -->
          </div>
      <div class="col-lg-2"></div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <!-- /wrapper -->
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>

</body>

</html>

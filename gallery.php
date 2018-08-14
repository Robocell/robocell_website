<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
		<!-- Basic -->
		<title>ROBOCELL | Gallery</title>
		<?php include("includes/head.php");?>
	</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

     

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Start Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home</a>    
              </li>
              <li>
                <a class= "active" href="gallery.php">Robo Gallery</a>
              </li>
              <li>
                <a href="autonomous.php">Tutorials</a>
                <ul class="dropdown">
                  <li><a href="manual.php">Manual Bots</a></li>
                  <li><a href="semi_autonomous.php">Semi-Autonomous Bots</a></li>
                  <li><a href="autonomous.php">Autonomous Bots</a></li>
                </ul>
              </li>
              <li>
                <a href="workshops.php">Workshops</a>
                
              </li>
              
              <li>
                <a href="aarohan.php">Events</a>
                <ul class="dropdown">
                  <li><a href="robocity.php">Robocity '19</a></li>
                  <li><a href="aarohan.php">Aarohan '19</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.php">Home</a>
            <a class="active" href="gallery.php">Gallery</a>
          </li>
          <li>
            <a href="autonomous.php">Tutorials</a>
            <ul class="dropdown">
              <li><a href="manual.php">Manual Bots</a>
              </li>
              <li><a href="semi_autonomous.php">Semi-Autonomous Bots</a>
              </li>
              <li><a href="autonomous.php">Autonomous Bots</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="workshops.php">Workshops</a>
            
          </li>
          <li>
            <a href="aarohan.php">Events</a>
            <ul class="dropdown">
              <li><a href="robocity.php">Robocity '18</a>
              </li>
              <li><a href="aarohan.php">Aarohan '19</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
        

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><font face="Desire" size="6"> Robo Gallery </font></h2>
            
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#"><font face="Desire" size="5"> Home </font></a></li>
              <li><font face="Desire" size="5"> Robo Gallery </font></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class=" portfolio-page portfolio-4column">

          <ul id="portfolio-list" data-animated="fadeIn">
          <?php
            $con = mysqli_connect('localhost','root','','robocell',3306) or die("Server can't connect try again");
            mysqli_select_db($con,'robocell') or die("Database not found!!");
            $s = "select * from gallery";
            $result = mysqli_query($con,$s) or die(mysqli_error($con));
            while($row = mysqli_fetch_assoc($result))
            {
          ?>
            <li>
              <img src="images/robo_gallery/<?php echo $row['img_src'];?>" alt="image:<?php echo $row['name'];?>" />
            </li>
            <?php } ?>
          </ul>
         
          <!-- End Portfolio Items -->

        </div>
      </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer Section -->
			<?php include("includes/footer.php");?>
			<!-- End Footer Section -->
  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
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
            <a class="navbar-brand" href="index.html"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home</a>
                
              </li>
              <li>
                <a class= "active" href="gallery.php">Robo Gallery</a>
            
              </li>
              <li>
                <a href="#">Tutorials</a>
                <ul class="dropdown">
                  <li><a href="manual.php">Mechanical Bots</a></li>
                  <li><a href="semi_autonomous.php">Semi-Autonomous Bots</a></li>
                  <li><a href="autonomous.php">Autonomous Bots</a></li>
                </ul>
              </li>
              <li>
                <a href="workshops.php">Workshops</a>
                
              </li>
              
              <li>
                <a href="#">Events</a>
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
            <a href="#">Resources</a>
            <ul class="dropdown">
              <li><a href="manual.php">Mechanical Bots</a>
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
            <a>Events</a>
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
            <h2>Robo Gallery</h2>
            
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Robo Gallery</li>
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
            <li>
              <img src="images/robo_gallery/2.jpg" alt="" />
            </li>
            
            <li>
              <img src="images/robo_gallery/3.jpg" alt="" />
            </li>

            <li>
              <img src="images/robo_gallery/8.jpeg" alt="" />
            </li>

            <li>
            <img src="images/robo_gallery/11.jpg" alt="" />
            </li>

            <li>
              <img src="images/robo_gallery/12.png" alt="" />
            </li>

            <li>
              <img src="images/robo_gallery/13.jpg" alt="" />
            </li>

            <li>
              <img src="images/robo_gallery/14.jpg" alt="" />
            </li>

            <li>
            <img src="images/robo_gallery/16.jpg" alt="" />
            </li>
            
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

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
		<!-- Basic -->
		<title>ROBOCELL | Robocity'18</title>
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
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
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
                <a href="gallery.php">Robo Gallery</a>
                
              </li>
              <li>
                <a href="#">Resources</a>
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
                <a class="active" href="#">Events</a>
                <ul class="dropdown">
                  <li><a class="active" href="robocity.php">RoboCity '18</a></li>
                  <li><a href="aarohan.php">Aarohan '19</a></li>
                  
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        
      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>RoboCity '18</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Events: RoboCity '18</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row sidebar-page">

          <!-- Page Content -->
          <div class="col-md-9 page-content">

            <div class="tabs-section">

              

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                  <p><strong class="accent-color">RoboCity '18</strong> is a mid-year robotics competition-type event conducted by the Robo Cell of National Institute of Technology, Durgapur every year. It is usually conducted after the yearly autonomous robotics workshop and features different participating teams of various colleges of the city competing against each other to win the various prizes at stake. </p>
                  
                  
                    <div class="col-md-12">
                      <ul class="icons-list">
                        <li><i class="fa fa-check-circle"></i> It is a team event in which participants are required to build their autonomous robots in such a way so that they can optimize their approach to the problem statement and complete the set tasks in the minimum possible time while adhering to the basic bot specifications. The tasks commonly include line-following and obstacle-avoiding although new variations are added every successive year and the event continuously becomes more competitive.</li>
                        <li><i class="fa fa-check-circle"></i> The event is conducted in two rounds and the overall winners are decided on the basis of their performance in both of these. The first round is a qualifying round in which a time-based cut-off is set. All the teams finishing their task within the cut-off time qualify to participate in the final round.</li>
                        <li><i class="fa fa-check-circle"></i> The final round is more difficult than the qualifying round and the scoring system is tougher. The round features more competitive and challenging tasks that are designed such that only the teams with the best approach can win.</li>
                        <li><i class="fa fa-check-circle"></i> The top-3 teams from the final round are fit to receive the top prizes of this competition. The winners get a cash prize of deserving value as well as winning certificates. The other teams which qualify for the final round also get participating certificates for this event. </li>
                      </ul>
                    </div>
      
                  </div>
                
                
                
              </div>
              <!-- End Tab Panels -->

            </div>

            <!-- Divider -->
            <div class="hr5" style="margin-top:45px;margin-bottom:45px;"></div>

           
          </div>
          <!-- End Page Content -->


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!--RoboCity Image-->
            <div class="widget images">
              <img src="images/robocity.jpg">
            </div>

            
            <!-- Search Widget -->
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Keywords..." />
                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

          </div>
          <!--End sidebar-->


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
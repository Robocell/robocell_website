<?php
//Import PHPMailer classes into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require_once('class.phpmailer.php');

// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $nameErr = "* Name is required";
  }
  else
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $nameErr = "* Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["email"]))
  {
    $emailErr = "* Email is required";
  }
  else
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "* Invalid email format"; 
    }
  }
  if (empty($_POST["subject"]))
  {
    $subjectErr = "* Subject is required";
  }
  else
  {
    $subject = test_input($_POST["subject"]);
  }
  if (empty($_POST["message"]))
  {
    $messageErr = "* Message is required";
  }
  else
  {
    $message = test_input($_POST["message"]);
  }

  if(!(empty($name) || empty($email) || empty($subject) || empty($message)))
  {
    /*$mail = new PHPMailer(true);
    try
    {
        //Server settings
       $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;localhost';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'rcnitdgp@gmail.com';                 // SMTP username
        $mail->Password = 'robocell@123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('rcnitdgp@gmail.com', $name);
        $mail->addAddress('rcnitdgp@gmail.com', 'Robocell, CCA');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($email, $name);
        //$mail->addCC('');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('404.html');         // Add attachments
        //$mail->addAttachment('images/1.png');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "<b>$message</b>";
        $mail->AltBody = "$message";

        $mail->send();
        $name = $email = $subject = $message = "";
        $feedback = 'Thank you for the message. We will get in touch with you soon!';
    }
    catch (Exception $e)
    {
        echo 'Message could not be sent.\n';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }*/
  $con = mysqli_connect('localhost','root','','robocell',3306) or die("Server can't connect try again");
  mysqli_select_db($con,'robocell') or die("database not found");
  $s = "insert into response(name,email,subject,message) values('$name','$email','$subject','$message')";
  $result = mysqli_query($con,$s) or die(mysqli_error($con));
  if($result > 0)
  {
    $name = $email = $subject = $message = "";
    $feedback = 'Thank you for the message. We will get in touch with you soon!';
  }
  else
  {
    echo 'Message could not be sent.\n';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
 }
}
//sleep(2);
// header('location: contact.php');
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<style type="text/css">
  .error {color: #FF0000;}
</style>
<head>
  <!-- Basic -->
  <title>Robocell | Contact</title>
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
            <a class="navbar-brand" href="index.php"><img alt="" src="images/robon.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="gallery.php">Robo Gallery</a>
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
                  <li><a href="robocity.php">RoboCity '19</a></li>
                  <li><a href="aarohan.php">Aarohan '19</a></li>
                </ul>
              </li>
              <li><a class ="active" href="contact.php">Contact Us</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>

          <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="gallery.php">Gallery</a>
          </li>
          <li>
            <a href="manual.php">Tutorials</a>
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
            <a class="active" href="contact.php">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </div>
      <!-- End Header ( Logo & Naviagtion ) -->
      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCpnQ9wtP6cpF-V-C51ovsSrX_qEI5Ao3E" type="text/javascript"></script>
    </header>
    <!-- End Header -->
</div>

    <!-- Start Map -->
    <div id="map" data-position-latitude="23.5484205" data-position-longitude="87.2915227"></div>
  
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>ROBOCELL </h4><p> CCA, NIT Durgapur,West Bengal-713209, India </p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 17
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>
    <!-- End Map -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <div id="success" class="classic-title">
              <h5><?php echo $feedback;?></h5>
            </div>
            <h4 class="classic-title"><span>Contact Us</span></h4>

            <!-- Start Contact Form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contact-form" id="contact-form" method="post">
              <div class="form-group">
                <div class="controls">
                  <span><input type="text" placeholder="Name" name="name" value="<?php echo $name;?>"></span>
                  <span class="error"><?php echo $nameErr;?></span>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <span><input type="email" class="email" placeholder="Email" name="email" value="<?php echo $email;?>"></span>
                  <span class="error"><?php echo $emailErr;?></span>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <span><input type="text" class="requiredField" placeholder="Subject" name="subject" value="<?php echo $subject;?>"></span>
                  <span class="error"><?php echo $subjectErr;?></span>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea rows="7" placeholder="Message" name="message"><?php echo $message;?></textarea>
                  <span class="error"><?php echo $messageErr;?></span>
                </div>
              </div>
              <input type="submit" id="submit" class="btn-system btn-large" name="submit" value="Send">
            </form>
            <!-- End Contact Form -->

            <div>
            </div>
          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span><font size="4" color="#010000" style="Comic Sans MS" >Information </font></span></h4>

            <!-- Some Info -->
            <p> <font size="4" color="#010000" style="Desire" face="Bold">Robocell is a part of Centre for Cognitive Activities, NIT Durgapur</font></p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
            <font size="3">  
              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> <font color="#010000"> NIT Durgapur </font></li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> <font color="#010000"> rc-nitdgp.tk </font> </li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> <font color="#010000"> +91 8850136026 </font> </li> 
            </font>
            </ul>


          </div>
      </div>  
        </div>

      </div>
    <!-- End content -->


    <!-- Start Footer -->
      <?php include("includes/footer.php");?>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SHFM</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="assets/css/style1.css">
         <link rel="stylesheet" href="assets/css/slider.css">


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Top menu -->
    <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="top-navbar-1">
          <ul class="nav navbar-nav navbar-right">
          <li>

              <a href="personal_customer_data.php" >
                <i class="fa fa-home"></i><br>Previous
              </a>
              
            </li>
            
            <li>

              <a href="customer_dashboard.php" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>
            
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_customer_data.php">personal Data</a></li>
                <!--<li><a href="farm_data.php">farm data</a></li>
                <li><a href="seeding1.php">Crop Seedling Entry</a></li>-->
                
              </ul>
            </li>
              
          
            
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Requirements Entry<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="customer_request.php">Crop seeding Entry</a></li>
                <!--<li><a href="farm_data.php">Device Notifications</a></li>
                <li><a href="req_notifications.php">Request Notifications</a></li>-->
                
              </ul>
           
            </li>
            <li>
              <a href="view_customerdetails.php"><i class="fa fa-tasks"></i><br>View</a>
            </li>
             <!--<li>
              <a href="enquiry.php"><i class="fa fa-tasks"></i><br>Enquiry</a>
            </li>-->
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>Logout</a>
            </li>
            
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pricing-tables.html">Pricing tables</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

        <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <div class="dash" style="height:auto;">


<?php
//include_once("edit.html");
  if($_COOKIE['mob'])
    {}
  else
    {
      header("location:index.php");
    }
    if($_GET['id'])
    {
        $id=$_GET['id'];
    }
    $mob=$_COOKIE['mob'];
    //echo $id;
    $con=mysql_connect("localhost","root","password");
    if(!$con)
    {
      echo "can't connect to the server";
      exit;
    }
    else
    { 
      mysql_select_db("SHFM",$con); 
      if(isset($_POST["act"])and($_POST["act"]=="register"))
      {
        try
        {
          echo "helloooo";
          $addr=$_POST["address"];
          if(!isset($addr{3}) or trim($addr) == "")
          throw new Exception("Please Enter the address");
      
          
          //echo $mob;
          $id=$_GET['id'];
          
            //echo "hi...";
            $addr=$_POST['address'];
            //$age=$_POST['age'];
            $qry="update users set address='$addr' where mob_no='$mob'";
            //echo $qry;
            $query3=mysql_query($qry);

            //echo $query3;
            if($query3)
            {
              echo '<script type="text/javascript">';
              echo 'window.alert(" Succesfully updated...");';
              echo 'document.location.href="personal_customer_data.php"';
              echo '</script>';
            }
          
          
        }
        catch(Exception $e)
        {
          echo $e->getmessage();
        }
      }

      $query1="select * from users where id='$id'";
      //echo $query1;
      $sql1=mysql_query($query1);
        //$query2=mysql_fetch_array($query1);
      while($row=mysql_fetch_array($sql1))
      {
        $addr=$row["address"];
        //echo $addr;
        
      }
    
    echo'<form method="post" action="">';
    echo '<div class="full">';
    echo "<center>";
    echo "<center>";
    echo '<div class="full_header">';
    echo "..EDIT ADDRESS..";
    echo "</div>";
    echo "</center>";

    echo'<textarea name="address" >'.$addr.'</textarea>';

    echo"<br>";
    echo'<input type="image" src="images/Update3.png" alt="update" name="submit" value="submit" width="80" height="50">';
    echo '<input type="hidden" name="act" value="register">';
     echo "</center>";
     echo '</div>';
    echo"</form>";

}
?>
</div>

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 wow fadeInLeftBig">
                  <h1>We are <span class="violet">Andia</span>, a super cool design agency.</h1>
                  <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
                </div>
              </div>
          </div>
        </div>

        <!-- Services -->
        <div class="services-container">
          <div class="container">
              <div class="row">
                <div class="col-sm-3">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-eye"></i></div>
                        <h3>Beautiful Websites</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
          </div>
          <div class="col-sm-3">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><i class="fa fa-table"></i></div>
                        <h3>Responsive Layout</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-magic"></i></div>
                        <h3>Awesome Logos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><i class="fa fa-print"></i></div>
                        <h3>High Res Prints</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
              </div>
          </div>
        </div>

        <!-- Latest work -->
        <div class="work-container">
          <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn">
                    <h2>Our Latest Work</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                    <div class="work wow fadeInUp">
                        <img src="assets/img/portfolio/work1.jpg" alt="Lorem Website" data-at2x="assets/img/portfolio/work1.jpg">
                        <h3>Lorem Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="assets/img/portfolio/work1.jpg"><i class="fa fa-search"></i></a>
                            <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="work wow fadeInDown">
                        <img src="assets/img/portfolio/work2.jpg" alt="Ipsum Logo" data-at2x="assets/img/portfolio/work2.jpg">
                        <h3>Ipsum Logo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="assets/img/portfolio/work2.jpg"><i class="fa fa-search"></i></a>
                            <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="work wow fadeInUp">
                        <img src="assets/img/portfolio/work3.jpg" alt="Dolor Prints" data-at2x="assets/img/portfolio/work3.jpg">
                        <h3>Dolor Prints</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="assets/img/portfolio/work3.jpg"><i class="fa fa-search"></i></a>
                            <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="work wow fadeInDown">
                        <img src="assets/img/portfolio/work4.jpg" alt="Sit Amet Website" data-at2x="assets/img/portfolio/work4.jpg">
                        <h3>Sit Amet Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="assets/img/portfolio/work4.jpg"><i class="fa fa-search"></i></a>
                            <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container">
          <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn">
                    <h2>Testimonials</h2>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                    <div role="tabpanel">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                      Lorem ipsum dolor sit amet, consectetur..."<br>
                                      <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                      ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                      lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                      <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                      Lorem ipsum dolor sit amet, consectetur..."<br>
                                      <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                      ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                      lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                      <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                  </div>
                        </div>
                      </div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
          </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                          </p>
                          <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Email Updates</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                          <p>Enter your email and you'll be one of the first to get new updates:</p>
                          <form role="form" action="assets/subscribe.php" method="post">
                          <div class="form-group">
                            <label class="sr-only" for="subscribe-email">Email address</label>
                              <input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
                            </div>
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                        <p class="success-message"></p>
                        <p class="error-message"></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Flickr Photos</h4>
                        <div class="footer-box-text flickr-feed"></div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
                          <p><i class="fa fa-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                          <p><i class="fa fa-phone"></i> Phone: 0039 333 12 68 347</p>
                          <p><i class="fa fa-user"></i> Skype: Andia_Agency</p>
                          <p><i class="fa fa-envelope"></i> Email: <a href="">contact@andia.co.uk</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com/free-bootstrap-themes-templates/">Azmind</a>.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>
                   
		














 
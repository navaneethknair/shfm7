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
         <!--<link rel="stylesheet" href="css/style.css">-->


        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/slider.css">
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
<br>
              <a  href="personal_officer_data.php">
         <img src="assets/img/back1.png" width="50" height="50" title="previous Page" >
         </a>
        
                <br></li>
            <li>

              <a href="officer_dashboard.php" >
                <i class="fa fa-home"></i><br>Home
              </a>
              
            </li>

            
            <li class="dropdown ">
              <a href="officer_dashboard.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                <i class="fa fa-home"></i><br>Menu<span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-left" role="menu">
                <li class="active"><a href="personal_officer_data.php">Personal Data</a></li>
                <li><a href="create_events.php">Create Events</a></li>
                <li><a href="create_package.php">Create Package</a></li>
                <li><a href="create_news.php">Create News</a></li>
              </ul>
            </li>
              
          
            <li>
              <a href="farmer_notifications.php"><i class="fa fa-tasks"></i><br>Notifications</a>
            </li>
             
             <li>
              <a href="exit.php"><i class="fa fa-tasks"></i><br>Exit</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-user"></i><br>logout</a>
            </li>
 <li><a href="search.php"><img src="images/search.png" title="search" width="40" height="40">
    </a>
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
<center><div class="inside">
<?php
//include_once("edit.html");
  if($_COOKIE['mob']  && $_COOKIE['category']=="officer")
    {}
  else
    {
      header("location:index.php");
    }
    if($_GET['id']){
        $id=$_GET['id'];
    }
  $mob=$_COOKIE['mob'];
//echo $id;
  if($mob){
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
        $addr=$_POST["address"];
        if(!isset($addr{5}) or trim($addr) == "")
        throw new Exception("Please Enter the address");
      
          
          //echo $mob;
          $id=$_GET['id'];
          if(isset($_POST['submit']))
          {
            $addr=$_POST['address'];
            //$age=$_POST['age'];
            $qry="update users set address='$addr' where mob_no='$mob'";
           // echo $qry;
            $query3=mysql_query($qry);
                 if($query3==TRUE)
            //echo $query3;
                 {
                 echo '<script type="text/javascript">';
                        echo 'window.alert("successfully updated.");';
                        echo 'document.location.href="personal_officer_data.php"';
                        echo '</script>';
               }
               else
               {
                echo '<script type="text/javascript">';
                        echo 'window.alert("Updation Failed...Try again");';
                        echo 'document.location.href="personal_officer_data.php"';
                        echo '</script>';
               }
            if($query3)
            {
              header('location:personal_officer_data.php');
            }
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
    while($row3=mysql_fetch_array($sql1))
    {
      $ad=$row3["address"];
      //echo $addr;
        
    }
    echo '<br>';
     echo '<br>'; echo '<br>';echo '<br>';echo '<br>';echo '<br>';
    
    echo'<form method="post" action="">';
    echo'<textarea name="address" >'.$ad.'</textarea>';
    echo"<br>"; echo"<br>"; echo"<br>";
    echo'<input type="submit" name="submit" value="submit">';
  // echo'<input type="image" src="assets/img/submit.png" alt="Submit" title="Submit" width="200" height="50">';
    echo '<input type="hidden" name="act" value="register">';
    
    echo"</form>";

}
}
else{
     echo '<script type="text/javascript">';
          echo 'window.alert("Time out please login...");';
          echo 'document.location.href="login.html"';
          echo '</script>';
  }
?>
</div>
</div>
</center></div>
<!--</div>-->

                       
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
         <?php include_once "footer.html";?>
       
    </body>

</html>
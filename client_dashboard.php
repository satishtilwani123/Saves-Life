<?php
// Initialize the session
// Initialize the session
require_once "config.php";
session_start();
$msg ="Select email from  cusers where id = '{$_SESSION['id']}' ";
$stmt=mysqli_query($connect,$msg);
$m1 ="Select location from  cusers where id = '{$_SESSION['id']}' ";
$s1=mysqli_query($connect,$m1);
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["select"] == 1){
    header("location: checklogin.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>


  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="styling.css" rel="stylesheet">
  <link href="pace.css" rel="stylesheet">
  <link href="css/doyourself.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  
</head>

<body>
  <section id="container">
    
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a href="client_dashboard.php" class="logo"><b>Blood<span>Bank</span></b></a>
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="client_dashboard.php"><img src="img/download.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
          <li class="mt">
            <a href="client_dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
       
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Search Blood</span>
              </a>
            <ul class="sub">
              <li><a href="searchblood.php">search</a></li>
            </ul>
          </li>
			
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>See Connected Connections</span>
              </a>
            <ul class="sub">
              <li><a href="client_connected_connection.php">connections</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3 class="donor_p"><i class="fa fa-angle-right"></i>Client Portal</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row">
        
				  <div class="tab">
					  
					  
					  
					  <table>
						  
						<tr class="colors_head" style="background-color:#4d4d4d; color:white;">
										<th colspan="2"  ><h1>Client Information</h1></th>
									</tr>

  						<tr>
    						<td>Client User ID:</td>
    						<td><?php echo "   " .$_SESSION["id"];?></td>
  						</tr>
					  
  						<tr>
    						<td>Username:</td>
    						<td><?php echo "   " .$_SESSION["username"];?></td>
  						</tr>
					  
  						<tr>
    						<td>Email:</td>
    						<td><?php   
    							echo " ";
								while ($row = $stmt->fetch_assoc()) {
    							echo $row['email']."<br>";
    							}    ?></td>
  						</tr>
					  
  						<tr>
    						<td>Location:</td>
    						<td><?php   
    							echo " ";
    							while ($row = $s1->fetch_assoc()) {
    							echo $row['location']."<br>";
								}    ?></td>
  						</tr>
						  
					  </table>
					  
				  </div>
      
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  
  <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Blood Bank</strong>. All Rights Reserved
        </p>
        <div class="credits">

          Created by Blood Bank System <a href="https://templatemag.com/"></a>
        </div>
        <a href="panels.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
	
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <script src="lib/common-scripts.js"></script>
  <script src="lib/sparkline-chart.js"></script>

</body>

</html>

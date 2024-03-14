<!DOCTYPE html>
<head>
<title>Cities data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="" class="logo">
        Tiffinwala
    </a>
</div>
<!--logo end-->

    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.PNG">
                <span class="username">Developer</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="logout.php"><i class="fa fa-key"></i>Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="login.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Cities name</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chandwad.php">Chandwad</a></li>
                        <li><a href="Nashik.php">Nashik</a></li>
                        <li><a href="Pune.php">Pune</a></li>
                    </ul>
                </li>
                
                 <li>
                    <a href="contactdb.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Mess Contact</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="fa fa-user"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside><!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Nashik Mess Database
    </div>

			<center>
			<table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        
				<thead>
					<tr>
						<th>Sr no.</th>
						<th>Name</th>
                        <th>Number</th>
						<th>Email</th>
						<th>Address</th>
						<th>Mess Name</th>
                        <th>Plan</th>
                        <th>Quantity</th>
                        <th>Meal type</th>
					</tr>
				</thead>
				<?php
					include "con.php";
					$view = mysqli_query($connect,"select * from tbl_nashik") or die (mysqli_error($connect));
					
					while($asd = mysqli_fetch_array($view))
					{
						extract($asd);
					
				?>
				<tbody>
						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $name; ?></td>
                            <td><?php echo $number; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $address; ?></td>
                            <td><?php echo $mname; ?></td>
                            <td><?php echo $plan; ?></td>
                            <td><?php echo $quantity; ?></td>
							<td><?php echo $mtype; ?></td>
						</tr>
				</tbody>
				<?php } ?>
			</table>
			</center>
	    </div>
    
  </div>
</div>
</section>
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

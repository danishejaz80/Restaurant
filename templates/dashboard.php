<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Section Login</title>
	<link rel="icon" href="images/logo_S.png">
	<!-- Bootstrap -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <link href="./style.css" rel="stylesheet">

  </head>

  <body>

  	<div class="container">
  		<div class="row">

        <!-- right side coulumn -->
		<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-white"></h5>
  			</div>

			<?php include_once 'primarynavigation.php' ?>

  		</div>

  		
        <div class="col-md-9 remove-padding">
        <div class="first-header right-side-column">
          <h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:white; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
        </div>
				<!-- banner section -->
        <div class="business-header">  </div>

        
        <div class="dashboard">
					<h4>Welcome to Dashboard</h4>
				</div>

				<div class="row dashboard-counter">
					
      <div class="col-sm-4 dashboard-one" onclick="location.href='user'"  style="cursor: pointer;">
			<a href="user"><h4>ALL USER COUNT</h4></a>
			<p><?php if(isset($users)) echo count($users); ?></p>
		  </div>
		  <div class="col-sm-4 dashboard-two" onclick="location.href='menu'"  style="cursor: pointer;">
			<a href="menu"><h4>MENU COUNT</h4></a>
			<p><?php if(isset($menu)) echo count($menu); ?></p>
  		  </div>
		  <div class="col-sm-4 dashboard-three" onclick="location.href='order'"  style="cursor: pointer;">
			<a href="order" ><h4>TOTAL ORDERS PLACED</h4></a>
			<p><?php if(isset($order)) echo count($order); ?></p>			
		  </div>
          
          <div class="col-sm-4 dashboard-three" onclick="location.href='user_pending'"  style="cursor: pointer;">
            <a href="user_pending"><h4>PENDING USER COUNT</h4></a>
            <p><?php if(isset($user_pnd)) echo count($user_pnd); ?></p>
          </div>
          
          <div class="col-sm-4 dashboard-two" onclick="location.href='menuitem'"  style="cursor: pointer;">
            <a href="menuitem"><h4>MENU ITEM COUNT</h4></a>
			      <p><?php if(isset($menuitem)) echo count($menuitem); ?></p>
          </div> 
          <div class="col-sm-4 dashboard-one"  onclick="location.href='complaints'"  style="cursor: pointer;">
            <a href="complaints"><h4>COMPLAINTS COUNT</h4></a>
            <p><?php if(isset($complaints)) echo count($complaints); ?></p>
          </div>
        </div>

  			</div>
  		</div>

  	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="./bootstrap/js/bootstrap.min.js"></script>
  	<!-- <script src="./bootstrap/js/npm.js"></script> -->
  	<script src="./bootstrap/js/js.js"></script>

  </body>
  </html>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Section Login</title>

	<!-- Bootstrap -->
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <link href="../../style.css" rel="stylesheet">

      

</head>

  <body>

  	<div class="container">

  		<div class="row">

  			<div class="col-md-12 remove-padding">	
  			<div class="first-header third-background">
  				<h4 class="add-margin-left"><strong class="color-white">Reset a new password for this app</strong></h4>
  			</div>


  			<!-- User registration form -->
  			<div class="row add-margin-top">
  				<div class="col-md-12">
  				    <form method="POST" action="">

              <p>New password for <?php if(isset($email)) echo $email; ?> account</p>
  				    
  				    <div> <input type="hidden" name="email" class="form-control" required id="inputEmail" value="<?php if(isset($email)) echo $email; ?>"></div>

  				    <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPassword">Match password:</label></div>
  				    <div class="col-md-8 bottom-mix"> <input type="password" name="password" class="form-control" required id="inputPassword" placeholder="Password">
  				         <button type="submit" class="btn btn-default button-position color-white">Reset password</button> </div>
              </form>
  			    </div>
  		    </div>
  		</div>

    </div>

    </div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../../bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>
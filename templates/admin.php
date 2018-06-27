
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Section Login</title>

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
  			<div class="col-md-3">

  			</div>
  			<div class="col-md-6 border-line second-background">

            <div class="login-wrapper">
            <h3 class="add-margin-bottom">Admin Login Section</h3>

  				<form method="POST" action="dashboard">
  					<div class="form-group">
  						<label for="exampleInputEmail" class="form-label">Email</label>
  						<input type="text" name="email" class="form-control form-control-override"  id="exampleInputEmail" placeholder="email">
  					</div>
  					<div class="form-group">
  						<label for="exampleInputPassword1" class="form-label">Password</label>
  						<input type="password" name="password" class="form-control form-control-override" id="exampleInputPassword1" placeholder="password">
              <p class="color-yellow add-margin-top-small"> <?php if(isset($error)) echo $error?> </p>
  					</div>
  					<button type="submit" class="btn btn-default button-position color-white">Sign in</button>
  				</form>
  				<span class="clear-overrap"></span>

  				<p class="add-margin-top" style="font-size:12px;">Administration Authentication System</p>
  			</div>

  			</div>
  			<div class="col-md-3">

  			</div>
  		</div>

  	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>

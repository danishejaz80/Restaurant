<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Section Login</title>

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  <link href="../style.css" rel="stylesheet">

</head>

  <body>

  	<div class="container">


  		<div class="row">
  			<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-red"></h5>
  			</div>

            <?php include_once 'secondarynavigation.php' ?>

  			</div>


				<div class="col-md-9 remove-padding">
					<div class="first-header right-side-column">
	  				<h4 class="add-margin-left"><strong class="color-white">Admin Section</strong> <span style="color:#e74c3c; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
	  			</div>

					<!-- banner section -->
	        <div class="business-header">  </div>


  			<!-- Add user details -->
  			<div class="row pad-left">
  				<div class="col-md-12 add-margin-top">
  				   <div class="panel panel-primary first-background">
                          <div class="panel-body color-white"><strong>Delete user details from database</strong></div>
                    </div>
  				</div>
  			</div>

  			<!-- User deletion -->

        <div class="row pad-left">
          <div class="col-md-12">

          <?php if(isset($user)){ ?>
            <div class="delete-user">

               <h3 class="color-white"> Are you sure you want to delete <strong style="color:#2c3e50;"> <?php echo $user->; ?> </strong> ? from database</h3>

            <form method="POST" action="">
              <input type="hidden" name="id" value="<?php if(isset($edit)) echo $edit->id; ?>">
              <button type="submit" class="btn btn-default button-position color-white add-margin-left">Delete user</button>
              <button id="cancel-delete" type="button" class="btn btn-default button-position color-white">Cancel</button>
              <br/><br/>
            </form>

          </div>

          <?php }

          if(isset($deleted)){ ?>
                <!-- Deleted message -->
                <div class="deleted"> <h3> Successfully deleted!!!</h3> </div>

          <?php } ?>

          </div>

        </div>

        <!-- End of delete section -->

  			</div>
  		</div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/js.js"></script>

  </body>
  </html>

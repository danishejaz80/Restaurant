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
  				<h5 class="text-center color-white"></h5>
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
                <div class="panel-body  color-white">Edit user details</div>
            </div>
  				</div>
  			</div>

  			<!-- User registration form -->
  			<div class="row pad-left">
  				<div class="col-md-12">
            <form method="POST" action="">

  				    <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputUsername">Username:</label></div>
              <input type="hidden" name="id" value="<?php if(isset($edit)) echo $edit->id; ?>">
  				    <div class="col-md-8 mix"> <input type="text" name="username" class="form-control" required id="inputUsername" value="<?php if(isset($edit)) echo $edit->username; ?>"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputEmail">Email:</label></div>
              <div class="col-md-8 mix"> <input type="email" name="email" class="form-control" required id="inputEmail" value="<?php if(isset($edit)) echo $edit->email; ?>"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputEmail">Address:</label></div>
              <div class="col-md-8 mix"> <input type="text" name="address" class="form-control" required id="inputFirstName" value="<?php if(isset($edit)) echo $edit->address; ?>"></div>

							<div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputEmail">Phone Number:</label></div>
              <div class="col-md-8 mix"> <input type="text" onkeypress="return isNumber(event)" maxlength="11" name="phone" class="form-control" required id="inputFirstName" value="<?php if(isset($edit)) echo $edit->phone_number; ?>"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputEmail">User Type:</label></div>
              <div class="col-md-8 mix"> 
                <select name="type" class="form-control" required id="type">
                <option value="Student" <?php if($edit->type=="Student") echo " selected";  ?> >
                  Student
                </option> 
                <option value="Faculty" <?php if($edit->type=="Faculty") echo " selected";  ?> >
                  Faculty
                </option> 
              </select> 
              </div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPassword">Account Balance:</label></div>
              <div class="col-md-8 bottom-mix"> <input type="text" onkeypress="return isNumber(event)" maxlength="5" name="balance" class="form-control" required id="inputPassword" value="<?php if(isset($edit)) echo $edit->balance; ?>"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPassword">Amount Borrow:</label></div>
              <div class="col-md-8 bottom-mix"> <input type="text" onkeypress="return isNumber(event)" maxlength="4" name="borrow" class="form-control" required id="inputPassword" value="<?php if(isset($edit)) echo $edit->borrow; ?>">


              </div>
              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPassword">User Status:</label></div>
              <div class="col-md-8 bottom-mix">
              <select name="status" class="form-control" required id="status">
                <option value="1" <?php if($edit->status=='1') echo " selected";  ?> >
                  Active
                </option> 
                <option value="0" <?php if($edit->status=='0') echo " selected";  ?> >
                  Inactive
                </option> 
              </select> 
                <button type="submit" class="btn btn-default button-position right-side-column color-white">Update user</button>

              </div>

            </form>
  				</div>
  			</div>

  			</div>
  		</div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>

  </body>
  </html>

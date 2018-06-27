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
  			<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-red"></h5>
  			</div>

				<?php include_once 'primarynavigation.php' ?>

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
                          <div class="panel-body color-white">Add new user form</div>
                    </div>
  				</div>
  			</div>


  			<!-- User registration form -->
  			<div class="row pad-left">
  				<div class="col-md-12">
  				    <form id="form1" method="POST" action="adduser">

  				    <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputUsername">Full Name:</label></div>
  				    <div class="col-md-8 mix"> <input type="text" onchange="validateusername();" name="username" class="form-control" required id="inputUsername" placeholder="Full Name" ></div>

  				    <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputEmail">University Email:</label></div>
  				    <div class="col-md-8 mix"> <input type="email" name="email" class="form-control" required id="inputEmail" placeholder="XXXXXXXX-XXX@uog.edu.pk"></div>

  				    <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPassword">Password:</label></div>
  				    <div class="col-md-8 bottom-mix"> <input type="password" name="password" class="form-control" required id="inputPassword" placeholder="Password"></div>

							<div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputDepartment">Department:</label></div>
	  				  <div class="col-md-8 mix"> <input type="text" name="department" class="form-control" required id="inputDepartment" placeholder="Department"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputSemester">Semester:</label></div>
              <div class="col-md-8 mix"> <input type="text" name="semester" class="form-control" required id="inputSemester" placeholder="Semester"></div>

							<div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPhoneNumber">Phone Number:</label></div>
							<div class="col-md-8 mix"> <input type="text" onkeypress="return isNumber(event)" maxlength="11" name="phone" class="form-control" required id="inputName" placeholder="03XXXXXXXXX"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputType">User Type:</label></div>
              <div class="col-md-8 mix"> 
                <select name="type" class="form-control" required id="type">
                <option value="Student"  > 
                  Student
                </option> 
                <option value="Faculty">
                  Faculty
                </option> 
              </select> 
              </div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPhoneNumber">Account Balance:</label></div>
              <div class="col-md-8 mix"> <input name="balance" class="form-control" type="text" onkeypress="return isNumber(event)" maxlength="5" required id="inputName" placeholder="User Account Balance"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="inputPhoneNumber">Borrow Amount:</label></div>
              <div class="col-md-8 mix" style="border-bottom: 1px solid"  > <input type="text" onkeypress="return isNumber(event)" maxlength="4" name="borrow" class="form-control" required id="inputName" placeholder="User Amount Borrowed"></div>

              <div class="col-md-4 user-row text-right"><label class="form-title-adjustment" for="status">User Status:</label></div>
              <div class="col-md-8 mix" style="border-bottom: 1px solid"  > 
              <select name="status" class="form-control" required id="status">
                <option value="1"  > 
                  Active
                </option> 
                <option value="0">
                  Inactive
                </option> 
              </select> 

							<button type="submit" class="btn btn-default button-position color-white">Add new user</button>
              </form>
  			    </div>
  		    </div>
  		</div>

    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
      
      function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

  



</script>>
  </body>
  </html>

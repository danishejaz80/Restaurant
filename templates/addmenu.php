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

        <!-- right side coulumn -->
				<div class="col-md-3 remove-padding right-side-column">
  			<div class="first-header">
  				<h5 class="text-center color-white"></h5>
  			</div>

            <?php include_once 'primarynavigation.php' ?>

  			</div>

  			<div class="col-md-9 remove-padding">
  			<div class="first-header right-side-column">
  				<h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:red; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
  			</div>

				<!-- banner section -->
        <div class="business-header">  </div>

        <!-- Page title -->
        <div class="row add-margin">
          <div class="col-md-12">
            <h3 style="color:white"> Add Main Recipe Categories Form </h3>
          </div>
        </div>

        <!-- User registration form -->
        <div class="row pad-left">
          <div class="col-md-12">
            <div class="error-message" style="color:red"><?php if(isset($message)) echo $message; ?></div>
              <form method="POST" action="addmenu" enctype="multipart/form-data">

              <table class="table  table-bordered">
              <tbody>
                <tr>
                  <td>Menu category name:</td>
                  <td><input type="text" name="menu" class="form-control mform-field" required id="inputName" placeholder="Menu category name"></td>
                </tr>
                <tr>
                  <td>Select image to upload:</td>
                  <td><input type="file" class="form-control mform-field" name="fileToUpload" id="fileToUpload"></td>
                </tr>
                <tr>
                  <td>Menu status:</td>
                  <td> 
                    <select name="status" class="mform-field form-control" required id="status">
                      <option value="1"> 
                        Active
                      </option> 
                      <option value="0">
                        Inactive
                      </option> 
                    </select> 
                  </td>
                </tr>

              </tbody>
            </table>
              <button type="submit" class="btn btn-default button-position color-white">Add new menu category</button> </div>
              </form>
            </div>
          </div>

  			</div>
  		</div>

  	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="./bootstrap/js/bootstrap.min.js"></script>
  	<script src="./bootstrap/js/js.js"></script>

  </body>
  </html>

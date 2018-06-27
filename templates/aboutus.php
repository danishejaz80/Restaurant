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

        <!-- 
          <div class="edit-button-wrapper">
            <a class="btn btn-default second-background color-white" href="editaboutus" role="button">Edit Restaurant Information</a>
          </div> -->

          <div class="row add-margin ">
            <div class="col-md-12">
              <a href="editaboutus">
                <button  type="submit" class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Details </button></a>
            </div>
          </div>

        <div class="row">
          <!-- Left colums -->

          <?php
          if(isset($restaurant)){ ?>

            <div class="col-md-7 pad-left para-wrap">

              <h3 class="color-yellow"> <?php echo $restaurant->name; ?></h3>
              <p><?php echo $restaurant->description; ?></p>

            </div>

            <!-- Right side column -->
            <div class="col-md-5 pad-left para-wrap">
              <h4 class="sub-titles color-yellow"> Contact Information </h4>
              <p>Address: <?php echo $restaurant->address; ?></p>
              <p>Phone number: <?php echo $restaurant->phone; ?></p>
              <p>Email Address: <?php echo $restaurant->email; ?></p>

              <h4 class="sub-titles color-yellow">Opening Time</h4>
              <p><?php echo $restaurant->opening_time; ?></p>

              <h4 class="sub-titles color-yellow">Closing Time</h4>
              <p><?php echo $restaurant->closing_time; ?></p>
            </div>

        <?php  }else{

               echo 'Restaurant information is not yet added. Click the button below to add restaurant details';
          }
        ?>






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

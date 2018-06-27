<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Section Login</title>

	<!-- Bootstrap -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./bootstrap/css/semantic.min.css" rel="stylesheet">
	<link href="./bootstrap/css/dataTables.semanticui.min.css" rel="stylesheet">


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
  				<h4 class="add-margin-left"><span style="color:#e74c3c; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
  			</div>

				<!-- banner section -->
        <div class="business-header">  </div>

    	    <h3 style="color:white" class="text-center add-margin-top " > Complaints </h3>

  			<!-- table section -->
  			<div class="row add-margin-top pad-left">
  				<div class="col-md-12">



  				   <table id="table1" class="table ui celled" >
  				       <thead>
  				           <tr style="background-color: #1674c3;">
                                <th>Sr. No</th>
								<!-- <th>User ID</th> -->
                                <th>User Name</th>
                                <th>Complaint Title</th>
                                <th>Complaint</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php

                        if(isset($complaints)){
                        	foreach($complaints as $complaint){ 
                        		?>
                        		  <tr>
									<td><?php if(isset($complaint->complaint_id)) echo $complaint->complaint_id; ?></td>
                                     <!-- <td><?php //if(isset($complaint->user_id)) echo $complaint->user_id; ?></td> -->
                                    <td><?php if(isset($complaint->get_complaint_user($complaint->user_id)[0]['username'])) echo $complaint->get_complaint_user($complaint->user_id)[0]['username']; ?></td>
                                    <td><?php if(isset($complaint->name)) echo $complaint->name; ?></td>
									<td><?php if(isset($complaint->complain)) echo $complaint->complain; ?></td>
                                    
                              </tr>
                        <?php
                        	}
                        }
                        ?>
                        </tbody>

                   </table>
  				</div>
  			</div>

  			</div>
  		</div>

  	</div>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="./bootstrap/datatable/jquery-3.3.1.js"></script>
  	<script src="./bootstrap/datatable/semantic.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  	<!-- Include all compiled plugins (below), or include individual files as needed -->

  	<script src="./bootstrap/js/bootstrap.min.js"></script>
  	<script src="./bootstrap/js/npm.js"></script>
  	<script src="./bootstrap/js/js.js"></script>
  	<script src="./bootstrap/datatable/jquery.dataTables.min.js"></script>
  	<script src="./bootstrap/datatable/dataTables.semanticui.min.js"></script>


  	<script type="text/javascript">
  		$(document).ready(function() {
    	$('#table1').DataTable();
} );
  	</script>>

  </body>
  </html>

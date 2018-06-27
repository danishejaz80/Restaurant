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
  				<h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:red; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
  			</div>

				<!-- banner section -->
				<div class="business-header">  </div>

        <!-- Page title -->
        <div class="row add-margin">
          <div class="col-md-12">
            <h3 style="color:white" class="text-center" > Menu Items </h3>
          </div>
        </div>

        <!-- Add user button -->
	<div class="row add-margin">
    <div class="col-md-12">
		  <a href="addmenuitem">
		    <button type="submit" class="btn btn-primary btn-lg">
		    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Add menu item </button>
      </a>
		</div>
	</div>

	<!-- table section -->
	<div class="row pad-left">
    <div class="col-md-12">
      <table id="table1" class="table ui celled">
        <thead>
          <tr>
            <th>Number</th>
            <th>Menu Item Name</th>
            <th style="width: 80px;">Image</th>
            <th>Menu Category</th>
            <th>Menu Item Options</th>
            <th>Action</th>
          </tr>
        </thead>
    
        <tbody>
          <?php
            if(isset($menu_item)){
            	foreach($menu_item as $recipe){ ?>
          		  <tr>
                  <td><?php if(isset($recipe->menu_item_id)) echo $recipe->menu_item_id; ?></td>
                  <td><?php if(isset($recipe->item_name)) echo $recipe->item_name; ?></td>
                  <td> <img height="50" width="60" src="<?php if(isset($recipe->item_picture))  echo $recipe->item_picture;?>" /> </td>

                  <td><?php if(isset($recipe->menuRelationship->menu_name)) echo $recipe->menuRelationship->menu_name; ?></td>
                  <td><?php if(isset($recipe->item_options)) echo $recipe->item_options; else echo "None"; ?></td>
                  <td>
                    <a href="editmenuitem/<?php if(isset($recipe->menu_item_id)) echo $recipe->menu_item_id ?>"><span class="glyphicon glyphicon-edit color-white" aria-hidden="true"></span></a>
                    <a href="deletemenuitem/<?php if(isset($recipe->menu_item_id)) echo $recipe->menu_item_id ?>"><span class="glyphicon glyphicon-trash color-red mDelete" aria-hidden="true"></span></a>
                    <a title="<?php if($recipe->status=='1') echo "Menu Available"; else echo "Menu Not Available";  ?>"><span class="<?php if($recipe->status=='1') echo "glyphicon glyphicon-ok color-green"; else echo "glyphicon glyphicon-remove color-red";  ?>" aria-hidden="true"></span></a>
                      </td>
                </tr> <?php } } ?>
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

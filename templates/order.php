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

				<?php include_once 'primarynavigation.php'; ?>

  			</div>

  			<div class="col-md-9 remove-padding">
  			<div class="first-header right-side-column">
  				<h4 class="add-margin-left"><strong class="color-white"></strong> <span style="color:red; font-size: 14px; float:right;"> <?php $today = date("F j, Y"); echo $today; ?></span></h4>
  			</div>

        <!-- banner section -->
        <div class="business-header">  </div>

        <div class="row dashboard-counter add-margin-top">
          
          <div class="col-sm-4 dashboard-one-s" onclick="location.href='order_pending'"  style="cursor: pointer;">
            <a href="order_pending"><h4>PENDING ORDERS COUNT</h4></a>
            <p id="pendng_orders_count"><?php if(isset($order_pnd)) echo count($order_pnd); ?></p>
          </div>
          <div class="col-sm-4 dashboard-two-s" onclick="location.href='order_processing'"  style="cursor: pointer;">
            <a href="order_processing"><h4>PROCESSING ORDERS COUNT</h4></a>
            <p id="order_inProcess_count"><?php if(isset($order_pro)) echo count($order_pro); ?></p>
          </div>
          <div class="col-sm-4 dashboard-three-s" onclick="location.href='order_completed'"  style="cursor: pointer;">
            <a href="order_completed" ><h4>COMPLETED ORDERS COUNT</h4></a>
            <p  id="order_completed_count"><?php if(isset($order_cmp)) echo count($order_cmp); ?></p>     
          </div>
          <div class="col-sm-4 dashboard-four-s" onclick="location.href='order_canceled'"  style="cursor: pointer;">
            <a href="order_canceled"><h4>CANCELED ORDERS COUNT</h4></a>
            <p id="orders_canceled_count"><?php if(isset($order_cnc)) echo count($order_cnc); ?></p>
          </div>
          
        </div>




        <!-- Tabulation of the orders -->
        <div class="order-status pad-left para-wrap">

        <h3 class="color-white add-margin-top text-center">All Order Request</h3>



        <table id="table1" class="table ui celled table-bordered">
          <thead>
            <tr style="background-color: #1674b3;">
              <th>Status </th>
              <th>Date </th>
              <th>Order ID</th>
              <th>Customer</th>
              <th>Pay by</th>
              <th>Total</th>
              <th>View Invoice</th>
            </tr>
          </thead>
          <tbody>
            <?php
             if(isset($order)){
               foreach($order as $singleOrder){
                 ?>
                 <tr>
                   <!-- <td><?php echo $singleOrder->status; ?> </td> -->
                   
                   <td>
                    <select name="status" onchange=" " class="mform-field form-control" required id="status">
                      <option value="1" <?php if($singleOrder->status=="1") echo " selected" ?> > 
                        Order has been placed
                      </option> 
                      <option value="2" <?php if($singleOrder->status=="2") echo " selected" ?> >
                        Order in process
                      </option> 
                      <option value="3" <?php if($singleOrder->status=="3") echo " selected" ?> >
                        Order completed
                      </option> 
                      <option value="0" <?php if($singleOrder->status=="0") echo " selected" ?> >
                        Order canceled
                      </option> 
                    </select> 
                   </td>
                   <td><?php echo $singleOrder->order_date; ?> </td>
                   <td><?php echo $singleOrder->order_id; ?></td>

                   <td><?php if(isset($singleOrder->get_user($singleOrder->user_id)[0]['username'])) echo $singleOrder->get_user($singleOrder->user_id)[0]['username']; ?></td>
                   <td><?php echo $singleOrder->payment_method; ?></td>
                   <td><?php echo $singleOrder->order_price . " PKR"; ?></td>
                   <td><a class="color-yellow" href="singleorder/<?php echo $singleOrder->order_id ?>">View Invoice</a></td>
                 </tr>
        <?php
             }
        }else{
           echo '<h3 class="color-yellow"> You have no order yet. Kindly place an order to experience a taste</h3>';
        }
        ?>
            

          </tbody>
        </table>

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
      setInterval(function(e){
          $.ajax({
            type: 'POST',
            url: 'get_stats.php?query=orders',
            success: function(data){
              //console.log(data);
              var obj = JSON.parse(data);
              //console.log(obj);
              $('#pendng_orders_count').html(obj.pending_orders);
              $('#orders_canceled_count').html(obj.canceled_orders);
              $('#order_inProcess_count').html(obj.order_inProcess);
              $('#order_completed_count').html(obj.order_completed);
            }
          });
      }, 3000);
} );
      </script>

  </body>
  </html>

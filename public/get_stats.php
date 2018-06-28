<?php  
	
	$link = mysqli_connect('localhost','root','','resturant');
		
	$query = isset($_GET['query']) ? $_GET['query'] : '';

	if($query == 'dashboard'){

		$qry_users = "select count(id) as users from food_user";
		$result = mysqli_query($link,$qry_users);
		$users = mysqli_fetch_assoc($result);

		$qry_pending_users = "select count(id) as pending_users from food_user where status=0";
		$res_pending_users = mysqli_query($link,$qry_pending_users);
		$pending_users = mysqli_fetch_assoc($res_pending_users);

		$qry_orders_placed = "select count(status) as orders_placed from food_order ";
		$res_orders_placed= mysqli_query($link, $qry_orders_placed);
		$placed_orders= mysqli_fetch_assoc($res_orders_placed);
		
		$qry_complaints = "select count(complaint_id) as complaints from food_complaint";
		$res_complaints = mysqli_query($link,$qry_complaints);
		$complaints = mysqli_fetch_assoc($res_complaints);

		$data_array = array( 'total_users' => $users['users'],
			'pending_users' => $pending_users['pending_users'],
			'placed_orders' => $placed_orders['orders_placed'],
			'complaints' => $complaints['complaints']
		);
		
		echo json_encode($data_array);
	}
	if($query == 'orders'){

		$qry_orders_pending = "select count(status) as orders_pending from food_order where status=1";
		$res_orders_pending= mysqli_query($link, $qry_orders_pending);
		$pending_orders= mysqli_fetch_assoc($res_orders_pending);

		$qry_canceled_orders = "select count(status) as canceled_orders from food_order where status=0";
		$res_canceled_orders= mysqli_query($link, $qry_canceled_orders);
		$canceled_orders= mysqli_fetch_assoc($res_canceled_orders);

		$qry_order_inProcess = "select count(status) as order_inProcess from food_order where status=2";
		$res_order_inProcess= mysqli_query($link, $qry_order_inProcess);
		$order_inProcess= mysqli_fetch_assoc($res_order_inProcess);

		$qry_order_completed = "select count(status) as order_completed from food_order where status=3";
		$res_order_completed= mysqli_query($link, $qry_order_completed);
		$order_completed= mysqli_fetch_assoc($res_order_completed);

		$orders_aray = array('pending_orders'=>$pending_orders['orders_pending'],
			'canceled_orders' => $canceled_orders['canceled_orders'],
			'order_inProcess' => $order_inProcess['order_inProcess'],
			'order_completed' => $order_completed['order_completed']
		);
		echo json_encode($orders_aray);
	}

?>
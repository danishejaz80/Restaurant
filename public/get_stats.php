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

		$qry_orders_placed = "select count(status) as orders_placed from food_order where status='Order has been placed'";
		$res_menu_item= mysqli_query($link, $qry_orders_placed);
		$placed_orders= mysqli_fetch_assoc($res_menu_item);
		
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

?>
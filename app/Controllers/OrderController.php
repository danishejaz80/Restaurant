<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Order;

// $array = array("updated" => true, "message" => "Value Updated");
// echo json_encode($array);
// [{"updated": true },{"message" " Value updated"}]

class OrderController extends Controller{

  public function viewOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::all();
    $order_pnd = Order::where('status', "Order has been placed")->get();
    $order_pro = Order::where('status', "Order in process")->get();
    $order_cmp = Order::where('status', "Order completed")->get();
    $order_cnc = Order::where('status', "Order canceled")->get();

    return $this->view->render($response, 'order.php', array('order' => $order, 'order_pnd' => $order_pnd, 'order_pro' => $order_pro, 'order_cmp' => $order_cmp, 'order_cnc' => $order_cnc));
  }

  public function viewPendingOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::where('status', "Order has been placed")->get();
    $order_pnd = Order::where('status', "Order has been placed")->get();
    $order_pro = Order::where('status', "Order in process")->get();
    $order_cmp = Order::where('status', "Order completed")->get();
    $order_cnc = Order::where('status', "Order canceled")->get();

    return $this->view->render($response, 'order.php', array('order' => $order, 'order_pnd' => $order_pnd, 'order_pro' => $order_pro, 'order_cmp' => $order_cmp, 'order_cnc' => $order_cnc));
  }

  public function viewProcessingOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::where('status', "Order in process")->get();
    $order_pnd = Order::where('status', "Order has been placed")->get();
    $order_pro = Order::where('status', "Order in process")->get();
    $order_cmp = Order::where('status', "Order completed")->get();
    $order_cnc = Order::where('status', "Order canceled")->get();

    return $this->view->render($response, 'order.php', array('order' => $order, 'order_pnd' => $order_pnd, 'order_pro' => $order_pro, 'order_cmp' => $order_cmp, 'order_cnc' => $order_cnc));
  }

  public function viewCompletedOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::where('status', "Order completed")->get();
    $order_pnd = Order::where('status', "Order has been placed")->get();
    $order_pro = Order::where('status', "Order in process")->get();
    $order_cmp = Order::where('status', "Order completed")->get();
    $order_cnc = Order::where('status', "Order canceled")->get();

    return $this->view->render($response, 'order.php', array('order' => $order, 'order_pnd' => $order_pnd, 'order_pro' => $order_pro, 'order_cmp' => $order_cmp, 'order_cnc' => $order_cnc));
  }

  public function viewCanceledOrders($request, $response){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }

    $order = Order::where('status', "Order canceled")->get();
    $order_pnd = Order::where('status', "Order has been placed")->get();
    $order_pro = Order::where('status', "Order in process")->get();
    $order_cmp = Order::where('status', "Order completed")->get();
    $order_cnc = Order::where('status', "Order canceled")->get();

    return $this->view->render($response, 'order.php', array('order' => $order, 'order_pnd' => $order_pnd, 'order_pro' => $order_pro, 'order_cmp' => $order_cmp, 'order_cnc' => $order_cnc));
  }



  public function viewSingleOrders($request, $response, $args){
    if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }
    $id = $args['id'];
    $singleOrder = Order::where('order_id', $id)->first();
    return $this->view->render($response, 'singleorder.php', array('order' => $singleOrder));
  }

}

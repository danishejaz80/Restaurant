<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Restaurant;


class HomeController extends Controller{

	public function index($request, $response){
		return $this->view->render($response, 'admin.php');
	}

	public function reset($request, $response){
		return $this->view->render($response, 'reset.php');
	}

	public function success($request, $response){
		return $this->view->render($response, 'success.php');
	}

	public function viewMobileHomePage($request, $response){
		$restaurant = Restaurant::where('restaurant_id', 1)->first();
		return $this->view->render($response, 'mobilerestuarant.php', array('restaurant' => $restaurant));
	}

	public function aboutusInformation($request, $response){
		if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
    }
		$restaurant = Restaurant::where('restaurant_id', 1)->first();
		return $this->view->render($response, 'aboutus.php', array('restaurant' => $restaurant));
	}

	public function editAboutusInformation($request, $response){

		if(!$this->auth->check()){
     return $response->withRedirect($this->router->pathFor('home'));
 	   }

		if($request->isGet()){
			$restaurant = Restaurant::where('restaurant_id', 1)->first();
    	    return $this->view->render($response, 'editaboutus.php', array('restaurant' => $restaurant));
    	}

		if($request->isPost()){

			$name = $request->getParam('name');
			$description = $request->getParam('description');
			$address = $request->getParam('address');
			$phone = $request->getParam('phone');
			$email = $request->getParam('email');
			$opening_time = $request->getParam('opening_time');
			$closing_time = $request->getParam('closing_time');


			$rowCounter = Restaurant::where('restaurant_id', 1)->first()->count();

			if($rowCounter > 0){
				Restaurant::where('restaurant_id', 1)->update(['name' => $name, 'description' => $description, 'address' => $address, 'phone' => $phone, 'email' => $email, 'opening_time' => $opening_time, 'closing_time' => $closing_time]);
			}else{
				$restaurant_information = new Restarant(array('name' => $name, 'description' => $description, 'address' => $address, 'phone' => $phone, 'email' => $email, 'opening_time' => $opening_time, 'closing_time' => $closing_time));
				$restaurant->save();
			}
			return $this->view->render($response, 'editaboutus.php', array('message' => 'Successfully uploaded to database'));
		}
	}
}

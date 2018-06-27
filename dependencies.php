<?php
use Slim\Views\PhpRenderer;
use App\Controllers;

$container = $app->getContainer();

$container['capsule'] = function($container){
	$capsule = new Illuminate\Database\Capsule\Manager;
	$capsule->addConnection($container['settings']['db']);
	return $capsule;
};

$container['view'] = function($container){
	$templateVariables = [
    "url" => __DIR__
    ];
	$view = new PhpRenderer($container['settings']['template_path'], $templateVariables);
	return $view;
};

$container['mailer'] = function($container){
	return new \PHPMailer();
};

$container['AuthController'] = function($container){
	return new App\Controllers\AuthController($container);
};

$container['auth'] = function(){
	return new App\Auth();
};

$container['Helper']= function(){
	return new App\Helper();
};

$container['HomeController'] = function($container){
  return new App\Controllers\HomeController($container);
};

$container['MenuController'] = function($container){
	return new App\Controllers\MenuController($container);
};

$container['MenuItemController'] = function($container){
	return new App\Controllers\MenuItemController($container);
};

$container['OrderController'] = function($container){
	return new App\Controllers\OrderController($container);
};

$container['ComplaintController'] = function($container){
	return new App\Controllers\ComplaintController($container);
};

$container['MobileController'] = function($container){
	return new App\Controllers\MobileController($container);
};

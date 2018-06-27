<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

session_cache_limiter('private, must-revalidate');
session_cache_expire(10);

//Start PHP session
session_start();

require '../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../settings.php';
//print_r($settings);

$app = new \Slim\App($settings);

// setting up the dependencies
require __DIR__.'/../dependencies.php';

$app->get('/','HomeController:index')->setName('home');
$app->map(['POST', 'GET'], '/dashboard','AuthController:postSignIn');
$app->map(['POST', 'GET'], '/user','AuthController:viewUser');
$app->map(['POST', 'GET'], '/user_pending','AuthController:viewPendingUsers');
$app->map(['POST', 'GET'], '/user_active','AuthController:viewActiveUsers');


$app->map(['POST', 'GET'], '/complaints','ComplaintController:viewComplaints');
$app->map(['POST', 'GET'], '/adduser', 'AuthController:addUser');
$app->map(['POST', 'GET'],'/edituser/{id}', 'AuthController:editUser');
$app->map(['POST', 'GET'], '/userdelete/{id}', 'AuthController:deleteUser');
$app->get('/logout', 'AuthController:logoutUser');
$app->map(['POST', 'GET'], '/requestpasswordreset/{token}/{email}', 'AuthController:requestPasswordReset');
$app->get('/success', 'HomeController:success')->setName('success');
$app->get('/reset', 'HomeController:reset');

$app->map(['POST', 'GET'], '/menu', 'MenuController:viewMenu');
$app->map(['POST', 'GET'], '/addmenu', 'MenuController:addMenu');
$app->map(['POST', 'GET'], '/editmenu/{id}', 'MenuController:editMenu');
$app->map(['POST', 'GET'], '/deletemenu/{id}', 'MenuController:deleteMenu');

$app->map(['POST', 'GET'], '/menuitem', 'MenuItemController:viewMenuItem');
$app->map(['POST', 'GET'], '/addmenuitem', 'MenuItemController:addMenuItem');
$app->map(['POST', 'GET'], '/editmenuitem/{id}', 'MenuItemController:editMenuItem');
$app->map(['POST', 'GET'], '/deletemenuitem/{id}', 'MenuItemController:deleteMenuItem');

$app->map(['POST', 'GET'], '/aboutus', 'HomeController:aboutusInformation');
$app->map(['POST', 'GET'], '/editaboutus', 'HomeController:editAboutusInformation');

$app->map(['POST', 'GET'], '/order', 'OrderController:viewOrders');
$app->map(['POST', 'GET'], '/order_pending', 'OrderController:viewPendingOrders');
$app->map(['POST', 'GET'], '/order_processing', 'OrderController:viewProcessingOrders');
$app->map(['POST', 'GET'], '/order_completed', 'OrderController:viewCompletedOrders');
$app->map(['POST', 'GET'], '/order_canceled', 'OrderController:viewCanceledOrders');

$app->map(['POST', 'GET'], '/singleorder/{id}', 'OrderController:viewSingleOrders');

// login from mobile client
$app->post('/signin', 'AuthController:signInMobileUser');
$app->post('/register', 'AuthController:registerMobileUser');
$app->post('/passwordreset', 'AuthController:resetPassword');
$app->get('/mobilerestuarant', 'HomeController:viewMobileHomePage');
$app->get('/mobilemenu', 'MobileController:viewMobileMenu');
$app->post('/mobilemenuitem', 'MobileController:viewMobileMenuItemById');
$app->post('/mobileorderhistory', 'MobileController:viewMobileUserOrderHistory');
$app->get('/mobilehotdeal', 'MobileController:viewMobileHotDeal');
$app->post('/mobileuseredit', 'MobileController:editUserProfile');
$app->post('/placeorder', 'MobileController:addOrderFromMobileUser');
$app->get('/allorders', 'MobileController:viewAllMobileOrderHistory');



$capsule = $app->getContainer()->get('capsule');
//$capsule->setAsGlobal();
$capsule->bootEloquent();

$app->run();

<?php
	use Bramus\Router\Router;

	require_once 'vendor/autoload.php';
	require_once 'controllers/controller.php';

	# Create instance of the RouterClass
	$router = new Router();

	# Define routes
	$router->get('/main', function()
	{
    $controller = new controller();
    $controller->index();
	});

	# Dynamic route with ReGex pattern
	$router->get('/user/(\d+)', function($id)
	{
		$controller = new controller();
		$controller->user($id);
	});

	# Custom 404 handling
	$router->set404(function()
	{
  	header('HTTP/1.1 404 Not Found');
		echo "Not Found!";  
	});

	# Run routes
	$router->run();
?>
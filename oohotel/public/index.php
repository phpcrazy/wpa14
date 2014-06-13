<?php 
$test1 = memory_get_usage();

define('DD', __DIR__ . '/../');

require DD . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Exception;

$request = Request::createFromGlobals();
$path_info = $request->getPathInfo();

$routes = new RouteCollection();

$routes->add('home', 
	new Route('/', array(
		'_controller'	=> 'HomeController::actionIndex'
		)
	)
);

$routes->add('blog',
	new Route('/blog', array(
		'_controller'	=> 'BlogController::actionIndex'
		)
	)
);

$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);
try {
	$parameter = $matcher->match($request->getPathInfo());
	var_dump($parameter);	
} catch(Exception\ResourceNotFoundException $e) {
	echo "404";
}

/*
use Wpa14\Application;

$app = new Application();
$app->run();
unset($app);

*/
$test2 = memory_get_usage();
var_dump(($test2 - $test1)/ 1024 . ' K');

?>
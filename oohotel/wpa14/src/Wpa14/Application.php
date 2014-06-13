<?php 
namespace Wpa14;

/*
Namespace Developed by Wpa14
All right reserved!
You are not allowed to copy, redistribute and modify.
*/

class Application {
	private $request_uri; 

	public function __construct() {
		$this->request_uri = $this->getRequestUri();
	}

	private function getRequestUri() {
		// RequestContext
		$requestURI = explode('/', $_SERVER['REQUEST_URI']);
		$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
		$request_uri = array_diff($requestURI, $scriptName);
		$request_uri = array_values($request_uri);
		return $request_uri;
	}

	public function run() {
		// RouteCollection
		$routes = require DD . '/app/routes.php';

		// UrlMatcher
		if(empty($this->request_uri)) {
			$key_found = false;
			foreach($routes as $route) {
				if($route['route'] == '') {
					$key_found = true;
					$controller = explode('@', $route['controller']);
					if(class_exists($controller[0])) {
						call_user_func_array(array(
							new $controller[0], 
							$controller[1]
							),
						array());
					} else {
						trigger_error("Controller not found, Idiot!", E_USER_ERROR);	
					}
				} 
			}	
			if($key_found == false) {
				\View::make('404');
			}		
		} else {
			$key_found = false;
			foreach($routes as $r) {
				if($r['route'] == $this->request_uri[0]) {
					$key_found = true;
					$controller = explode('@', $r['controller']);
					if(class_exists($controller[0])) {
						call_user_func_array(array(
							new $controller[0], 
							$controller[1]
							),
						array());
					} else {
						trigger_error("Controller not found, Idiot!", E_USER_ERROR);	
					}
				}
			}
			if($key_found == false) {
				\View::make('404');
			}
		}
	}
}

?>
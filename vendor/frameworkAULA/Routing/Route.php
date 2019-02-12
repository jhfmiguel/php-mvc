<?php


namespace FrameworkAULA\Routing;


use \Klein\Klein as Klein;

class Route extends Klein{

	//"App\\Controllers\\Controller@Action"

	public function get($route, $call){

		if(is_string($call)){

		$explode = explode("@", $call);
		$controller = "App\\".NAMESPACE_CONTROLLERS."\\".$explode[0]."Controller";
		$action = $explode[1];
		
		$this -> respond("GET", $route, function($request, $response, $service, $app) use ($controller, $action){

			$class = new $controller();
			$class -> __loadVars($request, $response, $app);
			return $class->$action();

	} );

		}else{

			$this -> respond("GET", $route, $call);

		}
	}


	public function post(){

		if(is_string($call)){

		$explode = explode("@", $call);
		$controller = "App\\".NAMESPACE_CONTROLLERS."\\".$explode[0]."Controller";
		$action = $explode[1];
		
		$this -> respond("POST", $route, function($request, $response, $service, $app) use ($controller, $action){

			$class = new $controller();
			$class -> __loadVars($request, $response, $app);
			return $class->$action();

	} );

		}else{

			$this -> respond("POST", $route, $call);

		}

	}

}

?>
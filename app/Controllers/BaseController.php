<?php

namespace App\Controllers;

use FrameworkAULA\Http\Controller;

class BaseController extends Controller{

	public function __loadVars($request, $response, $app){
		parent::__loadVars($request, $response, $app);

		$this->service->layout(VIEWS.'/layouts/default.phtml');
	}



	
}

?>
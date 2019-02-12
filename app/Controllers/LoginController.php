<?php

namespace App\Controllers;

use FrameworkAULA\Http\Controller;

class LoginController extends Controller{

	public function index(){
		$this->service->render('login/index.phtml');
	}



	
}

?>
<?php

namespace App\Controllers;

use FrameworkAULA\Http\Controller;

class IndexController extends BaseController{

	public function index(){
		$this->service->render('home/list.home.phtml');
		
	}


	public function cadCliente(){
		$this->service->render('home/cad.home.phtml');
		
	}


	public function editCliente(){
		$this->service->render('home/edit.home.phtml');
		
	}

}

?>
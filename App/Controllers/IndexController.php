<?php

namespace App\Controllers;

use Core\Controller\ControllerBase;

class IndexController extends ControllerBase {

	public function index():void {

		$this->render('index');
	}

}


?>
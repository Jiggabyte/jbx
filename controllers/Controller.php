<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/27/18
 * Time: 1:32 PM
 */

namespace Controllers;
use Libraries;


class Controller {
	use Libraries\Layout;

	public function home(){

		return $this->view('home.php');
	}

	public function contact(){

		return $this->view('contactus.php');

	}

}
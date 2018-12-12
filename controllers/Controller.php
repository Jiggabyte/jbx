<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/27/18
 * Time: 1:32 PM
 */
namespace Controllers;

use Libraries;
use Models\Model;
use Middleware\Middleware;


if(!isset($_SESSION['jbx'])){

	exit();
}


class Controller {
	use Libraries\Layout;
	/***  Start:- index.php redirect to '/'           ***/
	public function _index(){

		return $this->lay_index();
	}
	/***  End:- index.php redirect to '/'           ***/



	public function jigga(){

		return $this->view('jigga.php');
	}

	public function home(){
		$model = new Model();
		$model->select();
		return $this->view('home.php',$model->select());
	}

	public function contact(){

		return $this->view('contactus.php');

	}

}
<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */


namespace Libraries;

trait Layout {

	public function view($view,$variable = null){

		function render($view,$variable = null)
		{
			global $parameter;
			$parameter = $variable;
			require_once 'templates/views/'.$view;
			require_once 'templates/template.php';

		}

		return render($view,$variable);
	}

	public function lay_index(){

		function _render() {

			$urix = $_SERVER['REQUEST_URI'];

			$rodax = '`^/\w{1,}\.php`';

			if(preg_match($rodax,$urix,$matchx)){
				header('Location:/');
			}




		}

		return _render();
	}


}
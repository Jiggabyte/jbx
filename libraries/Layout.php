<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/27/18
 * Time: 1:32 PM
 */

namespace Libraries;

trait Layout {

	public function view($view){

		function render($view)
		{
			require_once 'models/' . $view;
			require_once 'templates/views/' . $view;
			require_once 'templates/template.php';
		}

		return render($view);
	}


}
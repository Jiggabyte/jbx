<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

namespace Models;

class Model{

    public $host = '';

    public $db = '';

    public $user = '';

    public $pass = '';

    public $link = '';

    public function connect(){

    }

    public function close(){

    }

    public function selectDB(){

    }

	public function select(){

		$dane = 'Jigga';

		return $dane;
	}
}
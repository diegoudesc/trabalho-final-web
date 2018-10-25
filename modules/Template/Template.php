<?php

class Template{

	private $config;

	private function __construct(){

	}

	public static function getInstance(){
		static $inst = null;
		if($inst === null){
			$inst = new Template();
		}
		return $inst;
	}
}

?>
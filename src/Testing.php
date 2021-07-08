<?php
namespace Testing;

class Testing{
	/**
	* @var string
	*/
	protected $test;

	public function run(){
		echo 'Hello World!';
	}

	/**
	* @return bool
	*/
	public function other(){
		return true;
	}
}
<?php
namespace Testing;

class Testing{
	/**
	* @var string
	*/
	protected $test;

	public function run(){
		$this->out('Hello World!');
	}

	/**
	* @param string $text
	*/
	public function out($text){
		echo $text;
	}

	/**
	* @return bool
	*/
	public function other(){
		return true;
	}
}
<?php
/*--- 2. The Concrete Component ---*/
//the class responsible for defining a base object

class PlainTaco implements Taco{
	/*---variables---*/
	private $shell;
	private $meat;
	private $cost;
	
	/*---constructor---*/
	public function __construct($s, $m){
		$this->shell = $s;
		$this->meat = $m;
		$this->cost = 1;
	}
		
	
	/*---methods from interface---*/
	public function getCost(){
		return $this->cost;
	}
	
	public function getDescription(){
		return $this->shell . ' ' . $this->meat . ' taco';
	}
	
}

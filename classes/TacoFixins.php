<?php
/*--- 3. The Decorator ---*/
//the abstract class responsible for defining decorator structure
abstract class TacoFixins implements Taco{
	/*---attribute of component type---*/
	protected $taco;
	
	/*---constructor with object composition of component type---*/
	public function __construct(Taco $t){
		$this->taco = $t;
	}
	
	/*---abstract functions from interface---*/
	abstract function getCost();
	abstract function getDescription();
	
}
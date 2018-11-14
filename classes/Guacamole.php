<?php
/*--- 4. Concrete Decorator ---*/
//the class responsible 
class Guacamole extends TacoFixins{
	
	
	/*---define functions from interface---*/
	function getCost(){
		return $this->taco->getCost() + 2;
	}
	
	function getDescription(){
		return $this->taco->getDescription() . ' with guacamole';
	}
	
}
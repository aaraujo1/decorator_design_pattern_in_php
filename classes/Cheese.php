<?php
/*--- 4. Concrete Decorator ---*/
//the class responsible for one decoration
class Cheese extends TacoFixins{
	
	
	/*---define functions from interface---*/
	function getCost(){
		return $this->taco->getCost() + 1;
	}
	
	function getDescription(){
		return $this->taco->getDescription() . ' with cheese 🧀';
	}
	
}
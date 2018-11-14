<?php
/*--- 4. Concrete Decorator ---*/
//the class responsible for one decoration
class Salsa extends TacoFixins{
	
	
	/*---define functions from interface---*/
	function getCost(){
		return $this->taco->getCost() + 0;
	}
	
	function getDescription(){
		return $this->taco->getDescription() . ' with salsa 💃';
	}
	
}
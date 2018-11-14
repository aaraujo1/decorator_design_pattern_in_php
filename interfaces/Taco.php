<?php
/*--- 1. The Component ---*/
//the interface responsible for stating common behaviors

interface Taco{
	/*---abstract functions---*/
	public function getCost();
	public function getDescription();
}
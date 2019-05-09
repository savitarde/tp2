<?php
namespace controllers;
 /**
 * Controller Randomnumbergame
 **/
class Randomnumbergame extends ControllerBase{

	public function index(){
		$this->loadView("Randomnumbergame/index.html");
	}
}

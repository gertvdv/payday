<?php

class payday {
	
	var $usera = "usera";
	var $userb = "userb";
	
	var $transactions = array();
	
	function set_names($names) {
		$this->usera = $names['usera'];
		$this->userb = $names['userb'];
	}
	
	function get_last_payment() {
		
	}
	
	function get_balance() {
		
	}
	
	function get_transactions() {
		$this->transactions = array("blabla");
	}
	
}
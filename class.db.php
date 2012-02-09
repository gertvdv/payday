<?php

class db {

	var $query_count = 0;			# the number of executed queries
	var $query_history = array();	# a history of all executed queries
	
	# connect to the database
	function connect() {
		global $db_info;
		
		mysql_connect($db_info['host'], $db_info['username'], $db_info['password'])
			or die("Err//Connection_State_Down");
		mysql_select_db($db_info['database'])
			or die("Err//Database_Connection_Failed");
	}

	# execute a query
	function query($query_string) {
		//if ($_SESSION["admin_mode"] == true) {
		//	echo "<pre>";
		//	print_r($query_string);	
		//	echo "</pre>";	
		//}
		$result = mysql_query($query_string) or die(mysql_error() . "<!-- ".$query_string." -->");
		$this->query_count++;
		$this->query_history[] = $query_string;
		return $result;
	}
	
	# show the executed query
	function show_query($index = 0) {
		if (count($this->query_history) == 0 OR !array_key_exists($index, $this->query_history)) RETURN NULL;
		return $this->query_history[$index];
	}

	# retrieve the last insert id
	function insert_id() {
		return mysql_insert_id();
	}

	# fetch the first row a query returns as an array
	function fetch_first_row($query_string) {
		$result = $this->query($query_string);
		return $this->fetch_array($result);
	}
	
	# fetch the the first row
	function fetch_row($result) {
		$arrRow = mysql_fetch_row($result);
		return $arrRow;
	}

	# fetch a specific field from the first row a query returns
	function fetch_field($query_string, $field = 0) {
		$result = $this->query($query_string);
		$arrOut = $this->fetch_row($result);
		return $arrOut[$field];
	}

	# fetch the next row as an array
	function fetch_array($result) {
		$arrOut = mysql_fetch_array($result);
		return $arrOut;
	}

	# get the number of returned rows
	function num_rows($result) {
		$numRows = mysql_num_rows($result);
		return $numRows;
	}

	# close the database connection
	function close() {
		mysql_close();
	}

}
	
?>
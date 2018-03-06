<?php
	
	/**
	* PHP File Helpers
	*/
	
	class JJFileHelp{
		
		/* Print R Advanced
		-----------------------------------------------------------------*/
		//Adds PRE on front end and back of print_r
		
		
		public static function printr($array){
			print "<pre>";
			print_r($array);
			print "</pre>";
		
		}
		
	
	}
	
	$JJFileHelp = new JJFileHelp;
?>
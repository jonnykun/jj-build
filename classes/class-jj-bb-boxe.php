<?php 
	
final class JJBoxe{
	
	
	public function init(){
    	add_action('wp_enqueue_scripts', array(__CLASS__,'jj_boxe_css'));
    	add_filter('body_class',  array(__CLASS__,'bb_page_class'));
	}
	
	
	/** ADD CSS
	-----------------------------------------------------------------**/
	
	public function jj_boxe_css(){
		 wp_enqueue_style( 'mytheme-style',JJ_BUILD_URL.'css/jj-bb-boxe.css'); 
		 wp_enqueue_script( 'mytheme-style',JJ_BUILD_URL.'css/jj-bb-boxe.js'); 
		
	}
	
	/** REMOVE Blog Post 1 on Page 2 or greater of feed
	
	-----------------------------------------------------------------**/

	/* Add our custom Body Classes based on the URL Parameters:
	Requires: body.post-1-remove .post-1 in css to be set to display:none;
	Requires: Permalinks to be set to custom -> /%postname%
	*/
	function bb_page_class($classes){
		
		$link = $_SERVER['REQUEST_URI'];
		$link_array = explode('/',$link);
		$page = end($link_array);
		//$page = $link_array[count($link_array)-2];
		
		
	
		
		if($page > 1){
			
			$classes[].='post-1-remove';
		}
		return $classes;
	}
	
		 
		
}

JJBoxe::init();



?>
<?php
	final class JJShorts{
		
		public function init(){
    	add_action('wp_enqueue_scripts', array(__CLASS__,'jj_shorts_scripts'));
    	add_shortcode('pullquote',array( __CLASS__, 'pull_quote' ) );	
	}
	
	
	/** ADD CSS
	-----------------------------------------------------------------**/
	
	public function jj_shorts_scripts(){
		 wp_enqueue_style( 'shorts_css',JJ_BUILD_URL.'css/jj-shorts.css'); 
		// wp_enqueue_script( 'mytheme-style',JJ_BUILD_URL.'css/jj-bb-boxe.js'); 
		
	}

		
		/* Pull Quotes Shortcode
		-----------------------------------------------------------------*/
		//Requires pullquote CSS
		static public function pull_quote($atts){
		
			$a = shortcode_atts(array('align'=>'left','quote'=>'blank','style'=>'pullquote' ), $atts);
			$align=$a['align'];
			$style=$a['style'];
			$quote=$a['quote'];
			$quote = ($quote=='blank') ? 'Please place your quote in the shortcode using the quote=" " variable!' : $quote;
			$pullquote="";
			$pullquote.='<div class="'.$style.'-'.$align.'"><hr class="pullquote-hr"/>';
			$pullquote.= '<span class="pullquote">'.$quote.'</span>';
			$pullquote.='</div>';
			
			return $pullquote;
		
		}
	
	}
JJShorts::init();

?>
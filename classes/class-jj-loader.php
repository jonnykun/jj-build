<?php
	
	if ( ! class_exists( 'JJLoader' ) ) {
		/*Loads the JamboJon building files. */
		final class JJLoader {
			
			static public function init(){
				
			self::define_constants();
			self::load_classes();
			
			}
			
			static private function define_constants(){
				define( 'JJ_BUILD_FILE', trailingslashit( dirname( dirname( __FILE__ ) ) ) . 'jj-build.php' );
				
				/*//Use if a Plugin
				define( 'JJ_BUILD_DIR', plugin_dir_path( JJ_BUILD_FILE ) );
				define( 'JJ_BUILD_URL', plugins_url( '/', JJ_BUILD_FILE ) );
				*/
				
				//Use if Inside Child Theme
				define( 'JJ_BUILD_DIR', get_stylesheet_directory( JJ_BUILD_FILE ).'/jj-build/' );
				define( 'JJ_BUILD_URL', get_stylesheet_directory_uri(JJ_BUILD_FILE ).'/jj-build/' );

				
			}
			
			
			static private function load_classes(){
				//JJ-Build
			 	require_once JJ_BUILD_DIR .'classes/class-jj-helpers.php';
			 	require_once JJ_BUILD_DIR .'classes/class-jj-shorts.php';
			 	//Beaver Builder
			 	require_once JJ_BUILD_DIR .'classes/class-jj-bb-boxe.php';
 				//Woocommerce
 				require_once JJ_BUILD_DIR .'classes/class-jj-woo-tab-fields.php';
 				
 			
 				
 				
 				
			}
			
			
			
			
			static public function console($output){
			echo "<script>console.log( 'JJBuild: " . $output . "' );</script>";
			}
			
			
		}
		
		
	}	
JJLoader::init();	



?>
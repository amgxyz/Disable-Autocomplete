<?php
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );


class DaScriptHandler {
/**
* Enqueue scripts
*/


public function __construct() {
	add_action('wp_footer', array($this,'da_scripts'),5);
}
public function da_scripts() { 
	//var_dump($name);
	$name = $_SERVER['SERVER_NAME'];
	 //var_dump($sslt_settings[$key]);//$var = get_option('wc_bom_option'); ?>

		
	    <script type="text/javascript">
	        
	        //jQuery(document).ready(function($) {
	        jQuery(document).ready(function($){

					if ($.browser.chrome) {
					//autcomplete_false();

						$("input").each(function() {
					    	
					    	$(this).attr('autocomplete', 'false'); //FALSE AS OF 2015

					    }); // .each

					    $("form").each(function() {
					    	
					    	$(this).attr('autocomplete', 'false'); //FALSE AS OF 2015

						}); // .each

					} else {

						$("input").each(function() {

					    	$(this).attr('autocomplete', 'off');


					    }); // .each

					    $("form").each(function() {

					    	$(this).attr('autocomplete', 'off');

					    }); // .each

					} // end if

				});

		    </script>

<?php }
}
$da = new DaScriptHandler();
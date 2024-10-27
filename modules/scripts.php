<?php 

add_action('wp_print_scripts', 'w404_add_script_fn');
function w404_add_script_fn(){
	wp_enqueue_style('w404_bootsrap_css', plugins_url('/inc/assets/css/tw-bs4', __FILE__ ) ) ;
	if(is_admin()){	

		wp_enqueue_media();
		wp_enqueue_script('w404_admi11n_js', plugins_url('/js/admin.js', __FILE__ ), array('jquery'  ), '1.0' ) ;
		wp_enqueue_style('w404_admin_css', plugins_url('/css/admin.css', __FILE__ ) ) ;	
	  }else{

		wp_enqueue_script('w404_front_js', plugins_url('/js/front.js', __FILE__ ), array( 'jquery' ), '1.0' ) ;
		wp_enqueue_style('w404_front_css', plugins_url('/css/front.css', __FILE__ ) ) ;	
			
		
	  }
}
?>
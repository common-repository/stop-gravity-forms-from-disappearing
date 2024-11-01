<?php
/*
Plugin Name: Stop Gravity Forms From Disappearing
Plugin URI: http://www.wpsos.io/wordpress-plugin-stop-gravity-forms-from-disappearing/
Description: A simple plugin for stopping Gravity Forms from disappearing
Author: WPSOS
Version: 1.0
Author URI: http://www.wpsos.io/
*/

/* Adding Plugin Custom CSS file */

function wpsos_sdgf_stop_disappearing_of_gravity_forms()
	{
	?>
	<style type="text/css">
.gform_wrapper{
	display:block !important;
}
	</style>
	<?php
	}

add_action('wp_head', 'wpsos_sdgf_stop_disappearing_of_gravity_forms');


function wpsos_sdgf_ace_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'stop-gravity-forms-from-disappearing.php' ) !== false ) {

		$links = array_merge( $links, array( '<a href="http://www.wpsos.io/wordpress-plugin-stop-gravity-forms-from-disappearing/">' . __( 'Plugin details' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://www.wpsos.io/">WPSOS - WordPress Security & Hack Repair</a>' ) );		
	}

	return $links;
}
add_filter( 'plugin_row_meta', 'wpsos_sdgf_ace_set_plugin_meta', 10, 2 );

?>
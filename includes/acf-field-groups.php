<?php
/**
 * whx4 Options Page: "Site Settings"
 *
 * @link https://www.advancedcustomfields.com/resources/options-page/
 */

/**
 * Check if ACF PRO is active and function exists
 */

/*if ( function_exists( 'acf_add_local_field_group' ) ) {
	add_action( 'acf/init', 'whx4_register_options_page' );
}*/

if ( function_exists( 'acf_add_local_field_group' ) ) {
	add_action( 'acf/include_fields', 'whx4_register_field_groups' );
}

function whx4_register_field_groups() {
}

?>
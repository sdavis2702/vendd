<?php
/**
 * Custom conditional tags for this theme.
 *
 * @package Vendd
 */


/*--------------------------------------------------------------
>>> Easy Digital Downloads
>>> https://easydigitaldownloads.com/
--------------------------------------------------------------*/

/**
 * Is EDD activated?
 *
 * @return bool
 */
function vendd_edd_is_activated() {
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Is it the EDD checkout page?
 *
 * @return bool
 */
function vendd_is_checkout() {
	if ( vendd_edd_is_activated() && is_page_template( 'edd_templates/edd-checkout.php' ) ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Is it the EDD Store Front template?
 *
 * @return bool
 */
function vendd_is_store_front() {
	if ( vendd_edd_is_activated() && is_page_template( 'edd_templates/edd-store-front.php' ) ) {
		return true;
	} else {
		return false;
	}
}


/*--------------------------------------------------------------
>>> Frontend Submissions for Easy Digital Downloads
>>> https://easydigitaldownloads.com/extensions/frontend-submissions/
--------------------------------------------------------------*/

/**
 * Is FES activated?
 *
 * @return bool
 */
function vendd_fes_is_activated() {
	if ( class_exists( 'EDD_Front_End_Submissions' ) ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Is it the FES Vendor Dashboard?
 *
 * @return bool
 */
function vendd_is_fes_dashboard() {
	if ( vendd_fes_is_activated() && is_page_template( 'fes_templates/fes-dashbaord.php' ) ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Is it the FES Vendor Template?
 *
 * @return bool
 */
function vendd_is_fes_vendor_template() {
	if ( vendd_fes_is_activated() && is_page_template( 'fes_templates/fes-vendor.php' ) ) {
		return true;
	} else {
		return false;
	}
}


/*--------------------------------------------------------------
>>> Simple Notices and Simple Notices Pro
>>> https://pippinsplugins.com/simple-notices-plugin/
--------------------------------------------------------------*/

/**
 * Are either of the Simple Notices extensions activated?
 *
 * @return bool
 */
function vendd_simple_notices_is_activated() {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'simple-notices/simple-notices.php' ) || is_plugin_active( 'simple-notices-pro/simple-notices.php' ) ) {
		return true;
	} else {
		return false;
	}
}
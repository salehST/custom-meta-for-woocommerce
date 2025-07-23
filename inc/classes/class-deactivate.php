<?php
/**
 * Plugin deactivation class
 *
 * @package faq-pro
 */

namespace CMFW\Inc;

use CMFW\Inc\Traits\Singleton;

class Deactivate {
    use Singleton;

	protected function __construct() {
        flush_rewrite_rules();
		// $this->setup_hooks();
	}

	protected function setup_hooks() {
        // actions hooks
		add_action( 'init' , [ $this, 'example' ] );
	}

    public static function example(){
		
	}
}
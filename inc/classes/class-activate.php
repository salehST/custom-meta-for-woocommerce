<?php
/**
 * Plugin activation clss
 *
 * @package faq-pro
 */

namespace FAQ_PRO\Inc;

use FAQ_PRO\Inc\Traits\Singleton;

class Activate {

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
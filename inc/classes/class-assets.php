<?php
/**
 * Plugin assets will be added here
 *
 * @package faq-pro
 */

namespace CMFW\Inc;

use CMFW\Inc\Traits\Singleton;

class Assets {

	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		// Frontend Enqueue
		add_action( 'wp_enqueue_scripts' , [ $this, 'frontendStyles' ] );
		add_action( 'wp_enqueue_scripts' , [ $this, 'frontendScripts' ] );

		// Admin Enqueue
		add_action('admin_enqueue_scripts', [$this, 'adminStyle'] );
		add_action('admin_enqueue_scripts', [$this, 'adminScripts'], 20 );
	}

	public function frontendStyles(){
		// Register Syle
		wp_register_style('faq-pro', CMFW_URL . '/assets/css/faq-pro.css', [], filemtime( CMFW_DIR_PATH . '/assets/css/faq-pro.css'), 'all');

		// Enqueue Style
		wp_enqueue_style('faq-pro');
	}

	public function frontendScripts(){
		// Register Scripts
		wp_register_script( 'faq-pro', CMFW_URL . '/assets/js/faq-pro.js', ['jquery'], filemtime( CMFW_DIR_PATH . '/assets/js/faq-pro.js'), true );

		// Enqueue Script
		wp_enqueue_script('faq-pro');
	}

	public function adminStyle(){
		// Register Syle
		wp_register_style('faq-pro-admin', CMFW_URL . '/assets/css/faq-pro-admin.css', [], filemtime( CMFW_DIR_PATH . '/assets/css/faq-pro-admin.css'), 'all');

		// Enqueue Style
		wp_enqueue_style('faq-pro-admin');
	}

	public function adminScripts(){
		wp_localize_script( 'faq-admin-script', 'wooFaqPro', [
			'is_pro' => true,
		]);
	}
}
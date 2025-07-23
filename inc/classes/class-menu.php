<?php

/**
 * All menu and submenu will be here
 *
 * @package cmfw
 */

namespace CMFW\Inc;

use CMFW\Inc\Traits\Singleton;

class Menu
{

    use Singleton;

    public $cansoft_module;

    public $faq_heading;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // Add menu
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    /**
     * Add menu in wordpress dashboard menu
     *
     * @return void
     */
    public function adminMenu()
    {
        // add_menu_page(__('Cansoft Core', 'cansoft'), __('Cansoft Core', 'cansoft'), 'manage_options', 'cansoft', [$this, 'adminPage'], 'dashicons-info');

    }
}

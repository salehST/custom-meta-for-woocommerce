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
    /**
     * Constructor to set up hooks
     * This class is used to manage the admin menu for the plugin.
     * @since 1.0.0
     * @author Fazle Bari <fazlebarisn@gmail.com>
     */
    protected function __construct()
    {
        $this->setup_hooks();
    }

    /**
     * Set up all hooks for the menu
     * This method is used to register the admin menu and submenu items.
     * @since 1.0.0
     * @author Fazle Bari <fazlebarisn@gmail.com>
     */
    protected function setup_hooks()
    {
        // Add menu
        add_action('admin_menu', [$this, 'adminMenu']);
    }

    /**
     * Add menu in wordpress dashboard menu
     * @since 1.0.0
     * @author Fazle Bari <fazlebarisn@gmail.com>
     */
    public function adminMenu()
    {
        // add_menu_page(__('Cansoft Core', 'cansoft'), __('Cansoft Core', 'cansoft'), 'manage_options', 'cansoft', [$this, 'adminPage'], 'dashicons-info');

    }
}

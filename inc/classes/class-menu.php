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
        add_action('admin_menu', [$this, 'adminMenu'],99);
    }

    /**
     * Add menu in wordpress dashboard menu
     * @since 1.0.0
     * @author Fazle Bari <fazlebarisn@gmail.com>
     */
    public function adminMenu()
    {
         add_menu_page(__('Custom Meta For WooCommerce', 'custom-meta-for-woocommerce'), __('Custom Meta for WooCommerce', 'custom-meta-for-woocommerce'), 'manage_options', 'custom-meta-for-woocommerce', [$this, 'adminPage'], 'dashicons-info');

    }

    /*
     * Add adminPage method for menu settings page
     * @since 1.0.0
     * @author Hannan <hannannexus@gmail.com> 
    
    */

    public function adminPage(){
        if( !current_user_can('manage_options')){
            return;
        }

        include_once CMFW_DIR_PATH . '/inc/menu-pages/dashboard.php';
    }
}

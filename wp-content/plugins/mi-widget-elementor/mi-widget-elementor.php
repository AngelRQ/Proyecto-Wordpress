<?php

/**
 * Plugin Name: Mi Widget Elementor plugin
 * Descriptiom: Plugin de practica para elementor
 * Version: 1.0
 * Author: Angel Jouseph Rodriguez Quesada
 */

if (!defined('ABSPATH')) {
    exit;
}

final class Mi_Widget_Elementor
{
    const VERSION = '1.0.0';
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

    public function __construct()
    {
        add_action('plugin_loaded', [$this, 'init']);
    }

    public function init()
    {
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missiong_main_plugin']);
            return;
        }

        add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
    }

    public function init_widgets()
    {
        include_once('mi-widget.php');
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Mi_Widget());
    }

    public function admin_notice_missiong_main_plugin()
    {
        if (isset($_GET['active'])) unset($_GET['active']);
        echo '<div class="notice notice-warning is-dismissible"><p><strong>' . sprintf(esc_html__('"%$" requiere "%s" para funcionar'), 'Mi Widget Elementor', 'Elementor') . '</strong></p></div>';
    }
}

new Mi_Widget_Elementor();

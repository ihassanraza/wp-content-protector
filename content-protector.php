<?php
/**
 * PHP version        7.2
 * 
 * @category Content
 * 
 * @package Content
 * 
 * @author Hassan Raza <ihaxxanraza@gmail.com>
 * 
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GPL v2 or later
 * 
 * @link https://www.sigmasqr.com/
 * Plugin Name:       WP Content Protector
 * Description:       WP Content Protector is protect your Content, Images etc.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hassan Raza
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 require 'functions.php';

/**
 * Enqueue Bootstrap Files 
 * 
 * @return void
 */
function Wp_Content_Protector_bootstrap()
{

    // Stylesheet 
    wp_enqueue_style(
        'bootstrap_css', 
        plugin_dir_url('_FILE_') .'wp-content-protector/assests/bootstrap/css/bootstrap.min.css'
    );

    // Bootstrap Script File
    wp_enqueue_script(
        'bootstrap_script', 
        plugin_dir_url('_FILE_') .'wp-content-protector/assests/bootstrap/js/bootstrap.min.js', 
        array( 'jquery' )
    );
    
}
add_action('admin_head', 'Wp_Content_Protector_bootstrap');

/**
 * Add Menu in Admin Panel
 * 
 * @return void
 */
function Wp_Content_protector()
{
    add_menu_page( 
        'Wp Content Protector', 
        'Content Protector', 
        'manage_options', 
        'contentprotector', 
        'My_Content_protector', 
        'dashicons-share-alt', 
        6 
    );
}
add_action('admin_menu', 'Wp_Content_protector');

/**
 * Callback function of Wp_Content_protector()
 * 
 * @return void
 */
function My_Content_protector()
{
    settings_errors();
    ?>
    <article class="container d-flex justify-content-center align-items-center">
        <?php include 'template_page.php' ?>
    </article>
    <?php
}




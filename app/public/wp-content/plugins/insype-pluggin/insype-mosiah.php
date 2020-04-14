<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Insype-Mosiah
 *
 * @wordpress-plugin
 * Plugin Name:       insype_mosiah
 * Plugin URI:        
 * Description:       This is a pluggin to demostrate skills on develop.
 * Version:           1.0.0
 * Author:            Mosiah Azuaje
 * Author URI:        https://github.com/mosiahazuaje2019
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       insype-mosiah
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * 
 */
class InsypePlugin
{
	public $plugin;

	function __construct(){
		$this->plugin = plugin_basename( __FILE__ );

		add_action( 'init', array($this, 'custon_post_type') );
	}

	public function register(){
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'admin_menu', array($this, 'add_admin_pages') );


		add_filter( "plugin_action_links_$this->plugin",array($this, 'settings_link') );
	}

	public function settings_link($links){
		$settings_link = '<a href="options-general.php?page=insype_plugin">Settings</a>';
		array_push($links, $settings_link);
		return $links;
	}

	public function add_admin_pages(){
		add_menu_page( 'Insype Plugin', 'Insype', 'manage_options', 'insype_plugin', array($this, 'admin_index'), 'dashicons-store', 110 );
	}
	
	public function admin_index(){
		require_once plugin_dir_path( __FILE__ ).'templates/admin.php';
	}

	function activate(){
		flush_rewrite_rules();
	}

	function deactivate(){
		flush_rewrite_rules();
	}

	function custon_post_type(){
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
	}

	function enqueue(){
		wp_enqueue_style( 'myplugginstyle', plugins_url( 'public/css/insype.css', __FILE__ ));
		wp_enqueue_script( 'myplugginscript', plugins_url( 'public/js/insype.js', __FILE__ ));
	}

}

if( class_exists( 'InsypePlugin' ) ){
	$insype_mosiah = new InsypePlugin();
	$insype_mosiah->register();
}

//activation
require_once plugin_dir_path( __FILE__ ).'include/insype-pluggin-activator.php';
register_activation_hook( __FILE__, array('InsypePlugginActivator', 'activate') );

//deactivate
require_once plugin_dir_path( __FILE__ ).'include/insype-pluggin-deactivator.php';
register_deactivation_hook( __FILE__, array('InsypePlugginDeactivator', 'deactivate') );


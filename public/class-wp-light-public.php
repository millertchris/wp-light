<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://millertchris.com
 * @since      1.0.0
 *
 * @package    Wp_Light
 * @subpackage Wp_Light/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Light
 * @subpackage Wp_Light/public
 * @author     Chris Miller <miller.t.chris@gmail.com>
 */
class Wp_Light_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Light_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Light_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-light-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Light_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Light_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-light-public.js', array( 'jquery' ), $this->version, false );

	}

	public function light_head() {

		/**
		 * Clean up the head section by removing actions
		 */
	
		remove_action('wp_head', 'rsd_link'); // remove really simple discovery link | <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" /> 
		remove_action('wp_head', 'wp_generator'); // remove wordpress version | <meta name="generator" content="WordPress 5.6" />
		remove_action('wp_head', 'feed_links', 2); // remove rss feed links | <link rel="alternate" type="application/rss+xml" title="Site Feed" href="/feed/" /> <link rel="alternate" type="application/rss+xml" title="Site Comments Feed" href="/comments/feed/" />
		remove_action('wp_head', 'feed_links_extra', 3); // remove all extra rss feed links
		remove_action('wp_head', 'index_rel_link'); // remove link to index page
		remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer) | <link rel="https://api.w.org/" href="/wp-json/" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
		remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
		remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
		remove_action('wp_head', 'rest_output_link_wp_head'); // remove JSON link from head | <link rel="https://api.w.org/" href="/wp-json/" /><link rel="alternate" type="application/json" href="/wp-json/wp/v2/posts/15" /><link rel="canonical" href="/test/" />
		remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // remove shortlink | <link rel='shortlink' href='/?p=15' />

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // remove emoji script from head
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // remove emoji styles from head

	}

	public function remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	}

}

 

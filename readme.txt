=== Plugin Name ===
Contributors: millertchris
Donate link: https://millertchris.com/
Tags: post
Requires at least: 4.7
Tested up to: 5.6
Stable tag: 4.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Create a lighter and more performant WordPress by removing things you don’t need.

== Description ==

WordPress out of the box includes several things in the head section of your theme that you may never use. If you’re a clean freak like me, you may want to limit or control exactly what goes into your head section.

There are future plans to give you control over what to keep and what to remove but for now, activating this plugin will remove the following.

## Installation
1. Upload `wp-light.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Grab some coffee ☕

== Changelog ==

### Changelog

= 1.1.0 =
* Added support to update plugin via GitHub

= 1.0.0 =
* Added  `remove_action('wp_head', 'rsd_link’);`
* Added  `remove_action('wp_head', 'wp_generator');`
* Added  `remove_action('wp_head', 'feed_links', 2);`
* Added  `remove_action('wp_head', 'feed_links_extra', 3);`
* Added  `remove_action('wp_head', 'index_rel_link');`
* Added  `remove_action('wp_head', 'wlwmanifest_link');`
* Added  `remove_action('wp_head', 'start_post_rel_link', 10, 0);`
* Added  `remove_action('wp_head', 'parent_post_rel_link', 10, 0);`
* Added  `remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);`
* Added  `remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);`
* Added  `remove_action('wp_head', 'rest_output_link_wp_head');`
* Added  `remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);`
* Added  `remove_action( 'wp_head', 'print_emoji_detection_script', 7 );`
* Added  `remove_action( 'wp_print_styles', 'print_emoji_styles' );`
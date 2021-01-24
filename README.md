# WP Light
Create a lighter and more performant WordPress by removing things you don’t need.

## Description
WordPress out of the box includes several things in the head section of your theme that you may never use. If you’re a clean freak like me, you may want to limit or control exactly what goes into your head section.

There are future plans to give you control over what to keep and what to remove but for now, activating this plugin will remove the following.

```
// remove really simple discovery link (e.g. <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />)
remove_action('wp_head', 'rsd_link');

// remove wordpress version (e.g. <meta name="generator" content="WordPress 5.x" />)
remove_action('wp_head', 'wp_generator');

// remove rss feed links (e.g. <link rel="alternate" type="application/rss+xml" title="Site Feed" href="/feed/" /> <link rel="alternate" type="application/rss+xml" title="Site Comments Feed" href="/comments/feed/" />)
remove_action('wp_head', 'feed_links', 2);
        
// remove all extra rss feed links
remove_action('wp_head', 'feed_links_extra', 3);
        
// remove link to index page
remove_action('wp_head', 'index_rel_link');
        
// remove wlwmanifest.xml (e.g. needed to support windows live writer) | <link rel="https://api.w.org/" href="/wp-json/" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
remove_action('wp_head', 'wlwmanifest_link');
        
// remove random post link
remove_action('wp_head', 'start_post_rel_link', 10, 0);
        
// remove parent post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
   
// remove the next and previous post links     
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// remove adjacent post rel link     
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        
// remove JSON link from head (e.g. <link rel="https://api.w.org/" href="/wp-json/" /><link rel="alternate" type="application/json" href="/wp-json/wp/v2/posts/15" /><link rel="canonical" href="/test/" />)
remove_action('wp_head', 'rest_output_link_wp_head');
        
// remove shortlink (i.e. <link rel='shortlink' href='/?p=15' />)
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// remove emoji script from head
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

// remove emoji styles from head
remove_action( 'wp_print_styles', 'print_emoji_styles' );
```

## Installation
1. Upload `wp-light.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Grab some coffee ☕

### Changelog

= 1.0 =
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

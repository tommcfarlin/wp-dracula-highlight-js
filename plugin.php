<?php

/**
 * Plugin Name: Dracula Highlight.js
 * Plugin URI:  https://github.com/tommcfarlin/wp-dracula-highlight-js
 * Description: A WordPress plugin for adding the Dracula color scheme and Highlight.js to the Block Editor.
 * Version:     1.0.0
 * Author:      Tom McFarlin
 * Author URI:  https://tommcfarlin.com
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace WPDHJS;

/**
 * Adds the Dracula style and custom frontend style followed by the Highlight
 * script and the custom frontend script.
 *
 * Note this plugin does not check for the presence of Highlight.js or the
 * Dracula stylesheet before adding this to WordPress. It's intended to be
 * an all-in-one solution for the Block Editor.
 *
 * @author Tom McFarlin <tom@tommcfarlin.com>
 * @since 1.0.0
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'wp-dracula-highlight-style',
        '//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.1/build/styles/dracula.min.css',
        [],
        filemtime(__FILE__),
        'all'
    );

    wp_enqueue_style(
        'wp-dracula-style',
        plugins_url('wp-dracula-highlight-js') . '/assets/css/frontend.css',
        ['wp-dracula-highlight-style'],
        filemtime(__FILE__),
        'all'
    );

    wp_enqueue_script(
        'wp-dracula-highlight-script',
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js',
        [],
        filemtime(__FILE__),
        false
    );

    wp_enqueue_script(
        'wp-dracula-script',
        plugins_url('wp-dracula-highlight-js') . '/assets/js/frontend.js',
        ['wp-dracula-highlight-script'],
        filemtime(__FILE__),
        false
    );
});

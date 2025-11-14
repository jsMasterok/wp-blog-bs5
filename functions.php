<?php
/**
 * Theme bootstrap file.
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (! function_exists('wp_blog_bs5_setup')) {
    /**
     * Set up theme defaults and WordPress features support.
     */
    function wp_blog_bs5_setup(): void
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']
        );

        register_nav_menus([
            'primary' => __('Primary Menu', 'wp-blog-bs5'),
        ]);
    }
}
add_action('after_setup_theme', 'wp_blog_bs5_setup');

if (! function_exists('wp_blog_bs5_assets')) {
    /**
     * Enqueue theme styles and scripts.
     */
    function wp_blog_bs5_assets(): void
    {
        $theme_version = wp_get_theme()->get('Version');
        $theme_uri     = get_template_directory_uri();

        $style_base = $theme_uri . '/assets/css/';
        $script_base = $theme_uri . '/assets/js/';

        wp_enqueue_style(
            'wp-blog-bs5-google-fonts',
            'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Roboto:wght@400;500;700&display=swap',
            [],
            null
        );

        wp_enqueue_style(
            'wp-blog-bs5-bootstrap',
            $style_base . 'vendor/bootstrap.min.css',
            [],
            $theme_version
        );

        $vendor_styles = [
            'wp-blog-bs5-animate'          => 'vendor/animate.min.css',
            'wp-blog-bs5-fontawesome'      => 'vendor/fontawesome-all.min.css',
            'wp-blog-bs5-themify'          => 'vendor/themify-icons.css',
            'wp-blog-bs5-flaticon'         => 'vendor/fonts/flaticon.css',
            'wp-blog-bs5-material-icons'   => 'vendor/material-icons.min.css',
            'wp-blog-bs5-weather-icons'    => 'vendor/weather-icons.min.css',
            'wp-blog-bs5-perfect-scrollbar'=> 'vendor/perfect-scrollbar.css',
            'wp-blog-bs5-owl-carousel'     => 'vendor/owl.carousel.min.css',
            'wp-blog-bs5-slick'            => 'vendor/slick.css',
            'wp-blog-bs5-slicknav'         => 'vendor/slicknav.css',
            'wp-blog-bs5-magnific-popup'   => 'vendor/magnific-popup.css',
            'wp-blog-bs5-nice-select'      => 'vendor/nice-select.css',
            'wp-blog-bs5-ticker-style'     => 'vendor/ticker-style.css',
        ];

        foreach ($vendor_styles as $handle => $file) {
            wp_enqueue_style($handle, $style_base . $file, ['wp-blog-bs5-bootstrap'], $theme_version);
        }

        wp_enqueue_style(
            'wp-blog-bs5-ionicons',
            'https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.10-0/css/ionicons.min.css',
            ['wp-blog-bs5-bootstrap'],
            '4.5.10-0'
        );

        $additional_styles = [
            'wp-blog-bs5-main'       => 'main.css',
            'wp-blog-bs5-color'      => 'color.css',
            'wp-blog-bs5-responsive' => 'responsive.css',
            'wp-blog-bs5-widgets'    => 'widgets.css',
            'wp-blog-bs5-style'      => 'style.css',
        ];

        foreach ($additional_styles as $handle => $file) {
            wp_enqueue_style($handle, $style_base . $file, ['wp-blog-bs5-bootstrap'], $theme_version);
        }

        wp_enqueue_script(
            'wp-blog-bs5-modernizr',
            $script_base . 'vendor/modernizr-3.6.0.min.js',
            [],
            '3.6.0',
            false
        );

        wp_enqueue_script('jquery');

        $vendor_scripts = [
            'wp-blog-bs5-popper'            => ['vendor/popper.min.js', ['jquery']],
            'wp-blog-bs5-bootstrap'         => ['vendor/bootstrap.min.js', ['jquery', 'wp-blog-bs5-popper']],
            'wp-blog-bs5-slick'             => ['vendor/slick.min.js', ['jquery']],
            'wp-blog-bs5-slicknav'          => ['vendor/jquery.slicknav.js', ['jquery']],
            'wp-blog-bs5-owl-carousel'      => ['vendor/owl.carousel.min.js', ['jquery']],
            'wp-blog-bs5-scrollup'          => ['vendor/jquery.scrollUp.min.js', ['jquery']],
            'wp-blog-bs5-counterup'         => ['vendor/jquery.counterup.min.js', ['jquery']],
            'wp-blog-bs5-waypoints'         => ['vendor/waypoints.min.js', ['jquery']],
            'wp-blog-bs5-magnific-popup'    => ['vendor/jquery.magnific-popup.js', ['jquery']],
            'wp-blog-bs5-nice-select'       => ['vendor/jquery.nice-select.min.js', ['jquery']],
            'wp-blog-bs5-sticky'            => ['vendor/jquery.sticky.js', ['jquery']],
            'wp-blog-bs5-theia-sticky'      => ['vendor/jquery.theia.sticky.js', ['jquery']],
            'wp-blog-bs5-scrollbar'         => ['vendor/perfect-scrollbar.js', ['jquery']],
            'wp-blog-bs5-ticker'            => ['vendor/jquery.ticker.js', ['jquery']],
            'wp-blog-bs5-vticker'           => ['vendor/jquery.vticker-min.js', ['jquery']],
            'wp-blog-bs5-headline'          => ['vendor/animated.headline.js', ['jquery']],
            'wp-blog-bs5-wow'               => ['vendor/wow.min.js', ['jquery']],
        ];

        foreach ($vendor_scripts as $handle => $data) {
            [$path, $deps] = $data;
            wp_enqueue_script($handle, $script_base . $path, $deps, $theme_version, true);
        }

        wp_enqueue_script(
            'wp-blog-bs5-main',
            $script_base . 'main.js',
            ['jquery', 'wp-blog-bs5-bootstrap'],
            $theme_version,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'wp_blog_bs5_assets');

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

if (! function_exists('wp_blog_bs5_asset_version')) {
    /**
     * Resolve an asset version using the file modification time when possible.
     */
    function wp_blog_bs5_asset_version(string $relative_path, string $fallback): string
    {
        $path = get_theme_file_path($relative_path);

        if (file_exists($path)) {
            $mtime = filemtime($path);
            if ($mtime) {
                return (string) $mtime;
            }
        }

        return $fallback;
    }
}

if (! function_exists('wp_blog_bs5_assets')) {
    /**
     * Enqueue theme styles and scripts.
     */
    function wp_blog_bs5_assets(): void
    {
        $theme = wp_get_theme();
        $theme_version = $theme->get('Version') ?: '1.0.0';

        wp_enqueue_style(
            'wp-blog-bs5-google-fonts',
            'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Roboto:wght@400;500;700&display=swap',
            [],
            null
        );

        $styles = [
            'wp-blog-bs5-bootstrap'        => [
                'path' => 'assets/css/vendor/bootstrap.min.css',
                'deps' => ['wp-blog-bs5-google-fonts'],
            ],
            'wp-blog-bs5-animate'          => [
                'path' => 'assets/css/vendor/animate.min.css',
            ],
            'wp-blog-bs5-fontawesome'      => [
                'path' => 'assets/css/vendor/fontawesome-all.min.css',
            ],
            'wp-blog-bs5-themify'          => [
                'path' => 'assets/css/vendor/themify-icons.css',
            ],
            'wp-blog-bs5-flaticon'         => [
                'path' => 'assets/css/vendor/fonts/flaticon.css',
            ],
            'wp-blog-bs5-material-icons'   => [
                'path' => 'assets/css/vendor/material-icons.min.css',
            ],
            'wp-blog-bs5-weather-icons'    => [
                'path' => 'assets/css/vendor/weather-icons.min.css',
            ],
            'wp-blog-bs5-perfect-scrollbar'=> [
                'path' => 'assets/css/vendor/perfect-scrollbar.css',
            ],
            'wp-blog-bs5-owl-carousel'     => [
                'path' => 'assets/css/vendor/owl.carousel.min.css',
            ],
            'wp-blog-bs5-slick'            => [
                'path' => 'assets/css/vendor/slick.css',
            ],
            'wp-blog-bs5-slicknav'         => [
                'path' => 'assets/css/vendor/slicknav.css',
            ],
            'wp-blog-bs5-magnific-popup'   => [
                'path' => 'assets/css/vendor/magnific-popup.css',
            ],
            'wp-blog-bs5-nice-select'      => [
                'path' => 'assets/css/vendor/nice-select.css',
            ],
            'wp-blog-bs5-ticker-style'     => [
                'path' => 'assets/css/vendor/ticker-style.css',
            ],
            'wp-blog-bs5-ionicons'         => [
                'src'  => 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.10-0/css/ionicons.min.css',
                'ver'  => '4.5.10-0',
                'deps' => [],
            ],
        ];

        foreach ($styles as $handle => $data) {
            $deps = $data['deps'] ?? ['wp-blog-bs5-bootstrap'];

            if (isset($data['src'])) {
                wp_enqueue_style($handle, $data['src'], $deps, $data['ver']);
                continue;
            }

            $relative_path = $data['path'];
            $src = get_theme_file_uri($relative_path);
            $version = wp_blog_bs5_asset_version($relative_path, $theme_version);

            wp_enqueue_style($handle, $src, $deps, $version);
        }

        $style_dependencies = array_unique(array_merge(['wp-blog-bs5-google-fonts'], array_keys($styles)));

        $additional_styles = [
            'wp-blog-bs5-main'       => 'assets/css/main.css',
            'wp-blog-bs5-color'      => 'assets/css/color.css',
            'wp-blog-bs5-responsive' => 'assets/css/responsive.css',
            'wp-blog-bs5-widgets'    => 'assets/css/widgets.css',
            'wp-blog-bs5-style'      => 'assets/css/style.css',
        ];

        foreach ($additional_styles as $handle => $relative_path) {
            $src = get_theme_file_uri($relative_path);
            $version = wp_blog_bs5_asset_version($relative_path, $theme_version);
            wp_enqueue_style($handle, $src, $style_dependencies, $version);
        }

        wp_enqueue_script(
            'wp-blog-bs5-modernizr',
            get_theme_file_uri('assets/js/vendor/modernizr-3.6.0.min.js'),
            [],
            '3.6.0',
            false
        );

        wp_enqueue_script('jquery');

        $scripts = [
            'wp-blog-bs5-popper'         => [
                'path' => 'assets/js/vendor/popper.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-bootstrap'      => [
                'path' => 'assets/js/vendor/bootstrap.min.js',
                'deps' => ['jquery', 'wp-blog-bs5-popper'],
            ],
            'wp-blog-bs5-slick'          => [
                'path' => 'assets/js/vendor/slick.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-slicknav'       => [
                'path' => 'assets/js/vendor/jquery.slicknav.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-owl-carousel'   => [
                'path' => 'assets/js/vendor/owl.carousel.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-scrollup'       => [
                'path' => 'assets/js/vendor/jquery.scrollUp.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-counterup'      => [
                'path' => 'assets/js/vendor/jquery.counterup.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-waypoints'      => [
                'path' => 'assets/js/vendor/waypoints.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-magnific-popup' => [
                'path' => 'assets/js/vendor/jquery.magnific-popup.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-nice-select'    => [
                'path' => 'assets/js/vendor/jquery.nice-select.min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-sticky'         => [
                'path' => 'assets/js/vendor/jquery.sticky.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-theia-sticky'   => [
                'path' => 'assets/js/vendor/jquery.theia.sticky.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-scrollbar'      => [
                'path' => 'assets/js/vendor/perfect-scrollbar.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-ticker'         => [
                'path' => 'assets/js/vendor/jquery.ticker.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-vticker'        => [
                'path' => 'assets/js/vendor/jquery.vticker-min.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-headline'       => [
                'path' => 'assets/js/vendor/animated.headline.js',
                'deps' => ['jquery'],
            ],
            'wp-blog-bs5-wow'            => [
                'path' => 'assets/js/vendor/wow.min.js',
                'deps' => ['jquery'],
            ],
        ];

        foreach ($scripts as $handle => $data) {
            $relative_path = $data['path'];
            $src = get_theme_file_uri($relative_path);
            $version = wp_blog_bs5_asset_version($relative_path, $theme_version);
            wp_enqueue_script($handle, $src, $data['deps'], $version, true);
        }

        wp_enqueue_script(
            'wp-blog-bs5-main',
            get_theme_file_uri('assets/js/main.js'),
            ['jquery', 'wp-blog-bs5-bootstrap'],
            wp_blog_bs5_asset_version('assets/js/main.js', $theme_version),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'wp_blog_bs5_assets');

if (! function_exists('wp_blog_bs5_resource_hints')) {
    /**
     * Improve Google Fonts loading by preconnecting to the font CDN.
     */
    function wp_blog_bs5_resource_hints(array $hints, string $relation_type): array
    {
        if ('preconnect' === $relation_type && wp_style_is('wp-blog-bs5-google-fonts', 'queue')) {
            $hints[] = [
                'href'        => 'https://fonts.gstatic.com',
                'crossorigin' => true,
            ];
        }

        return $hints;
    }
}
add_filter('wp_resource_hints', 'wp_blog_bs5_resource_hints', 10, 2);

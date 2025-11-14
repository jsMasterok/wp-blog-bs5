<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $manifest_path = get_template_directory() . '/site.webmanifest';
    if (file_exists($manifest_path)) :
        ?>
        <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/site.webmanifest'); ?>">
    <?php
    endif;
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/imgs/favicon.svg'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main class="">

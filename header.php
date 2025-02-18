<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @package qtwp
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     */

    use qtwp\lib\HTML;
    use qtwp\Theme;
?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" disabled>
    <meta name="google-site-verification" content="bnpifsTrLt1a5P5I_4aO_-2Xr5bFoWsgthFmKMaiatk" />
    <?php wp_head();?>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap"
        rel="stylesheet">
    <?php echo Theme::get_settings('header scripts') ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <header class="headroom">
            <div class="wrapper">
                <div class="hcol left">
                    <?php echo HTML::site_logo() ?>
                    <div class="toggle">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="hcol"><?php echo HTML::nav_menu( 'header' ) ?></div>
                    <div class="hcol btn-holder">
                        <?php echo HTML::button_group( ['buttons' => Theme::get_settings( 'header_buttons' )] ) ?>
                    </div>
                </div>
            </div>
        </header>
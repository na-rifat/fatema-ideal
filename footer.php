<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @package qtwp
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     */

    use qtwp\Theme;
    use qtwp\lib\HTML;
?>
<footer>
    <div class="container">
        <div class="upper">
            <div class="fcol footer-text col-lg-3">
                <div class="logo-wrapper">
                    <?php echo HTML::image( [ 'image' => Theme::get_settings( 'footer logo' ) ] ) ?>
                </div>
                <p class="pt-2"><?php echo Theme::get_settings( 'footer text' ) ?></p>
            </div>
            <div class="fcol col-lg-4">
                <?php echo HTML::render_footer_menus() ?>
            </div>
            <div class="fcol col-lg-3">
                <h3>Contact Us</h3>    
            <?php echo HTML::render_contacts( Theme::get_settings( 'footer contacts' ) ) ?>
            </div>
        </div>
        <div class="bottom">
            <?php echo HTML::render_socials( Theme::get_settings( 'social icons' ) ) ?>
            <p class="copyright"><?php echo Theme::get_settings( 'copyright' ) ?></p>
            <div class="fcol"><?php echo HTML::nav_menu( 'footer' ) ?></div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
</body>


<?php wp_footer()?>

</html>
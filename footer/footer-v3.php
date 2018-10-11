<?php
/**
 * Created by PhpStorm.
 * User: HienTV
 * Date: 5/4/2018
 * Time: 11:44 AM
 */

$show_widget_footer  = Inwave_Helper::getPostOption( 'show_widget_footer', 'show_widget_footer' );
?>
<footer class="iw-footer iw-footer-v3">
    <div class="iw-footer-middle" <?php echo (Inwave_Helper::getThemeOption( 'bg_footer_v3' )) ? 'style="background-image: url(' .( Inwave_Helper::getThemeOption( 'bg_footer_v3' ) ). ')"' : ''; ?>>
        <div class="container">
            <div class="logo-footer">
                <?php if ( Inwave_Helper::getThemeOption( 'footer-logo-3' ) ): ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>"><img src="<?php echo( Inwave_Helper::getThemeOption( 'footer-logo-3' ) ); ?>" alt="footer-logo.png" /></a>
                <?php else: ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/images/footer-logo-3.png"; ?>" alt="footer-logo.png" /></a>
                <?php endif; ?>
            </div>

            <?php
            if ( is_active_sidebar( 'footer-widget-v3' ) && $show_widget_footer && $show_widget_footer != 'no' ) {
                dynamic_sidebar( 'footer-widget-v3' );
            }
            if ( Inwave_Helper::getThemeOption( 'footer-copyright' ) ) { ?>
                <div class="iw-copy-right default">
                    <?php echo wp_kses_post( stripslashes(Inwave_Helper::getThemeOption( 'footer-copyright' )) ); ?>
                </div>
                <div class="iw-copy-right dashboard">
                    <div class="copyright"><?php echo wp_kses_post( stripslashes(Inwave_Helper::getThemeOption( 'footer-copyright' )) ) ?></div>
                </div>
            <?php
            }
            if ( inwave_get_social_link() ) {
                ?>
                <div class="iw-social-footer-link">
                    <?php echo inwave_get_social_link(); ?>
                </div>
            <?php
            } ?>

            <?php if ( Inwave_Helper::getThemeOption( 'show_back_to_top' ) ) { ?>
                <a href="#" id="scroll-to-top"><i class="fa ion-android-arrow-up" aria-hidden="true"></i></a>
            <?php } ?>

        </div>
    </div>
</footer>

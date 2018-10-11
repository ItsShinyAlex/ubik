<?php
/**
 * Created by PhpStorm.
 * User: TruongDX
 * Date: 11/10/2015
 * Time: 11:44 AM
 */
?>
<footer class="iw-footer iw-footer-v2">
	<?php if ( Inwave_Helper::getThemeOption( 'show_top_footer_2' ) && ( is_active_sidebar( 'footer-widget-5' ) || is_active_sidebar( 'footer-widget-6' ) || is_active_sidebar( 'footer-widget-7' ) || is_active_sidebar( 'footer-widget-8' ) ) ) { ?>
		<div class="iw-footer-top">
			<div class="container">
				<div class="row">
					<?php
					switch ( Inwave_Helper::getThemeOption( 'footer_number_widget_2' ) ) {
						case '1':
							dynamic_sidebar( 'footer-widget-5' );
							break;
						case '2':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-5' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-6' );
							echo '</div>';
							break;
						case '3':
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-5' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-6' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-7' );
							echo '</div>';
							break;
						case '4':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-left">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-5' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-6' );
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-right">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-7' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-8' );
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							break;
					}
					?>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if ( Inwave_Helper::getThemeOption( 'show_bottom_footer_2' ) && ( is_active_sidebar( 'footer-widget-9' ) || is_active_sidebar( 'footer-widget-10' ) || is_active_sidebar( 'footer-widget-11' ) || is_active_sidebar( 'footer-widget-12' ) ) ) { ?>
		<div class="iw-footer-middle">
			<div class="container">
				<div class="row">
					<?php
					switch ( Inwave_Helper::getThemeOption( 'footer_number_widget_2' ) ) {
						case '1':
							dynamic_sidebar( 'footer-widget-9' );
							break;
						case '2':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-9' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-10' );
							echo '</div>';
							break;
						case '3':
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-9' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-10' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-11' );
							echo '</div>';
							break;
						case '4':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-left">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-9' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-10' );
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-right">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-11' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-12' );
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							break;
					}
					?>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ( Inwave_Helper::getThemeOption( 'footer-copyright' ) ) { ?>
		<div class="iw-copy-right v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 <?php echo Inwave_Helper::getThemeOption( 'copyright_text_align_2' ) == 'center' ? 'text-center' : 'pull-' . Inwave_Helper::getThemeOption( 'copyright_text_align_2' ); ?>">
						<div class="copyright"><?php echo wp_kses_post( stripslashes(Inwave_Helper::getThemeOption( 'footer-copyright' )) ) ?></div>
						<?php if ( Inwave_Helper::getThemeOption( 'show_back_to_top' ) ) { ?>
							<a href="#" id="scroll-to-top"><i class="fa ion-android-arrow-up" aria-hidden="true"></i></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="iw-copy-right dashboard">
			<div class="copyright"><?php echo wp_kses_post( stripslashes(Inwave_Helper::getThemeOption( 'footer-copyright' )) ) ?></div>
		</div>
	<?php } ?>
</footer>

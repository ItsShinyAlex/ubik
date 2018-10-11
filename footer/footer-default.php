<?php
/**
 * Created by PhpStorm.
 * User: TruongDX
 * Date: 11/10/2015
 * Time: 11:44 AM
 */
?>
<footer class="iw-footer iw-footer-default">

<section id="contacto">
    <div class="container">
       
          <h2 class="padless">
                  CONTÁCTANOS
                </h2>
                <h3 class="padless">Comentanos que deseas y te ayudaremos.</h3>
        <div class="flex">
           
            <div class="col c-col">
             
                
                <div id="cform">
                     <?php echo do_shortcode("[caldera_form id=CF5b766908b0b8a]"); ?>
                </div>
                
                
            </div>
            
            
            
            <div class="col" id="mapa">

                <div class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.png" alt="WhatsApp">
                    </div>
                    <div class="col txt ">
                        <p class="white phone">
                            <a class="white" href="https://wa.me/525519587101">5519587101</a><br>
                        </p>
                    </div>
                </div>
               
                <div class="flex icons-bot">
                    <div class="col icon fcentered ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="teléfono">
                    </div>
                    <div class="col txt">
                        <p class="white phone">
                            <a class="white" href="tel:5513282907">01 (55) 1328 2907</a>
                        </p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="horario">
                    </div>
                    <div class="col txt fcentered">
                        <p >Lunes a Viernes de 9 a.m. 6 p.m. 
                        Sábado de 8 a.m. a  3 p.m.</p>
                    </div>
                </div>
                
                <div class="flex icons-bot">
                    <div class="col icon fcentered">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ubicacion.png" alt="ubicación">
                    </div>
                    <div class="col txt fcentered">
                        <p>Torre Médica Tuxpan Núm. 8, Col Roma Sur, CDMX, Piso 2
                        C.P 06760 
                        Estamos a 40 metros del Metro Chilpancingo</p>
                    </div>
                </div>
                
                <div class="flex mar-bot" id="followus">
                    <div class="col txt fcentered" id="siguenos">
                       <a href="https://business.facebook.com/Body-Balance-2160952823945786/" target="_blank"><p><b>SÍGUENOS</b></p></a>
                        
                    </div>
                    
                    <div class="col icon fcentered">
                       <a href="https://business.facebook.com/Body-Balance-2160952823945786/" target="_blank"> <img src="../img/twittericon.svg" alt="Twitter"></a>
                    
                    <div class="col icon fcentered">
                       <a href="https://business.facebook.com/Body-Balance-2160952823945786/" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/face.png" alt="Facebook"></a>
                       
                    </div>
                    <div class="col icon fcentered">
                       <a href="https://www.instagram.com/bodybalance.mx/?hl=es-la" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram-logo.png" alt="Facebook"></a>
                       
                    </div>
                </div>
                
                <div class="mar-bot pad-left">
                    <a href="https://goo.gl/maps/GapxsnfqX7y" class="btn-saqua" target="_blank">¿Cómo llegar?</a>    
                </div>
                
                
                <div class="fcentered">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d940.7823156044791!2d-99.16812294669649!3d19.406820165643005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff154ab64aa3%3A0xe5ddf2cd58d48680!2sTuxpan+8%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1536244758591" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
            
            
        </div>
        
                       
    </div>
    


</section>


	<?php if ( Inwave_Helper::getThemeOption( 'show_top_footer' ) ) { ?>
		<div class="iw-footer-top">
			<div class="container">
				<div class="row iw-row-eq-height">
					<div class="col-md-3 col-sm-3 col-xs-12 iw-border-right">
						<?php if ( Inwave_Helper::getThemeOption( 'footer-logo' ) ): ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>"><img src="<?php echo( Inwave_Helper::getThemeOption( 'footer-logo' ) ); ?>" alt="footer-logo.png" /></a>
						<?php else: ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo( 'name' ) ); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/images/footer-logo.png"; ?>" alt="footer-logo.png" /></a>
						<?php endif; ?>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<?php get_template_part( 'blocks/menu-footer' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if ( Inwave_Helper::getThemeOption( 'show_bottom_footer' ) && ( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) ) { ?>
		<div class="iw-footer-middle">
			<div class="container">
				<div class="row">
					<?php
					switch ( Inwave_Helper::getThemeOption( 'footer_number_widget' ) ) {
						case '1':
							dynamic_sidebar( 'footer-widget-1' );
							break;
						case '2':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-1' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-2' );
							echo '</div>';
							break;
						case '3':
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-1' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
							dynamic_sidebar( 'footer-widget-2' );
							echo '</div>';
							echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 last">';
							dynamic_sidebar( 'footer-widget-3' );
							echo '</div>';
							break;
						case '4':
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-left">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-1' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-2' );
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
							echo '<div class="footer-right">';
							echo '<div class="row">';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-3' );
							echo '</div>';
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
							dynamic_sidebar( 'footer-widget-4' );
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
		<div class="iw-copy-right default">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-<?php echo Inwave_Helper::getThemeOption( 'copyright_text_align' ); ?>">
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

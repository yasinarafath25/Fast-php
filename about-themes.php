<?php
//about theme info
add_action( 'admin_menu', 'skt_juice_and_shakes_lite_abouttheme' );
function skt_juice_and_shakes_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-juice-and-shakes-lite'), esc_html__('About Theme', 'skt-juice-and-shakes-lite'), 'edit_theme_options', 'skt_juice_and_shakes_lite_guide', 'skt_juice_and_shakes_lite_mostrar_guide');   
} 
//guidline for about theme
function skt_juice_and_shakes_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-juice-and-shakes-lite'); ?>
		   </div>
          <p><?php esc_html_e('Juice and Shakes Lite. Can be used for food and beverages industry it is good for juice bars, smoothie shops, milkshake outlets, and health drink cafes. It is vibrant and user friendly and editable with Elementor page builder. Its modern design, responsive layout, and customizable features make it an ideal choice for showcasing your menu of fresh blends, smoothies, cocktails, and beverages.

Compatible with WooCommerce, contact form plugins, SEO plugins it is also compatible with cache and optimization plugins. Whether you’re promoting your fruit drinks, protein shakes, or signature refreshments, this theme offers the perfect platform to engage your audience.','skt-juice-and-shakes-lite'); ?></p>
          <a href="<?php echo esc_url(SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-juice-and-shakes-lite'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-juice-and-shakes-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-juice-and-shakes-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-juice-and-shakes-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-juice-and-shakes-lite'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>
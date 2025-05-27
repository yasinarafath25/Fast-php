<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Juice and Shakes Lite
 */
$footer_text = get_theme_mod('footer_text');

$footerlogo = get_theme_mod('footer_logo_image'); 
$footerlogo_link = get_theme_mod('footer_logo_url'); 

$fb_link = get_theme_mod('fb_link'); 
$twitt_link = get_theme_mod('twitt_link');
$linked_link = get_theme_mod('linked_link');
$insta_link = get_theme_mod('insta_link');
$hidefooterbox = get_theme_mod('hide_footer_bar', 1);
?>

<div id="footer">
<?php if( $hidefooterbox == '') { ?>
<div id="footer-wrapper" class="ft-infobox">
		<div class="footerarea">
            <div class="container footerinfobox">
                <?php 
				if (!empty($footerlogo)) { ?>
                <div class="footer-logo">
                	<?php if (!empty($footerlogo_link)) { ?>
                	<a href="<?php echo esc_url($footerlogo_link); ?>">
                    <?php
					}
					?>
                    <img src="<?php echo esc_url($footerlogo); ?>" />
                    <?php 
					if (!empty($footerlogo_link)) { ?>
                    </a>
                    <?php } ?>
                 </div>
                 <?php } ?>
    <div class="footer-social">           
    <div class="social-icons">
		<?php 
		if (!empty($fb_link)) { ?>
        <a title="<?php echo esc_attr__('Facebook','skt-juice-and-shakes-lite'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
        <?php } 		
		if (!empty($twitt_link)) { ?>
        <a title="<?php echo esc_attr__('Twitter','skt-juice-and-shakes-lite'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
        <?php } 
		 if (!empty($linked_link)) { ?> 
        <a title="<?php echo esc_attr__('Linkedin','skt-juice-and-shakes-lite'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
        <?php } ?> 
        <?php
		if (!empty($insta_link)) { ?> 
        <a title="<?php echo esc_attr__('Instagram','skt-juice-and-shakes-lite'); ?>" class="insta" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a>
        <?php } ?>                   
      </div>
      </div> 
                <div class="clear"></div>
            </div>
        </div>
<?php } ?>


 
<div id="footer-wrapper">
  <div class="copyright-area">
    <?php if ( is_active_sidebar( 'fc-1-rfl' ) || is_active_sidebar( 'fc-2-rfl' ) || is_active_sidebar( 'fc-3-rfl' ) || is_active_sidebar( 'fc-4-rfl' )) : ?>
    <div class="footerarea">
      <div class="container footer ftr-widg">
        <div class="footer-row">
          <?php if ( is_active_sidebar( 'fc-1-rfl' ) ) : ?>
          <div class="cols-3 widget-column-1">
            <?php dynamic_sidebar( 'fc-1-rfl' ); ?>
          </div>
          <!--end .widget-column-1-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-2-rfl' ) ) : ?>
          <div class="cols-3 widget-column-2">
            <?php dynamic_sidebar( 'fc-2-rfl' ); ?>
          </div>
          <!--end .widget-column-2-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-3-rfl' ) ) : ?>
          <div class="cols-3 widget-column-3">
            <?php dynamic_sidebar( 'fc-3-rfl' ); ?>
          </div>
          <!--end .widget-column-3-->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'fc-4-rfl' ) ) : ?>
          <div class="cols-3 widget-column-3">
            <?php dynamic_sidebar( 'fc-4-rfl' ); ?>
          </div>
          <!--end .widget-column-3-->
          <?php endif; ?>
          <div class="clear"></div>
        </div>
      </div>
      <!--end .container--> 
    </div>
    <?php endif; ?>
  </div>
  <div class="copyright-wrapper">
    <div class="container">
      <div class="copyright-txt">
        <?php if (!empty($footer_text)) { ?>
        <?php echo esc_html($footer_text); ?>
        <?php } ?>
        <?php bloginfo('name'); ?>
        <?php esc_html_e('Theme By ','skt-juice-and-shakes-lite');?> <?php if( is_home() && is_front_page() || is_home() || is_front_page()) {?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/shop/free-smoothie-wordpress-theme/');?>" target="_blank">
        <?php esc_html_e('SKT Juice And Shakes Lite','skt-juice-and-shakes-lite'); ?>
        </a>
        <?php } else {?>
        <?php esc_html_e('SKT Juice And Shakes Lite','skt-juice-and-shakes-lite'); ?>
        <?php } ?>        
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--end #copyright-area-->
<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Juice and Shakes Lite
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="categories" class="widget"> 
        	<div class="wp-block-group">	
	        <h2 class="wp-block-heading"><?php esc_html_e( 'Categories', 'skt-juice-and-shakes-lite' ); ?></h2>
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
            </div>
        </aside>
         <aside id="meta" class="widget">    
         	<div class="wp-block-group">
         	<h2 class="wp-block-heading"><?php esc_html_e( 'Meta', 'skt-juice-and-shakes-lite' ); ?></h2>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
            </div>
        </aside>
    <?php endif; // end sidebar widget area ?>	
</div><!-- sidebar -->
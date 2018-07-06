<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package samito
 */
?>

	
</div><!-- #content -->

	
<footer id="colophon" class="site-footer" role="contentinfo">
	
<div id="footer-sidebar" class="widget-area clear container" role="complementary">
	
<?php do_action( 'before_sidebar' ); ?>
	<?php 
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
		
<div class="footer-column col-lg-4 col-md-4 col-sm-12 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-4'); 
		?> </div> <?php	
		}
			
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
	
	<div class="footer-columncol-lg-4 col-md-4 col-sm-12 col-xs-12"> <?php
		
	dynamic_sidebar( 'sidebar-5'); 
	
	?> </div> <?php	
		}

		if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
		
<div class="footer-columncol-lg-4 col-md-4 col-sm-12 col-xs-12"> <?php
			dynamic_sidebar( 'sidebar-6'); 

		?> </div> <?php	
		}
 ?> </div>



<div class="site-info">
	

<?php do_action( 'samito_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://www.samito.net/', 'samito' ) ); ?>" title="<?php esc_attr_e( 'samito', 'samito' ); 
?>" rel="generator"><?php printf( __( 'Copyright 2008-2015 samito.net  ' ), 'samito.net' ); ?></a>

	
</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
 
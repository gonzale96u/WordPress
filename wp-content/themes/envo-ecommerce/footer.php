</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if ( is_active_sidebar( 'envo-ecommerce-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="container-fluid clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'envo-ecommerce-footer-area' ); ?>
		</div>	
	</div>		
<?php } ?>
<?php do_action( 'envo_ecommerce_before_footer' ); ?> 
<footer >
	
</footer>
</div><!-- end page-wrap -->
<?php do_action( 'envo_ecommerce_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>

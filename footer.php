<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oracy
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
        <div class="container">
            <div class="row">
                <?php
                    if(is_active_sidebar('footer')){
                        dynamic_sidebar('footer');
                    }
                ?>
            </div>
        </div>
        
	</footer><!-- #colophon -->
	<?php 
        	$copyright_switcher = cs_get_option('copyright_switcher');
        	$copyright_text = cs_get_option('copyright_text');
         ?>
         <?php if($copyright_switcher == true) : ?>
        <div class="copyright-area">
        	<div class="container">
        		<div class="row">
        			<div class="col-12 text-center">
        				<p><?php echo esc_html( $copyright_text ); ?></p>
        			</div>
        		</div>
        	</div>
        </div>
    	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

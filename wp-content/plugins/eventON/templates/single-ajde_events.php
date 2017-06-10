<?php	
/*
 *	The template for displaying single event
 *
 *	Override this tempalte by coping it to ....yourtheme/eventon/single-ajde_events.php
 *	This template is built based on wordpress twentythirteen theme standards and may not fit your custom
 *	theme correctly, in which case you may have to add custom styles to fix style issues
 *
 *	@Author: AJDE
 *	@EventON
 *	@version: 2.5.3
 */
	
	$oneevent = new evo_sinevent();
	
	do_action('eventon_before_main_content');
	
?>	
<div id='main'>
	<div class='evo_page_body'>
		<div class='evo_page_content <?php echo ($oneevent->has_evo_se_sidebar())? 'evo_se_sidarbar':null;?>'>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

					<?php	

						do_action('eventon_single_after_content');

					?>		
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	
		<?php
			
			do_action('eventon_single_after_content_loop');

		?>
	</div><!-- #primary -->
	<div class="clear"></div>

</div>	
<?php 	do_action('eventon_after_main_content'); ?>
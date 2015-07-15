<?php
/**
 * Template part for displaying posts.
 *
 * @package Material Design
 */

?>
<div class="mdl-layout__tab-panel is-active">
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp' ); ?>>
		<div class="mdl-card mdl-cell mdl-cell--12-col">
			<div class="mdl-card__supporting-text">
				<header class="entry-header">
					<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php material_design_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'material-design' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					?>

					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'material-design' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php material_design_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</section><!-- #post-## -->
</div>
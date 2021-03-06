<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php
	global $post_count, $tipo;
	$utils = new utils;
	// $utils->debug( $tipo );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'prx-post', 'b40-1' ) ); ?>>
	<header class="entry-header">

		<?php 
			if( $post_count == 0 ) :
				if ( is_single() ) :
					the_title( '<h1 class="entry-title prx-post-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title prx-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			endif;
		?>

		<?php if( get_the_post_thumbnail_url() ) : ?>

			<?php if( !is_single() ) : ?>
				<a href="<?php echo the_permalink(  ) ?>">
			<?php endif; ?>
				<div class="prx-thumb <?php echo is_single() ? ' prx-thumb-single' : ''; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>);">
					<?php /* ?><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php the_title() ?>" class="img-responsive center-block prx-thumb-img"><?php */ ?>
				</div>
			<?php if( !is_single() ) : ?>
				</a>
			<?php endif; ?>

		<?php endif; ?>

		<?php 
			if( $post_count > 0 ) :
				if ( is_single() ) :
					the_title( '<h1 class="entry-title prx-post-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title prx-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			endif;
		?>

	</header><!-- .entry-header -->

	<?php if ( is_search() || !is_single() ) : ?>

		<div class="entry-summary prx-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

	<?php elseif ( is_single() ) : ?>

		<div class="prx-post-content">
			<?php the_content(); ?>
		</div>
		<!-- /.prx-post-content -->

		<?php if( $tipo ==  'curso' ) : ?>

			<div class="clearfix m-t-40"></div>

			<a href="#" class="prx-btn prx-btn-reverse prx-btn-inline" data-toggle="modal" data-target="#prx-modal-treinamento"><span class="p-l-80 p-r-80"><?php pll_e( 'Matricule-se', 'prx' ); ?></span></a>
		<?php endif; ?>

	<?php endif; ?>

	<?php /* ?>

	<footer class="entry-meta">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span class="cat-links"><?php echo __( 'Posted in:', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:', 'odin' ) . ' ', ', ', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'odin' ), __( '1 Comment', 'odin' ), __( '% Comments', 'odin' ) ); ?></span>
		<?php endif; ?>
	</footer>

	<?php */ ?>

</article><!-- #post-## -->

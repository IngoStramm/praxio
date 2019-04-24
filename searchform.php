<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php
	global $tipo;
	$utils = new utils;
	// $utils->debug( $tipo );
?>

<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'odin' ); ?>" />
		<?php if( $tipo != 'blog' ) : ?>
			<input type="hidden" name="post_type" value="<?php echo $tipo; ?>">
		<?php endif; ?>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="<?php esc_attr_e( 'Search', 'odin' ); ?>">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</span><!-- /input-group-btn -->
    </div><!-- /input-group -->
</form><!-- /searchform -->

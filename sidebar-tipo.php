<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php
	global $tipo;
	$utils = new Utils;
	// $utils->debug( $tipo );
?>

<aside id="sidebar" class="<?php echo odin_classes_page_sidebar_aside(); ?>" role="complementary">
	<?php
		if ( ! dynamic_sidebar( $tipo . '-widget' ) ) :
			dynamic_sidebar( 'main-sidebar' );
		endif;
	?>
</aside><!-- #sidebar -->

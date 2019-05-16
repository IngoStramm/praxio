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
	$curr_lang = pll_current_language( 'locale' );
	$rd_blog_id = laf_get_option( 'rd_blog_id_pt_BR' );
	// $utils->debug( $tipo );
?>

<?php if( $rd_blog_id && $curr_lang == 'pt_BR' && $tipo == 'blog' ) : ?>
	<dic class="clearfix m-t-80 visible-xs visible-sm"></dic>
	<div class="col-md-3 widget-area">
		<div class="rd-form m-b-40">
			<h3 class="rd-form-title"><?php pll_e( 'Contato', 'prx' ); ?></h3>
			<div class="rd-form-text">
			</div>
			<!-- /.rd-form-text -->
			<a href="#" class="prx-btn rd-form-btn-toggle" data-toggle="modal" data-target="#prx-modal-blog"><?php pll_e( 'Fale Conosco', 'prx' ); ?></a>
		</div>
	</div>
	<!-- /.col-md-3 widget-area -->
<?php endif; ?>



<aside id="sidebar" class="<?php echo odin_classes_page_sidebar_aside(); ?>" role="complementary">
	<?php
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
		}
	?>
</aside><!-- #sidebar -->

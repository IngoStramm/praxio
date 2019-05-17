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
	$rd_newsletter_id = laf_get_option( 'rd_newsletter_id_pt_BR' );
	// $utils->debug( $tipo );
?>

<aside id="sidebar" class="col-md-3 widget-area prx-sidebar" role="complementary">

	<?php if( $rd_blog_id && $curr_lang == 'pt_BR' && $tipo == 'blog' ) : ?>

		<dic class="clearfix m-t-80 visible-xs visible-sm"></dic>

		<div class="widget-area m-b-40">

			<div class="rd-form">

				<h3 class="rd-form-title"><?php pll_e( 'Contato', 'prx' ); ?></h3>

				<a href="#" class="prx-btn rd-form-btn-toggle" data-toggle="modal" data-target="#prx-modal-blog"><?php pll_e( 'Fale Conosco', 'prx' ); ?></a>

			</div>
			<!-- /.rd-form -->

		</div>
		<!-- /.col-md-3 widget-area -->
	<?php endif; ?>

	<?php if( $rd_newsletter_id && $curr_lang == 'pt_BR' && $tipo == 'blog' ) : ?>

		<dic class="clearfix m-t-80 visible-xs visible-sm"></dic>

			<div class="widget-area m-b-40">

				<div class="rd-form">

					<h3 class="rd-form-title"><?php pll_e( 'Newsletter', 'prx' ); ?></h3>
				
				</div>
				<!-- /.rd-form -->

				<div role="main" id="<?php echo $rd_newsletter_id; ?>"></div>

			</div>
			<!-- /.widget-area -->

	<?php endif; ?>

	<div class="hidden-xs hidden-print">
		<?php
			if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
				the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
				the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
				the_widget( 'WP_Widget_Tag_Cloud' );
			}
		?>
	</div>

</aside><!-- #sidebar -->

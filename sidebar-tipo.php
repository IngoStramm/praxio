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
	$rd_train_id = laf_get_option( 'rd_train_id_' . $curr_lang );
	$rd_train_text = laf_get_option( 'rd_train_text_' . $curr_lang );
	$rd_newsletter_id = laf_get_option( 'rd_newsletter_id_pt_BR' );
	// $utils->debug( $rd_newsletter_id );
?>

<aside id="sidebar" class="col-md-3 widget-area prx-sidebar" role="complementary">

	<?php if( $rd_newsletter_id && $curr_lang == 'pt_BR' && $tipo == 'revista' ) : ?>

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
			if ( ! dynamic_sidebar( $tipo . '-widget' ) ) :
				dynamic_sidebar( 'main-sidebar' );
			endif;
		?>
		
	</div>
	<!-- /.col-md-3 hidden-xs hidden-print widget-area prx-sidebar -->

</aside><!-- #sidebar -->

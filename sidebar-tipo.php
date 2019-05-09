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
	// $utils->debug( $rd_train_id );
?>

<?php if( $rd_train_id && $curr_lang == 'pt_BR' ) : ?>
	<dic class="clearfix m-t-80 visible-xs visible-sm"></dic>
	<div class="col-md-3 widget-area">
		<div class="rd-form m-b-40">
			<h3 class="rd-form-title"><?php pll_e( 'Agendar Demonstração', 'prx' ); ?></h3>
			<div class="rd-form-text">
				<?php echo $utils->nl2p( $rd_train_text ); ?>
			</div>
			<!-- /.rd-form-text -->
			<a href="#" class="prx-btn rd-form-btn-toggle" data-toggle="modal" data-target="#prx-modal-treinamento"><?php pll_e( 'Quero conhecer', 'prx' ); ?></a>
		</div>
	</div>
	<!-- /.col-md-3 widget-area -->
<?php endif; ?>
<aside id="sidebar" class="<?php echo odin_classes_page_sidebar_aside(); ?>" role="complementary">
	<?php
		if ( ! dynamic_sidebar( $tipo . '-widget' ) ) :
			dynamic_sidebar( 'main-sidebar' );
		endif;
	?>
</aside><!-- #sidebar -->

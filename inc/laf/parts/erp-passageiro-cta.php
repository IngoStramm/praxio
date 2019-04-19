<?php
	$erp_passageiro_cta_img = get_post_meta( $post_id, 'erp_passageiro_cta_img', true );
	$erp_passageiro_cta_text = get_post_meta( $post_id, 'erp_passageiro_cta_text', true );
	$erp_passageiro_cta_btn_txt = get_post_meta( $post_id, 'erp_passageiro_cta_btn_txt', true );
	$erp_passageiro_cta_btn_url = get_post_meta( $post_id, 'erp_passageiro_cta_btn_url', true );
?>

<div class="areas-de-atuacao-cta text-center" style="background-image: url(<?php echo $erp_passageiro_cta_img; ?>);">

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<h3 class="areas-de-atuacao-cta-text"><?php echo $erp_passageiro_cta_text; ?></h3>

				<div class="clearfix m-b-40"></div>

				<a href="<?php echo $erp_passageiro_cta_btn_url; ?>" class="areas-de-atuacao-cta-btn prx-btn prx-btn-inline"><?php echo $erp_passageiro_cta_btn_txt; ?></a>

			</div>
			<!-- /.col-md-8 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	
</div>
<!-- /.areas-de-atuacao-cta -->
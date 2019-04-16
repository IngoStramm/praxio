<?php 
	$utils = new Utils;
	$curr_lang = pll_current_language( 'locale' );
	$blog_title = laf_get_option( 'blog_title_' . $curr_lang );
	$blog_linha_1 = laf_get_option( 'blog_linha_1_' . $curr_lang );
	$blog_linha_2 = laf_get_option( 'blog_linha_2_' . $curr_lang );
	$blog_image = laf_get_option( 'blog_image_' . $curr_lang );
	//$utils->debug( is_home() );
?>

<div class="blog-header" style="background-image: url(<?php echo $blog_image; ?>);">


	<div class="container">
		<div class="row">
			<div class="row-height">
				<div class="col-md-4 col-md-height col-xs-bottom">
					<div class="clearfix m-t-80 hidden-md hidden-lg"></div>
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>
					<h3 class="blog-line-1"><?php echo is_search() ? pll__( 'Pesquisa por:' ) : $blog_linha_1; ?></h3>
					<h1 class="blog-line-2"><?php echo is_search() ? get_search_query() : $blog_linha_2; ?></h1>
					<div class="clearfix m-t-40 hidden-md hidden-lg"></div>
					<div class="clearfix m-t-80 hidden-xs hidden-sm"></div>
				</div>
				<!-- /.col-md-4 -->

				<div class="col-md-8 col-md-height col-xs-bottom">
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>
					<div class="blog-header-searchform"><?php get_search_form(); ?></div>
					<div class="clearfix m-t-80"></div>
				</div>
				<!-- /.col-md-8 -->
			</div>
			<!-- /.row-height -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	
</div>
<!-- /.blog-header -->

<div class="clearfix m-b-80"></div>
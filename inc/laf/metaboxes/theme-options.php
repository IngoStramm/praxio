<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Laf_Admin {

	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'laf_options';

	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'laf_option_metabox';

	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';

	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';

	/**
	 * Holds an instance of the object
	 *
	 * @var Laf_Admin
	 **/
	private static $instance = null;

	/**
	 * Constructor
	 * @since 0.1.0
	 */
	private function __construct() {
		// Set our title
		$this->title = __( 'Opções Gerais', 'laf' );
	}

	/**
	 * Returns the running object
	 *
	 * @return Laf_Admin
	 **/
	public static function get_instance() {
		if( is_null( self::$instance ) ) {
			self::$instance = new Laf_Admin();
			self::$instance->hooks();
		}
		return self::$instance;
	}

	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
	}


	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}

	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'delete_users', $this->key, array( $this, 'admin_page_display' ) );

		// Include CMB CSS in the head to avoid FOUC
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}

	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {

		// hook in our save notices
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );

		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );

		// Set our CMB2 fields


		$cmb->add_field( array(
			'name' => __( 'Blog (português)', 'laf' ),
			'id'   => 'titulo_blog_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Blog Título (português)', 'laf' ),
			'id'      => 'blog_title_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Blog Linha 1 (português)', 'laf' ),
			'id'      => 'blog_linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Blog Linha 2 (português)', 'laf' ),
			'id'      => 'blog_linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do Blog', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'blog_image_pt_BR',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Blog (inglês)', 'laf' ),
			'id'   => 'titulo_blog_en_US',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Blog Título (inglês)', 'laf' ),
			'id'      => 'blog_title_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Blog Linha 1 (inglês)', 'laf' ),
			'id'      => 'blog_linha_1_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Blog Linha 2 (inglês)', 'laf' ),
			'id'      => 'blog_linha_2_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do Blog (inglês)', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'blog_image_en_US',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );



		$cmb->add_field( array(
			'name' => __( 'Cursos e Workshops (português)', 'laf' ),
			'id'   => 'titulo_curso_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Cursos e Workshops Linha 1 (português)', 'laf' ),
			'id'      => 'curso_linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Cursos e Workshops Linha 2 (português)', 'laf' ),
			'id'      => 'curso_linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do Cursos e Workshops', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'curso_image_pt_BR',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );




		$cmb->add_field( array(
			'name' => __( 'Webinars (português)', 'laf' ),
			'id'   => 'titulo_webinar_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Webinars Linha 1 (português)', 'laf' ),
			'id'      => 'webinar_linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Webinars Linha 2 (português)', 'laf' ),
			'id'      => 'webinar_linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do Webinars', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'webinar_image_pt_BR',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );



		
		$cmb->add_field( array(
			'name' => __( 'E-mails e Comunicados (português)', 'laf' ),
			'id'   => 'titulo_comunicado_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'E-mails e Comunicados Linha 1 (português)', 'laf' ),
			'id'      => 'comunicado_linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'E-mails e Comunicados Linha 2 (português)', 'laf' ),
			'id'      => 'comunicado_linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do E-mails e Comunicados', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'comunicado_image_pt_BR',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );




		$cmb->add_field( array(
			'name' => __( 'Eventos (português)', 'laf' ),
			'id'   => 'titulo_evento_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Eventos Linha 1 (português)', 'laf' ),
			'id'      => 'evento_linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Eventos Linha 2 (português)', 'laf' ),
			'id'      => 'evento_linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Imagem do Eventos', 'laf' ),
			'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
			'id'   => 'evento_image_pt_BR',
			'type' => 'file',
			'text'				=> array(
				'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
			),
			'attributes' => array('placeholder' => 'http://'),
		) );





		$cmb->add_field( array(
			'name' => __( 'Rodapé (português)', 'laf' ),
			'id'   => 'titulo_footer_pt_BR',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Linha 1 (português)', 'laf' ),
			'id'      => 'linha_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Linha 2 (português)', 'laf' ),
			'id'      => 'linha_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Linha 3 (português)', 'laf' ),
			'id'      => 'linha_3_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Texto do botão #1 (português)', 'laf' ),
			'id'      => 'txt_btn_1_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Url do botão #1 (português)', 'laf' ),
			'id'   => 'url_btn_1_pt_BR',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name'    => __( 'Texto do botão #2 (português)', 'laf' ),
			'id'      => 'txt_btn_2_pt_BR',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Url do botão #2 (português)', 'laf' ),
			'id'   => 'url_btn_2_pt_BR',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Rodapé (inglês)', 'laf' ),
			'id'   => 'titulo_footer_en_US',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name'    => __( 'Linha 1 (inglês)', 'laf' ),
			'id'      => 'linha_1_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Linha 2 (inglês)', 'laf' ),
			'id'      => 'linha_2_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Linha 3 (inglês)', 'laf' ),
			'id'      => 'linha_3_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name'    => __( 'Texto do botão #1 (inglês)', 'laf' ),
			'id'      => 'txt_btn_1_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Url do botão #1 (inglês)', 'laf' ),
			'id'   => 'url_btn_1_en_US',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name'    => __( 'Texto do botão #2 (inglês)', 'laf' ),
			'id'      => 'txt_btn_2_en_US',
			'type'    => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Url do botão #2 (inglês)', 'laf' ),
			'id'   => 'url_btn_2_en_US',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Mídias Sociais', 'laf' ),
			'id'   => 'titulo_social_media',
			'type' => 'title',
		) );
		
		$cmb->add_field( array(
			'name' => __( 'Facebook', 'laf' ),
			'id'   => 'url_facebook',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Linkedin', 'laf' ),
			'id'   => 'url_linkedin',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Twitter', 'laf' ),
			'id'   => 'url_twitter',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Instagram', 'laf' ),
			'id'   => 'url_instagram',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		$cmb->add_field( array(
			'name' => __( 'Youtube', 'laf' ),
			'id'   => 'url_youtube',
			'type' => 'text_url',
			'attributes' => array('placeholder' => 'http://'),
		) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Logo do Topo', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'header_logo',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Ícone do Topo', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'header_icon',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Logo do Rodapé', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'footer_logo',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Ícone do Rodapé', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'footer_icon',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Imagem de fundo do Rodapé', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'footer_bg',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Imagem padrão do Cabeçalho para as telas que não possuem uma imagem definida.', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'placeholder_bg_header',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Banner de Garantias', 'laf' ),
		// 	'id'   => 'titulo_banner_garantia',
		// 	'type' => 'title',
		// ) );
		
		// $cmb->add_field( array(
		// 	'name' => __( 'Versão Desktop da imagem do Banner de Garantia.', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'banner_img_desktop',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Versão Mobile da imagem do Banner de Garantia.', 'laf' ),
		// 	'desc' => __( 'Faça o upload de uma imagem ou digite uma URL.', 'laf' ),
		// 	'id'   => 'banner_img_mobile',
		// 	'type' => 'file',
		// 	'text'				=> array(
		// 		'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		// 	),
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Mídias Sociais', 'laf' ),
		// 	'id'   => 'titulo_social_media',
		// 	'type' => 'title',
		// ) );
		
		// $cmb->add_field( array(
		// 	'name' => __( 'Facebook', 'laf' ),
		// 	'desc' => __( 'Url da página do Facebook', 'laf' ),
		// 	'id'   => 'facebook_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Linkedin', 'laf' ),
		// 	'desc' => __( 'Url do Linkedin', 'laf' ),
		// 	'id'   => 'linkedin_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Google Plus', 'laf' ),
		// 	'desc' => __( 'Url do Google Plus', 'laf' ),
		// 	'id'   => 'gplus_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Pinterest', 'laf' ),
		// 	'desc' => __( 'Url do Pinterest', 'laf' ),
		// 	'id'   => 'pinterest_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Instagram', 'laf' ),
		// 	'desc' => __( 'Url do Instagram', 'laf' ),
		// 	'id'   => 'instagram_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Youtube', 'laf' ),
		// 	'desc' => __( 'Url do canal do Youtube', 'laf' ),
		// 	'id'   => 'youtube_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Twitter', 'laf' ),
		// 	'desc' => __( 'Url do Twitter', 'laf' ),
		// 	'id'   => 'twitter_url',
		// 	'type' => 'text_url',
		// 	'attributes' => array('placeholder' => 'http://'),
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Informações da empresa', 'laf' ),
		// 	'id'   => 'titulo_endereco',
		// 	'type' => 'title',
		// ) );

		// $cmb->add_field( array( 
		// 	'name'    => __( 'Rua', 'laf' ),
		// 	'id'      => 'rua',
		// 	'type'    => 'text'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Número', 'laf' ),
		// 	'id'      => 'numero',
		// 	'type'    => 'text_small'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Complemento', 'laf' ),
		// 	'id'      => 'complemento',
		// 	'type'    => 'text_medium'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Bairro', 'laf' ),
		// 	'id'      => 'bairro',
		// 	'type'    => 'text_medium'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Cidade', 'laf' ),
		// 	'id'      => 'cidade',
		// 	'type'    => 'text_medium'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Estado', 'laf' ),
		// 	'id'      => 'uf',
		// 	'type'    => 'text_small'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'CEP', 'laf' ),
		// 	'id'      => 'cep',
		// 	'type'    => 'text_medium',
		// 	'attributes'  => array(
		// 			'class'		  => 'cmb2-text-medium cep-input',
		// 	        'placeholder' => '00000-000',
		// 	    )
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Telefones', 'laf' ),
		// 	'id'      => 'telefones',
		// 	'type'    => 'text_medium',
		// 	'desc'       => __( 'O primeiro número telefone será considerado o telefone principal', 'laf' ),
		// 	'repeatable'      => true,
		// 	'attributes'  => array(
		// 			'class'		  => 'cmb2-text-medium world-fone-input',
		// 	        'placeholder' => '+55 (11) 12345-1234',
		// 	    ),
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'E-mail', 'laf' ),
		// 	'id'      => 'email',
		// 	'type'    => 'text_email',
		// 	'desc'       => __( 'O primeiro e-mail será considerado o e-mail principal', 'laf' ),
		// 	'repeatable'      => true
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Horário de Funcionamento', 'laf' ),
		// 	'id'      => 'horario_funcionamento',
		// 	'desc'       => __( 'Texto do Horário de Funcionamento exibido no Rodapé.', 'laf' ),
		// 	'type'    => 'text'
		// ) );

		// $cmb->add_field( array(
		// 	'name' => __( 'Mapa (Google Map)', 'laf' ),
		// 	'id'   => 'titulo_mapa',
		// 	'type' => 'title',
		// ) );
		
		// $cmb->add_field( array(
		// 	'name'    => __( 'Google Api Key', 'laf' ),
		// 	'id'      => 'google_api_key',
		// 	'desc'       => __( 'Chave do Google necessária para o funcionamento do mapa.', 'laf' ),
		// 	'type'    => 'text'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Latitude', 'laf' ),
		// 	'id'      => 'lat',
		// 	'desc'       => __( 'Usado para encontrar o endereço do Mapa', 'laf' ),
		// 	'type'    => 'text'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Longitude', 'laf' ),
		// 	'id'      => 'long',
		// 	'desc'       => __( 'Usado para encontrar o endereço do Mapa', 'laf' ),
		// 	'type'    => 'text'
		// ) );

		// $cmb->add_field( array(
		// 	'name'    => __( 'Texto #2 do Contato no Rodapé', 'laf' ),
		// 	'id'      => 'footer_text_2',
		// 	'type'    => 'text'
		// ) );

		/*$cmb->add_field( array(
			'name' => __( 'Horário de funcionamento', 'laf' ),
			'id'   => 'horario_funcionamento_titulo',
			'type' => 'title',
		) );

		$cmb->add_field( array(
			'name'    => __( 'A partir de:', 'laf' ),
			'id'      => 'time_begin',
			'type'    => 'text_time',
		) );

		$cmb->add_field( array(
			'name'    => __( 'Até:', 'laf' ),
			'id'      => 'time_end',
			'type'    => 'text_time'
		) );*/

	}

	/**
	 * Register settings notices for display
	 *
	 * @since  0.1.0
	 * @param  int   $object_id Option key
	 * @param  array $updated   Array of updated fields
	 * @return void
	 */
	public function settings_notices( $object_id, $updated ) {
		if ( $object_id !== $this->key || empty( $updated ) ) {
			return;
		}

		add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', 'laf' ), 'updated' );
		settings_errors( $this->key . '-notices' );
	}

	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}

		throw new Exception( 'Invalid property: ' . $field );
	}

}

/**
 * Helper function to get/return the Laf_Admin object
 * @since  0.1.0
 * @return Laf_Admin object
 */
function laf_admin() {
	return Laf_Admin::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function laf_get_option( $key = '' ) {
	return cmb2_get_option( laf_admin()->key, $key );
}

// Get it started
laf_admin();
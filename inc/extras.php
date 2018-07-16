<?php
/**
 * Register CPT
 *
 * @return void
 */
function aula_register_cpt() {

	// galerias.
    $args = array(
		'public' 		=> true,
		'has_archive' 	=> true,
		'label'  		=> 'Galerias',
		'menu_icon' 	=> 'dashicons-format-gallery',
		'menu_position' => 5,
		'supports'		=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'	=> array( 'category' ),
    );
	register_post_type( 'galeria', $args );
		
	// equipo.
	$args = array(
      	'public' 		=> true,
		'label'  		=> 'Equipo',
		'menu_icon' 	=> 'dashicons-id-alt',
		'menu_position' => 5,
		'supports'		=> array( 'title', 'editor', 'thumbnail' ),
    );
	register_post_type( 'equipo', $args );
}

add_action( 'init', 'aula_register_cpt' );

/**
 * PHP display all errors
 * 
 * @return void
 */
function aula_php_display_all_errors() {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}


/**
 * Create menu hooks.
 * 
 * @return void
 */
function aula_init_menus() {
	register_nav_menu('main-menu', __( 'Main Menu' ) );
}

add_action( 'init', 'aula_init_menus' );

/**
 * Get history posts
 * 
 * @return Array $data
 */
function aula_get_history_posts() {
	// display months in Spanish.
	setlocale( LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish' );
	$data 	= array();
	$args 	= array(
		'post_type' 		=> array( 'post', 'galeria' ),
		'posts_per_page' 	=> -1,
		'post_status' 		=> 'publish',
		'orderby'			=> 'date',
		'order'				=> 'DESC',
	);
	$posts = new WP_Query( $args );

	while ( $posts->have_posts() ) {
		$posts->the_post();
		$parsed_date 	= strtotime( get_the_date() );
		$post_data 		= array(
			'title' 	=> get_the_title(),
			'permalink' => get_permalink(),
		);
		$data[ date( 'Y', $parsed_date ) ][ iconv('ISO-8859-2', 'UTF-8', strftime( '%B', $parsed_date ) ) ][] = $post_data;
	}
	wp_reset_postdata();
	return $data;
}

/**
 * Get page title icon
 * 
 * Mostly used in module 17
 * 
 * @param String ( required ) $title Page title.
 * @return String $icon_class
 */
function aula_get_page_icon_class( $title ) {
	$icons = array(
		'galeria' 		=> 'fa-camera-retro',
		'aula' 			=> 'fa-map-o',
		'actividades' 	=> 'fa-sun-o',
		'equipo'		=> 'fa-users',
		'contacto'		=> 'fa-envelope-o',
		'search'		=> 'fa-search',
		'newsletter'	=> 'fa-paper-plane-o',
		'post'			=> 'fa-thumb-tack',
		'page'			=> 'fa-file-text-o',
	);

	$icon_class = ( isset( $icons[ $title ] ) ) ? $icons[ $title ] : 'fa-file-text-o';
	return $icon_class;
}

/**
*
* This function changes the logo in the wp-login page
*
* @return void
*/

function aula_login_logo() {
	
		$logo_url = wp_get_attachment_url( 1267 );
		?>
			<style type="text/css">
	
				#login h1 a, .login h1 a {
					background-image: url(<?php echo $logo_url; ?>);
					background-size: 200px;
					height: 200px;
					width: 200px;
				}
	
			</style>
		<?php
	}
	
add_action( 'login_enqueue_scripts', 'aula_login_logo' );

/**
 * Process contact form and send email to admins.
 * This function can work with both AJAX and normal HTTP requests.
 * 
 * When using AJAX response is sent back to the client using a JSON
 * object containing request status and comment data if success.
 * 
 * When using normal HTTP request user is redirected to the same page where
 * the form was originally submited and a status message will be displayed
 * there.
 * 
 * @return Array $response
 */
function aula_process_contact_form() {
	// correct form validation.
	if ( ! isset( $_POST['action'] ) || ! isset( $_POST['nonce'] ) || ! isset( $_POST['page-id'] ) ) {
		return;
	}

	if ( $_POST['action'] != 'contact-form' || ! wp_verify_nonce( $_POST['nonce'], 'contact-form' ) ) {
		return;
	}

	if ( empty( $_POST['g-recaptcha-response'] ) ) {
		aula_redirect_user( $_POST['page-id'], 'empty-ga-captcha' );
	}

	if ( ! isset( $_POST['name'] ) || ! isset( $_POST['message'] ) ) {
		aula_redirect_user( $_POST['page-id'] );
	}
	$page_id = (int) $_POST['page-id'];

	// validate data.
	$name 		= sanitize_text_field( $_POST['name'] );
	$message 	= sanitize_text_field( $_POST['message'] );
	$user_email = ( isset( $_POST['email'] ) && ! empty( $_POST['email'] ) && is_email( $_POST['email'] ) ) ? sanitize_email( $_POST['email'] ) : false;

	if ( empty( $name ) ) {
		aula_redirect_user( $page_id, 'empty-name' );
	}

	if ( empty( $message ) ) {
		aula_redirect_user( $page_id, 'empty-message' );
	}

	if ( $user_email !== false ) {
		$name .= ' ( ' . $user_email . ')';
	}
	
	// email only send to admins.
	$args = array(
		'role' => 'administrator',
	);
	$admins 		= get_users( $args );
	$admin_emails 	= array();
	foreach ( $admins as $admin_data ) {
		$admin_emails[] = $admin_data->data->user_email;
	}

	// send email.
	$to 		= implode( ',', $admin_emails );
	$subject 	= 'Nuevo mensaje de Aula de Fotografia Subterranea';
	$headers 	= array( 'Content-Type: text/html; charset=UTF-8' );
	$body = "
	 <p>Has recibido un nuevo mensaje de <b>" . $name . "</b> enviado desde la
	 pagina de contacto de Aula de Fotografia Subterranea.</p>
	<br/>
	 <p>'" . $message . "'</p>";
	
	if ( wp_mail( $to, $subject, $body, $headers ) !== false ) {
		aula_redirect_user( $page_id, 'message-sent' );
	}
	aula_redirect_user( $page_id, 'error-message' );
}

// basic process contact form when JS or Ajax request fails.
add_action( 'init', 'aula_process_contact_form' );

/**
 * User internal redirection to posts - pages.
 * Used to send notifications across redirections
 * after forms are filled, validated and sent.
 * 
 * @param int $post_id Post / Page to be redirected. Default 0.
 * @param String $not Notification to be sent. Default null.
 * @return void
 */
function aula_redirect_user( $post_id = 0, $not = null ) {
	$base_url = ( $post_id > 0 ) ? get_permalink( $post_id ) : get_home_url();
	
	if ( ! is_null( $not ) ) {
		$base_url = add_query_arg( 'not', $not, $base_url );
	}

	wp_safe_redirect( $base_url );
	exit;
}

/**
 * Display user notification
 * 
 * @param String ( required ) $key Notification key
 * @return Array $not_data
 */
function aula_display_user_notification( $key ) {
	$not_data = array(
		'message' 	=> '',
		'type' 		=> 'error',
	);

	switch( $key ) {
		case 'empty-name' :
			$not_data['message'] = 'El campo del nombre es obligatorio';
			break;
		case 'empty-message' :
			$not_data['message'] = 'El campo del mensaje es obligatorio';
			break;
		case 'error-message' :
			$not_data['message'] = 'Ha habido un error en el servidor. Prueba a mandar el mensaje otra vez y si el error persiste contacte via email con el adminsitrador del sitio';
			break;
		case 'empty-ga-captcha' :
			$not_data['message'] = 'Por favor complete el reCaptcha';
			break;
		case 'message-sent' :
			$not_data['message'] = 'Su mensaje se ha enviado con exito';
			$not_data['type']	 = 'success';
			break;
		case 'comment-published' : 
			$not_data['message'] = 'Su comentario ha sido publicado con exito';
			$not_data['type']    = 'success';
			break;
		case 'empty-terms' :
			$not_data['message'] = 'Es obligatorio aceptar los Terminos y Condiciones para usar un formulario en este sitio web';
			break;
		default :
			$not_data['message'] = 'Ha habido un error en el servidor. Prueba a mandar el mensaje otra vez y si el error persiste contacte via email con el adminsitrador del sitio';
			break;
	}
	return $not_data;
}

/**
 * Process comment form. Adds
 * comment if successfull
 * 
 * @return void
 */
function aula_process_comment_form() {	
	$is_ajax = false;
	if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'comment-form' ) {
		$is_ajax 	= true;
		$data 		= [];
		parse_str( $_POST['data'], $data );

		/**
		 * Overwrite post values with ajax-data values to ensure
		 * the script works with ajax too.
		 */
		foreach ( $data as $key => $value ) {
			$_POST[ $key ] = $value;
		}
	}
	if ( ! isset( $_POST['action'] ) || ! isset( $_POST['nonce'] ) || ! isset( $_POST['post-id'] ) || ! isset( $_POST['name'] ) || ! isset( $_POST['message'] ) || ! isset( $_POST['g-recaptcha-response'] ) || ! isset( $_POST['terms_and_conditions'] ) ) {
		return;
	}

	if ( $_POST['action'] !== 'comment-form' || ! wp_verify_nonce( $_POST['nonce'], 'comment-form' ) ) {
		return;
	}
	$post_id = (int) $_POST['post-id'];

	/*
	if ( $_POST['g-recaptcha-response'] == '' ) {
		if ( $is_ajax ) {
			aula_ajax_send_response( false, array( 'error-code' => 'empy-ga-captcha') );
		}
		aula_redirect_user( $post_id, 'empty-ga-captcha' );
	}
	*/

	if ( ! isset( $_POST['terms_and_conditions'] ) || $_POST['terms_and_conditions'] == '' ) {
		if ( $is_ajax ) {
			aula_ajax_send_response( false, array( 'error-code' => 'empty-terms') );
		}
		aula_redirect_user( $post_id, 'empty-terms' );
	}

	if ( empty( $_POST['name'] ) ) {
		if ( $is_ajax ) {
			aula_ajax_send_response( false, array( 'error-code' => 'empy-name') );
		}
		aula_redirect_user( $post_id, 'empty-name' );
	}

	if ( empty( $_POST['message'] ) ) {
		if ( $is_ajax ) {
			aula_ajax_send_response( false, array( 'error-code' => 'empty-message' ) );
		}
		aula_redirect_user( $post_id, 'empty-message' );
	}

	$name 		= sanitize_text_field( $_POST['name'] );
	$content 	= sanitize_text_field( $_POST['message'] );

	// insert comment into database.
	$time = current_time( 'mysql' );
	$args = array(
		'comment_post_ID' => $post_id,
		'comment_author'	=> $name,
		'comment_content' 	=> $content,
		'comment_date'		=> $time,
		'comment_approved'	=> 1,
	);

	if ( wp_insert_comment( $args ) !== false ) {
		if ( $is_ajax ) {
			// parse date.
			setlocale( LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish' );
			$args['comment_date'] = iconv('ISO-8859-2', 'UTF-8', strftime( '%d %B %Y', strtotime( $args['comment_date'] ) ) );
			aula_ajax_send_response( true, $args );
		}
		aula_redirect_user( $post_id, 'comment-published' );
	}
	aula_redirect_user( $post_id, 'error-message' );
}

// ajax process comment form.
add_action( 'wp_ajax_comment-form', 'aula_process_comment_form' );
add_action( 'wp_ajax_nopriv_comment-form', 'aula_process_comment_form' );

// standard http request process comment form.
add_action( 'init', 'aula_process_comment_form' );

/**
 * Set ajax response
 * 
 * @param boolean $status Response status.
 * @param array $data Extra data to be sent back to the client.
 * @return object
 */
function aula_ajax_send_response( $status, $data ) {
	$response = [
		'status' => $status,
		'data' 	 => $data,
	];
	echo json_encode( $response );
	exit;
}

/**
 * pre_get_posts function for aula
 * theme
 * 
 * @param Object ( required ) $query
 * @return Object $query
 */
function aula_pre_get_posts( $query ) {
	if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
		$query->set( 'post_type', array( 'post', 'page', 'galeria' ) );
		$query->set( 'posts_per_page', -1 );
	}
	return $query;
}

add_action( 'pre_get_posts', 'aula_pre_get_posts' );

/**
 * Move Yoast SEO metabox to the bottom
 * 
 * @return String
 */
function aula_move_yoast_seo_metabox() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'aula_move_yoast_seo_metabox' );
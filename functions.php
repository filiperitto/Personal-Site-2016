<?php

//require get_template_directory() . '/includes/function-admin.php';

add_action('after_setup_theme', 'custom_setup');

function custom_setup() {

    // Oculta a barra de admin no front
    add_filter('show_admin_bar', '__return_false');

    // Executa as função ao instalar o tema
    add_action('init', 'custom_init');

    // Insere a opção de imagens destacadas
    add_theme_support('post-thumbnails');
    add_image_size('home-thumbnails', 480, 480, array('center','bottom'));
    add_image_size('sidebar-thumbnails', 300, 195, true);
    add_image_size('post-thumbnails', 1000, 500, array('left','top'));

    // Insere a opção de menus
    add_theme_support('menus');


    /* Carrega scripts e estilos personalizados */
    add_action('wp_enqueue_scripts', 'custom_formats');
}

function custom_formats() {

    wp_register_style('main', PW_THEME_URL . 'assets/css/main.css', null, null, 'all');

    wp_register_script('esc-jquery', PW_THEME_URL . 'assets/js/vendor/jquery-1.12.0.min.js', null, null, true);
    wp_register_script('materialize', PW_THEME_URL . 'assets/js/materialize.min.js', array('esc-jquery'), null, true);
    wp_register_script('mixitup', PW_THEME_URL . 'assets/js/jquery.mixitup.min.js', array('esc-jquery'), null, true);
    wp_register_script('scrollSpeed', PW_THEME_URL . 'assets/js/jQuery.scrollSpeed.js', array('esc-jquery'), null, true);
    wp_register_script('main', PW_THEME_URL . 'assets/js/main.js', array('jquery'), null, true);


    wp_enqueue_style('main');


    wp_enqueue_script('esc-jquery');
    wp_enqueue_script('materialize');
    wp_enqueue_script('mixitup');
    wp_enqueue_script('scrollSpeed');
    wp_enqueue_script('main');

}


// Adiciona uma Div envolta do Iframe ;)
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);

function my_embed_oembed_html($html, $url, $attr, $post_id) {

  return '<div class="flex-video">' . $html . '</div>';

}

/*
// Adiciona uma Div envolta da IMG
function breezer_addDivToImage( $content ) {
   // A regular expression of what to look for.
   $pattern = '/(<img([^>]*)>)/i';
   // What to replace it with. $1 refers to the content in the first 'capture group', in parentheses above

   $replacement = '<p><div class="mockup-img">
                        <div class="border"></div>
                        $1
                    </div></p>';

   // run preg_replace() on the $content
   $content = preg_replace( $pattern, $replacement, $content );

   // return the processed content
   return $content;
}

add_filter( 'the_content', 'breezer_addDivToImage' );
*/

function custom_init() {
    // ============================
    // CRIA O CUSTOM POST TYPE BLOG
    // ============================
    $attr = array(
        'public' => true, //Tira as propriedades de exibição do site, não terá uma url para esse tipo de post
        'show_ui' => true, //Permite que seja exibido no admin
        'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'), // Exibe as informações necessárias, nesse caso: Título, Editor de Texto, Ordenação, Imagem destacada
        'taxonomies' => array('post_tag'),
        'labels' => array(
            'name' => 'Projetos',
            'singular_name' => 'Projetos'
        ),
    );
    register_post_type(CPT_PROJETO, $attr);

    // Permite que o wordpress não verifique sempre as opções de reescrita de URL, com isso sobrecarga desnecessária
    // Ele somente fará a verificação se o valor for diferente da definição
    // Isso permite que eu possa alterar a url de todos os posts de um tipo, desde que eu identifique na definição da função como 'second' ou sucessivamente
    if (get_option('custom_permalinks') !== CUSTOM_PERMALINKS) {
        update_option('custom_permalinks', CUSTOM_PERMALINKS);
        flush_rewrite_rules();
    }



    register_taxonomy("blog-categories", array(CPT_PROJETO), array(
        "hierarchical" => true,
        "label" => "Categories",
        "singular_label" => "Category",
        "rewrite" => array(
            'slug' => 'projetos',
            'with_front' => false)
            )
    );
}
define('CPT_PROJETO', 'projetos');
define('CUSTOM_PERMALINKS', 2);



define('PW_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('PW_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('PW_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('PW_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */

function new_excerpt_length($length) {
	return 13;
}
add_filter('excerpt_length', 'new_excerpt_length');

function widget_setup() {

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<div class="widget-box"><div class="title-widget">',
            'before_title' => '<h4>',
            'after_title' => '</h4></div><div class="body-widget">',
            'after_widget' => '</div></div>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Sidebar-blog-scetion',
            'id' => 'sidebar-2',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<div class="widget-box-blog"><div class="title">',
            'before_title' => '<h4>',
            'after_title' => '</h4></div><div class="body-widget">',
            'after_widget' => '</div><div class="gradient_Rrt"></div></div>'
        )
    );


}
add_action('widgets_init','widget_setup');


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
		'page_title' 	=> 'Filipe Ritto',
		'menu_title'	=> 'Filipe Ritto',
		'menu_slug' 	=> 'filipe-ritto',
		'capability'	=> 'edit_posts',
        'parent_slug'   => '',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração da Home',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'theme-home-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'filipe-ritto',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração do Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'filipe-ritto',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração da pagina de Sobre',
		'menu_title'	=> 'Sobre',
		'parent_slug'	=> 'theme-sobre-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'filipe-ritto',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuração da pagina de Contato',
		'menu_title'	=> 'Contato',
		'parent_slug'	=> 'theme-contato-settings',
		'capability'	=> 'edit_posts',
        'parent_slug'   => 'filipe-ritto',
	));

}

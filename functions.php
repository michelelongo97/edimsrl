<?php
/**
 * EDIM Srl - functions.php
 */

// Enqueue styles & scripts
function edimsrl_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'edimsrl-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;500&display=swap',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style('edimsrl-style', get_template_directory_uri() . '/assets/css/main.css', ['edimsrl-fonts'], '1.0.0');

    // Main JS
    wp_enqueue_script('edimsrl-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'edimsrl_scripts');

// Theme setup
function edimsrl_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Menu Principale', 'edimsrl'),
        'footer'  => __('Menu Footer', 'edimsrl'),
    ]);
}
add_action('after_setup_theme', 'edimsrl_setup');

// =============================================
// CPT: LAVORI
// =============================================
function edimsrl_register_cpt_lavori() {
    $labels = [
        'name'               => 'Lavori',
        'singular_name'      => 'Lavoro',
        'add_new'            => 'Aggiungi Lavoro',
        'add_new_item'       => 'Aggiungi Nuovo Lavoro',
        'edit_item'          => 'Modifica Lavoro',
        'new_item'           => 'Nuovo Lavoro',
        'view_item'          => 'Visualizza Lavoro',
        'search_items'       => 'Cerca Lavori',
        'not_found'          => 'Nessun lavoro trovato',
        'not_found_in_trash' => 'Nessun lavoro nel cestino',
        'menu_name'          => 'Lavori',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => ['slug' => 'lavori', 'with_front' => false],
        'supports'           => ['title', 'thumbnail', 'excerpt', 'editor'],
        'menu_icon'          => 'dashicons-building',
        'show_in_rest'       => true,
    ];

    register_post_type('lavori', $args);
}
add_action('init', 'edimsrl_register_cpt_lavori');
add_filter('use_block_editor_for_post_type', function($enabled, $post_type) {
    if ($post_type === 'lavori') return true;
    return $enabled;
}, 10, 2);

// Tassonomia: Categoria Lavori
function edimsrl_register_tax_lavori() {
    $labels = [
        'name'          => 'Categorie Lavori',
        'singular_name' => 'Categoria Lavoro',
        'search_items'  => 'Cerca Categorie',
        'all_items'     => 'Tutte le Categorie',
        'edit_item'     => 'Modifica Categoria',
        'add_new_item'  => 'Aggiungi Categoria',
        'menu_name'     => 'Categorie',
    ];

    register_taxonomy('categoria_lavori', ['lavori'], [
        'labels'       => $labels,
        'hierarchical' => true,
        'rewrite'      => ['slug' => 'categoria-lavori'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'edimsrl_register_tax_lavori');

// =============================================
// CPT: CERTIFICAZIONI
// =============================================
function edimsrl_register_cpt_certificazioni() {
    $labels = [
        'name'               => 'Certificazioni',
        'singular_name'      => 'Certificazione',
        'add_new'            => 'Aggiungi Certificazione',
        'add_new_item'       => 'Aggiungi Nuova Certificazione',
        'edit_item'          => 'Modifica Certificazione',
        'new_item'           => 'Nuova Certificazione',
        'view_item'          => 'Visualizza Certificazione',
        'search_items'       => 'Cerca Certificazioni',
        'not_found'          => 'Nessuna certificazione trovata',
        'not_found_in_trash' => 'Nessuna certificazione nel cestino',
        'menu_name'          => 'Certificazioni',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => ['slug' => 'certificazioni'],
        'supports'           => ['title', 'editor'],
        'menu_icon'          => 'dashicons-awards',
        'show_in_rest'       => true,
    ];

    register_post_type('certificazioni', $args);
}
add_action('init', 'edimsrl_register_cpt_certificazioni');

// =============================================
// HELPER: immagine di fallback
// =============================================
function edimsrl_get_thumbnail($post_id, $size = 'large') {
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, $size);
    }
    return get_template_directory_uri() . '/assets/images/placeholder.jpg';
}
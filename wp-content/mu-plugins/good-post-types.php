<?php 

function good_post_types(){
	register_post_type('fotos', array(
		/*'show_in_rest' => true,*/
		'supports' => array('title', 'thumbnail'),
		'rewrite' => array('slug' => 'foto'),
		'public' => true,
		'labels' => array(
            'name' => 'Fotos',
            'add_new_item' => 'Agregar Foto',
            'edit_item' => 'Editar Foto',
            'all_items' => 'Todas las Fotos',
            'singular_name' => 'Foto'
		),
		'menu_icon' => 'dashicons-camera-alt'
	));
}

	add_action('init','good_post_types');

?>
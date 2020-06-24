<?php
function my_scripts() {
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support('post-thumbnails');


function new_post_type(){
	register_post_type(
		'thanks',
  		array(
  			  'label'=> 'サンクスページ',
  			  'public' => true,
  			  'hierarchical'=> true,
  			  'has_archive' => true,
  			  'supports' => array(
  						 'title',
  						 'editor',
  						 // 'thumbnail',
  			  ),
  			  'menu_position' => 5
  		)
  	);
  }
  add_action('init', 'new_post_type');

 ?>

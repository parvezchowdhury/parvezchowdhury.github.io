<?php 
// colling stylesheet 
function colling_resourse(){
	wp_enqueue_style('style',get_stylesheet_uri(),(''),(1.0));
}
add_action('wp_enqueue_scripts','colling_resourse');
 
 
// register_nav_menus

function menu_setup(){ 
	register_nav_menus(array(
	'primary' =>__('primary_menu'),
	'footer' =>__('footer')
	)); 
}
add_action('after_theme_setup','menu_setup');


// thumbnail image 

 add_theme_support('post-thumbnails');	


	





//sideber 

function OurWidgetInit(){
	register_sidebar(array(
	'name' =>'primary sidebar',
	'id' =>'sidebar1',
	'before_widget' => '<div class="sidebar_single_area">',
	'after_widget' => '</div>',

	
	));	
	
}
add_action('widgets_init' , 'OurWidgetInit');


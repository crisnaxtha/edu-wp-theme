<?php
/**
 * Custom template widgets register for this theme
 *
 * 
 *
 * @package DEEP
 */
/**************** DEEPMALA REGISTER WIDGETS ***************************************/
 add_action('widgets_init', 'deepmala_widgets_init');
 function deepmala_widgets_init() {
    register_sidebar(array(
        'name' => __('Lochan Front-Page Section', 'lochan'),
        'id' => 'lochan_template_section',
        'description' => __('Shows widgets only on Lochan Template.', 'lochan'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    //Register Widget.
	register_widget( 'Page_Box_Widget' );
	register_widget( 'Page_Box_Two_Widget' );
	register_widget( 'Category_Box_Widget' );
	register_widget( 'Category_Box_Two_Widget' );
	register_widget( 'Youtube_Widget' );
 }
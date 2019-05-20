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

    register_sidebar(array(
        'name' => __('Lochan First Footer Section', 'lochan'),
        'id' => 'lochan_footer_section_1',
        'description' => __('Shows widgets on First Footer Section.', 'lochan'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Lochan Second Footer Section', 'lochan'),
        'id' => 'lochan_footer_section_2',
        'description' => __('Shows widgets on Second Footer Section', 'lochan'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Lochan Third Footer Section', 'lochan'),
        'id' => 'lochan_footer_section_3',
        'description' => __('Shows widgets on Third Footer Section', 'lochan'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('LO: Top Header Info', 'lochan'),
        'id' => 'lochan_header_info',
        'description' => __('Shows widgets on all page.', 'lochan'),
        'before_widget' => '<aside id="%1$s" class="widget widget_contact">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    //Register Widget.
    // register_widget( 'Slider_Widget' );
	register_widget( 'Page_Box_Widget' );
	register_widget( 'Page_Box_Two_Widget' );
	register_widget( 'Category_Box_Widget' );
	register_widget( 'Category_Box_Two_Widget' );
	register_widget( 'Youtube_Widget' );
 }
<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar Widgets', 'lm' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
			'name'          =>  esc_html__( 'Footer Widgets 1', 'lm' ),
			'id'            => 'footer-sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          =>  esc_html__( 'Footer Widgets 2', 'lm' ),
			'id'            => 'footer-sidebar-2',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          =>  esc_html__( 'Footer Widgets 3', 'lm' ),
			'id'            => 'footer-sidebar-3',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'lm_widgets_init' );

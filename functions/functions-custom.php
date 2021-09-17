<?php
/**
 * Add your own custom functions here
 * For example, your shortcodes...
 *
 */


/*==================================================================================
 SHORTCODES
==================================================================================*/


/* BUTTON
/––––––––––––––––––––––––*/
// Usage: [button link="https://twitter.com" text="Twitter"]
function shortcode_button($atts) {
  $link = $atts['link'];
  $text = $atts['text'];
  return '<a href="'.$link.'" class="button">'.$text.'</a>';
}
add_shortcode('button', 'shortcode_button');

// Logo du site
add_theme_support(
  'custom-logo', array(
      'flex-height' => true,
  )
);

// Page d'options
if(function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function inside_customize_register( $wp_customize ) {
     $wp_customize->add_setting('logo_secondary', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_secondary', array(
        'label'    => __('Logo secondaire', 'inside'),
        'section'  => 'title_tagline',
        'settings' => 'logo_secondary',
        'priority' => 8
    )));


}
add_action( 'customize_register', 'inside_customize_register' );



add_action('customize_register','mytheme_customizer_options');
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function mytheme_customizer_options( $wp_customize ) {
 $wp_customize->add_section('inside_calendly', array(
        'title'    => __('Calendly', 'inside'),
        'description' => '',
        'priority' => 120,
    ));
$wp_customize->add_setting('inside_calendly', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
   $wp_customize->add_control('inside_calendly', array(
        'label'      => __('Calendly', 'inside'),
        'section'    => 'inside_calendly',
        'settings'   => 'inside_calendly',
    ));

}

<?php

function modtherapy_customize_register( $wp_customize ) {
    
    $wp_customize->add_section( 'colors' , array(
        'title' =>  'Color Scheme',
    ) );
    
    $colors[] = array(
        'slug'=>'header_bg', 
        'default' => '#ccc',
        'label' => 'Header Background'
    );
    
    $colors[] = array(
        'slug'=>'footer_bg', 
        'default' => '#ccc',
        'label' => 'Footer Background'
    );
    
    $colors[] = array(
        'slug'=>'testimonial_bg', 
        'default' => '#ddd',
        'label' => 'Testimonial Widget Background'
    );
    
    $colors[] = array(
        'slug'=>'button_bg', 
        'default' => '#ddd',
        'label' => 'Button Color'
    );
    
    $colors[] = array(
        'slug'=>'button_bg_hover', 
        'default' => '#ccc',
        'label' => 'Button Hover Color'
    );
    
    $colors[] = array(
        'slug'=>'button_txt_color', 
        'default' => '#000',
        'label' => 'Button Text Color'
    );
    
    foreach( $colors as $color ) {

        $wp_customize->add_setting(
            $color['slug'], array(
                'default' => $color['default'],
                'type' => 'option', 
                'capability' =>  'edit_theme_options'
            )
        );
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $color['slug'], 
                array('label' => $color['label'], 
                'section' => 'colors',
                'settings' => $color['slug'])
            )
        );
    }
        
    $wp_customize->add_setting( 'modtherapy_logo' );
         
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'modtherapy_logo', 
    array(
        'label'    => __( 'Site Logo', 'modtherapy' ),
        'section'  => 'title_tagline',
        'settings' => 'modtherapy_logo',
    ) ) );
}
add_action( 'customize_register', 'modtherapy_customize_register' );

function modtherapy_customize_colors() {
    $header_bg = get_option('header_bg');
    $footer_bg = get_option('footer_bg');
    $testimonial_bg = get_option('testimonial_bg');
    $button_bg = get_option('button_bg');
    $button_bg_hover = get_option('button_bg_hover');
    $button_txt_color = get_option('button_txt_color');
    
    ?>
    <style>
        header {
            background-color: <?php echo $header_bg ?>;
        }
        
        .testimonial-widget {
            background-color: <?php echo $testimonial_bg ?>;
        }
        
        footer {
            background-color: <?php echo $footer_bg ?>;
        }
        .btn {
            background-color: <?php echo $button_bg ?>;
            color: <?php echo $button_txt_color ?>;
        }
        
        .btn:hover {
            background-color: <?php echo $button_bg_hover ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'modtherapy_customize_colors' );
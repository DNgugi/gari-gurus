<?php

class Gari_Customizer{
  public function __construct(){
    add_action( 'customize_register', array($this, 'register_customizer_sections'));
  }

  public function register_customizer_sections($wp_customize){
    //Add sections
    $this -> gari_theme_customizer_section($wp_customize);
    $this -> hero_section($wp_customize);
    $this -> cards_section($wp_customize);
    $this -> cta_section($wp_customize);
  }

  //Gari Customizer Panel to hold all other sections
  private function gari_theme_customizer_section($wp_customize){
      $wp_customize->add_panel( 'gari_theme_customizer_panel', array(
        'priority'       => 2,
        'capability'     => 'edit_theme_options',
        'title'      => __( 'Gari Theme Customizer', 'gari' ),
        'description' => __('Custom settings for Gari Theme.','gari')
      ));
  }
  //Hero Section, Settings and Controls
  private function hero_section($wp_customize){
     //Add section to panel
     $wp_customize->add_section( 'hero_section' , array(
      'title'      => __( 'Hero Section', 'gari' ),
      'priority'   => 30,
      'description' => __('Settings for the homepage hero section.','gari'),
      'panel' => 'gari_theme_customizer_panel',
      ));

    //Add Setting
    $wp_customize->add_setting( 'hero_text_setting' , array(
      'default' => 'Lorem ipsum dolor sit amet!',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
  
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_text', array(
      'label'      => __( 'Hero Text', 'gari' ),
      'section'    => 'hero_section',
      'settings'   => 'hero_text_setting',
      'type' => 'textarea'
    ) ) );
    //Add Setting
    $wp_customize->add_setting( 'hero_button_setting' , array(
      'default' => 'contact us',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_button', array(
      'label'      => __( 'Hero Button Text', 'gari' ),
      'section'    => 'hero_section',
      'settings'   => 'hero_button_setting',
    ) ) );

    //Add Setting
    $wp_customize->add_setting( 'hero_bg_url_setting' , array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'hero_bg_url', array(
      'label'      => __( 'Hero Background Image', 'gari' ),
      'section'    => 'hero_section',
      'settings'   => 'hero_bg_url_setting',
      'width' => 1200,
      'height' => 400
      
    ) ) );

    //Add Setting
    $wp_customize->add_setting( 'hero_button_url_setting' , array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_button_url', array(
      'label'      => __( 'Hero Button URL', 'gari' ),
      'section'    => 'hero_section',
      'settings'   => 'hero_button_url_setting',
      'type' => 'dropdown-pages'
    ) ) );  
  }

  //Cards Section, Settings and Controls
  private function cards_section($wp_customize){
      //Add Section to panel
      $wp_customize->add_section( 'cards_section' , array(
        'title'      => __( 'Featured Cards Section', 'gari' ),
        'priority'   => 31,
        'description' => __('Settings for the homepage featured cards.','gari'),
        'panel' => 'gari_theme_customizer_panel',
        ));
      
      //Add Setting
      $wp_customize->add_setting( 'card_icon_text' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_icon', array(
        'label'      => __( 'Card 1 Icon', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_icon_text',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_header_text' , array(
        'default' => 'Lorem ipsum dolor sit amet!',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_header', array(
        'label'      => __( 'Card 1 Header Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_header_text',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_body_text' , array(
        'default' => 'Lorem ipsum dolor sit amet! lorem lorem',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_body', array(
        'label'      => __( 'Card 1 Body Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_body_text',
        'type' => 'textarea'
      ) ) );
     

      //2ND CARD
      //Add Setting
      $wp_customize->add_setting( 'card_icon_text_2' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_icon_2', array(
        'label'      => __( 'Card 2 Icon', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_icon_text_2',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_header_text_2' , array(
        'default' => 'Lorem ipsum dolor sit amet!',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_header_2', array(
        'label'      => __( 'Card 2 Header Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_header_text_2',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_body_text_2' , array(
        'default' => 'Lorem ipsum dolor sit amet! lorem lorem',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_body_2', array(
        'label'      => __( 'Card 2 Body Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_body_text_2',
        'type' => 'textarea'
      ) ) );

      //3RD CARD
      //Add Setting
      $wp_customize->add_setting( 'card_icon_text_3' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_icon_3', array(
        'label'      => __( 'Card 3 Icon', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_icon_text_3',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_header_text_3' , array(
        'default' => 'Lorem ipsum dolor sit amet!',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_header_3', array(
        'label'      => __( 'Card 3 Header Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_header_text_3',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_body_text_3' , array(
        'default' => 'Lorem ipsum dolor sit amet! lorem lorem',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_body_3', array(
        'label'      => __( 'Card 3 Body Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_body_text_3',
        'type' => 'textarea'
      ) ) );

      //4TH CARD
      //Add Setting
      $wp_customize->add_setting( 'card_icon_text_4' , array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_icon_4', array(
        'label'      => __( 'Card 4 Icon', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_icon_text_4',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_header_text_4' , array(
        'default' => 'Lorem ipsum dolor sit amet!',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_header_4', array(
        'label'      => __( 'Card 4 Header Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_header_text_4',
        'type' => 'text'
      ) ) );

      //Add Setting
      $wp_customize->add_setting( 'card_body_text_4' , array(
        'default' => 'Lorem ipsum dolor sit amet! lorem lorem',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
      ));
  
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'card_body_4', array(
        'label'      => __( 'Card 4 Body Text', 'gari' ),
        'section'    => 'cards_section',
        'settings'   => 'card_body_text_4',
        'type' => 'textarea'
      ) ) );

  
  }

  //Hero Section, Settings and Controls
  private function cta_section($wp_customize){
     //Add section to panel
     $wp_customize->add_section( 'cta_section' , array(
      'title'      => __( 'Footer call to action (CTA) Section', 'gari' ),
      'priority'   => 32,
      'description' => __('Settings for the homepage footer call to action section.','gari'),
      'panel' => 'gari_theme_customizer_panel',
      ));

    //Add Setting
    $wp_customize->add_setting( 'cta_text_setting' , array(
      'default' => 'Lorem ipsum dolor sit amet!',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
  
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_text', array(
      'label'      => __( 'CTA Text', 'gari' ),
      'section'    => 'cta_section',
      'settings'   => 'cta_text_setting',
      'type' => 'textarea'
    ) ) );
    //Add Setting
    $wp_customize->add_setting( 'cta_button_setting' , array(
      'default' => 'contact us',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_button', array(
      'label'      => __( 'CTA Button Text', 'gari' ),
      'section'    => 'cta_section',
      'settings'   => 'cta_button_setting',
    ) ) );

    //Add Setting
    // $wp_customize->add_setting( 'hero_bg_url_setting' , array(
    //   'type' => 'theme_mod',
    //   'capability' => 'edit_theme_options'
    // ));
    // $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'hero_bg_url', array(
    //   'label'      => __( 'Hero Background Image', 'gari' ),
    //   'section'    => 'hero_section',
    //   'settings'   => 'hero_bg_url_setting',
    //   'width' => 1200,
    //   'height' => 400
      
    // ) ) );

    //Add Setting
    $wp_customize->add_setting( 'cta_button_url_setting' , array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_button_url', array(
      'label'      => __( 'CTA Button URL', 'gari' ),
      'section'    => 'cta_section',
      'settings'   => 'cta_button_url_setting',
      'type' => 'dropdown-pages'
    ) ) );  
  }

}
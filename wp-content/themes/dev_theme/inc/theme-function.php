<?php
function legacygroup_customizer_register($wp_customize){
  
  // add logo image
  $wp_customize -> add_section('legacygroup_header_area',array(
    'title' =>__( 'Header Area','legacygroup' ),
    'description' => 'If You interested to upload your header area, You can to it here.'
  ));

  $wp_customize -> add_setting('legacygroup_logo',array(
    'default'=> get_bloginfo( 'legacygroup_directory').'/image/logo png.png',
  ));

  $wp_customize -> add_control( new Wp_Customize_Image_Control($wp_customize,'legacygroup_logo',array(
    'label' => 'logo upload',
    'description'=>'If You interested to upload your header area, You can to it here.',
    'seeting' => 'legacygroup_logo',
    'section' => 'legacygroup_header_area',
  )));

  //footer area
  $wp_customize -> add_section('legacygroup_footer_option',array(
    'title' =>__( 'Footer Option','legacygroup' ),
    'description' => 'If You interested to change or update your footer seetings, You can do it.'
  ));

  $wp_customize -> add_setting('legacygroup_copyright_section',array(
    'default'=> '&copy; Copy Right 2022 | legacygroup Md',
  ));

  $wp_customize -> add_control( 'legacygroup_copyright_section',array(
    'label' => 'Copy Right Text',
    'description'=>'If need you can update your copyright text from here.',
    'seeting' => 'legacygroup_copyright_section',
    'section' => 'legacygroup_footer_option',
  ));


}
add_action( 'customize_register','legacygroup_customizer_register' );
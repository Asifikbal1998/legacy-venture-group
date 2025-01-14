<?php
//Register Sidebar
function legacygroup_widgets_register(){
    register_sidebar( array(
        'name'=>__('Sidebar Widget Area','legacygroup'),
        'id'=>'sidebar-1',
        'description'=>__('Apperas in the sidebar in blog page and also other page','legacygroup'),
        'before_widget'=>'<div class="clild_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h1 class="title">',
        'after_title'=>'</h1>',

    ));
    register_sidebar( array(
        'name'=>__('footer-1','legacygroup'),
        'id'=>'footer-1',
        'description'=>__('Apperas in the sidebar in blog page and also other page','legacygroup'),
        'before_widget'=>'<div class="clild_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h1 class="title">',
        'after_title'=>'</h1>',

    ));
    register_sidebar( array(
        'name'=>__('footer-2','legacygroup'),
        'id'=>'footer-2',
        'description'=>__('Apperas in the sidebar in blog page and also other page','legacygroup'),
        'before_widget'=>'<div class="clild_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h1 class="title">',
        'after_title'=>'</h1>',

    ));
    register_sidebar( array(
        'name'=>__('footer-3','legacygroup'),
        'id'=>'footer-3',
        'description'=>__('Apperas in the sidebar in blog page and also other page','legacygroup'),
        'before_widget'=>'<div class="clild_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h1 class="title">',
        'after_title'=>'</h1>',

    ));
    register_sidebar( array(
        'name'=>__('footer-4','legacygroup'),
        'id'=>'footer-4',
        'description'=>__('Apperas in the sidebar in blog page and also other page','legacygroup'),
        'before_widget'=>'<div class="clild_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h1 class="title">',
        'after_title'=>'</h1>',

    ));
}
add_action('widgets_init' , 'legacygroup_widgets_register');
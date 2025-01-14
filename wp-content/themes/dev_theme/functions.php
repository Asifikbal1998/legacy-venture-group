<?php

//get menu
include_once('inc/menu.php');

//get css & js file
include_once('inc/enqueue.php');

//get theme functions
include_once('inc/theme-function.php');

//widget call
include_once('inc/widget.php');

//feature image
include_once('inc/feature-img.php');

//disable gutenbarg
add_filter('use_block_editor_for_post', '__return_false');


//blewo two function only for dynamic menus li and a tag class add
//li class add
function atg_menu_classes($classes, $item, $args)
{
  if ($args->theme_location == 'Primary Menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


//   //anchor class add
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



//excerpt limit
function my_excerpt_length($length)
{
  return 12;
}
add_filter('excerpt_length', 'my_excerpt_length');



/***************************************Waker menu**************************************/
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    // Classes
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    // ID
    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';

    // Anchor Attributes
    $atts = array();
    $atts['href'] = !empty($item->url) ? $item->url : '';
    $atts['class'] = 'desktop-link';
    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
    }

    // Output
    $output .= $indent . '<li' . $id . $class_names . '>';

    // If the menu item has children, don't use a link
    if (in_array('menu-item-has-children', $classes)) {
      $output .= '<span class="parent-menu-item">' . apply_filters('the_title', $item->title, $item->ID) . ' <span class="dropdown-icon">+</span></span>';
      $output .= '<input type="checkbox" id="show-' . $item->ID . '">';
      $output .= '<label for="show-' . $item->ID . '">' . $item->title . '</label>';
    } else {
      $output .= '<a' . $attributes . '>';
      $output .= apply_filters('the_title', $item->title, $item->ID);
      $output .= '</a>';
    }
  }
}
/***************************************Waker menu**************************************/

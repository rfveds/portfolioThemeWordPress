<?php

// custom main menu walker
class Custom_Main_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

      if ($item->url && $item->url != '#') {
			$output .= '<a class="ff-sans-cond uppercase text-main letter-spacing-2" href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}

// works menu custom walker
class Custom_Works_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		$output .= "<button class='ff-sans-cond text-accent letter-spacing-2" .  implode(" ", $item->classes) . "'>";

      if ($item->url && $item->url != '#') {
			$output .= '<a class="ff-sans-cond text-main letter-spacing-2" href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}

// adds class active for current page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


function theme_support()
{
   add_theme_support('title-tag');
}

function theme_menus()
{

   $location = array(
      'primary' => "Primary Menu",
      'works-type-menu' => "Works Menu",
      'paintings-menu' => "Paintings Menu"
   );

   register_nav_menus($location);
}

add_action('init', 'theme_menus');

function theme_register_styles()
{
   wp_enqueue_style(
      'normalize',
      'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css',
   );
   wp_enqueue_style(
      'style',
      get_template_directory_uri()
         . '/style.css',
      array('normalize'),
      '1.0',
      'all'
   );
}

function theme_add_google_fonts()
{
   wp_enqueue_style(
      'font',
      'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap',
      array(),
      null
   );
}


add_action('wp_enqueue_scripts', 'theme_add_google_fonts');
add_action('wp_enqueue_scripts', 'theme_register_styles');
add_action('after_setup_theme', 'theme_support');

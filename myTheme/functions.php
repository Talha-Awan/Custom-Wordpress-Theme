<?php

include('customizer.php');

function load_stylesheets() {
      wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css');
      wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
      wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
      wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css');
      wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/assets/vendor/ionicons/css/ionicons.min.css');
      wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css');
      wp_enqueue_style( 'venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css');
      wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
}
add_action('wp_enqueue_scripts' , 'load_stylesheets');

function load_scripts() {
      // wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/vendor/jquery.min.js', array(), 5.4, true);
      // wp_enqueue_script('bootstrap-bundle-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 5.4, true);
      // wp_enqueue_script('jquery-easing-script', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), 5.4, true);
      // wp_enqueue_script('validate-script', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), 5.4, true);
      // wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array(), 5.4, true);
      // wp_enqueue_script('venobox-script', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), 5.4, true);
      // wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), 5.4, true);
      // wp_enqueue_script('jquery-sticky-script', get_template_directory_uri() . '/assets/vendor/jquery-sticky/jquery.sticky.js', array(), 5.4, true);
      // wp_enqueue_script('superfish-script', get_template_directory_uri() . '/assets/vendor/superfish/superfish.min.js', array(), 5.4, true);
      // wp_enqueue_script('hoverIntent-script', get_template_directory_uri() . '/assets/vendor/hoverIntent/hoverIntent.js', array(), 5.4, true);
      // wp_enqueue_script('pkgd-script', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), 5.4, true);
      // wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), 5.4, true);
}
add_action('wp_enqueue_scripts' , 'load_scripts');

//post thumbnail
// add_theme_support('post-thumbnails');

//Add Custom Logo
add_theme_support('custom-logo');

//Add Custom Header
add_theme_support('custom-header');

function register_menu() {
      register_nav_menus(
            array(
                  'primary-menu' => 'Primary Menu',
                  'footer-menu' => 'Footer Menu'
            )
      );
}
add_action( 'init', 'register_menu' );

// function selected_class($classes, $item) {
//       if(in_array('menu-item-26', $classes)) {
//             $classes[] = 'menu-active';
//       }
//       return $classes;
// }
// add_filter('nav_menu_css_class','selected_class', 10, 2);

// function custom_menu_links( $items, $args ) {
//       $items .= '
//             <li><a href="#about">About Us</a></li>
//             <li><a href="#services">Services</a></li>
//             <li><a href="#portfolio">Portfolio</a></li>
//             <li><a href="#team">Team</a></li>
//             <li class="menu-has-children"><a href="">Drop Down</a>
//                   <ul>
//                         <li><a href="#">Drop Down 1</a></li>
//                         <li><a href="#">Drop Down 3</a></li>
//                         <li><a href="#">Drop Down 4</a></li>
//                         <li><a href="#">Drop Down 5</a></li>
//                   </ul>
//             </li>
//             <li><a href="#contact">Contact</a></li>';
//       return $items;
// }
// add_filter( 'wp_nav_menu_items', 'custom_menu_links', 10, 2);
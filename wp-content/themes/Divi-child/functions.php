<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION


// How to Change the WooCommerce "Related products" text

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Možda Vam se dopadne: ', $source);
     }
     return $new_text;
}


// linkovano ime autora
add_action('woocommerce_after_add_to_cart_form', 'dodaj_autora');

function dodaj_autora ()
{
  echo do_shortcode('[acf field="ime"]');
 }
 

//promeni tekst na cart page
add_filter('gettext', 'promeni_cenu', 10, 3);

function promeni_cenu($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && is_cart ()) {
         $new_text = esc_html__('Proizvod: ', $source);
     }
     return $new_text;
} 
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
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter( 'astra_single_post_navigation_enabled', '__return_false' );


// How to Change the WooCommerce "You may also like" text

add_filter('gettext', 'change_ymal');

function change_ymal($translated)
{
     $translated = str_ireplace('You may also like', 'Pogledajte još', $translated );
     return $translated;
}

// How to Change the WooCommerce "Add to cart" text

add_filter('gettext', 'change_addtc');

function change_addtc($translated)
{
     $translated = str_ireplace('Add to cart', 'Dodaj u korpu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Choose an option" text

add_filter('gettext', 'change_chooseanopt');

function change_chooseanopt($translated)
{
     $translated = str_ireplace('Choose an option', 'Odaberite namenu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Clear" text

add_filter('gettext', 'change_clear');

function change_clear($translated)
{
     $translated = str_ireplace('Clear', 'Poništi', $translated );
     return $translated;
}

// How to Change the WooCommerce "Select options" text

add_filter('gettext', 'change_selectopt');

function change_selectopt($translated)
{
     $translated = str_ireplace('Select options', 'Dodaj u korpu', $translated );
     return $translated;
}

// How to Change the WooCommerce "рсд" text

add_filter('gettext', 'change_рсд');

function change_рсд($translated)
{
     $translated = str_ireplace('рсд', 'rsd', $translated );
     return $translated;
}

// How to Change the WooCommerce "View cart" text

add_filter('gettext', 'change_viewc');

function change_viewc($translated)
{
     $translated = str_ireplace('View cart', 'Pogledajte korpu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Has been added to your cart" text

add_filter('gettext', 'change_hasaddcart');

function change_hasaddcart($translated)
{
     $translated = str_ireplace('has been added to your cart', 'dodato u korpu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Have been added to your cart" text

add_filter('gettext', 'change_haveaddcart');

function change_haveaddcart($translated)
{
     $translated = str_ireplace('have been added to your cart', 'dodato u korpu', $translated );
     return $translated;
} 

// How to Change the WooCommerce "Product" text

add_filter('gettext', 'change_product');

function change_product($translated)
{
     $translated = str_ireplace('Product', 'Proizvod', $translated );
     return $translated;
}

// How to Change the WooCommerce "Price" text

add_filter('gettext', 'change_price');

function change_price($translated)
{
     $translated = str_ireplace('Price', 'Cena', $translated );
     return $translated;
}

// How to Change the WooCommerce "Quantity" text

add_filter('gettext', 'change_quantity');

function change_quantity($translated)
{
     $translated = str_ireplace('Quantity', 'Količina', $translated );
     return $translated;
}

// How to Change the WooCommerce "Subtotal" text

add_filter('gettext', 'change_subtotal');

function change_subtotal($translated)
{
     $translated = str_ireplace('Subtotal', 'Ukupno', $translated );
     return $translated;
}

// How to Change the WooCommerce "Apply coupon" text

add_filter('gettext', 'change_appcoupon');

function change_appcoupon($translated)
{
     $translated = str_ireplace('Apply coupon', 'Primeni kupon', $translated );
     return $translated;
}

// How to Change the WooCommerce "Update cart" text

add_filter('gettext', 'change_updatec');

function change_updatec($translated)
{
     $translated = str_ireplace('Update cart', 'Osveži korpu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Cart totals" text

add_filter('gettext', 'change_carttotals');

function change_carttotals($translated)
{
     $translated = str_ireplace('Cart totals', 'Pregled korpe:', $translated );
     return $translated;
}



// How to Change the WooCommerce "Free Shipping" text

add_filter('gettext', 'change_freeshipping');

function change_freeshipping($translated)
{
     $translated = str_ireplace('Free shipping', ' Besplatna dostava', $translated );
     return $translated;
}

// How to Change the WooCommerce "Shipping Options..." text

add_filter('gettext', 'change_shippingoptions');

function change_shippingoptions($translated)
{
     $translated = str_ireplace('Shipping options will be updated during checkout.', 'Opcije dostave će biti ažurirane tokom provere korpe.', $translated );
     return $translated;
}

// How to Change the WooCommerce "Calculate Shipping" text

add_filter('gettext', 'change_calcshipping');

function change_calcshipping($translated)
{
     $translated = str_ireplace('Calculate Shipping', 'Izračunaj troškove dostave', $translated );
     return $translated;
}

// How to Change the WooCommerce "Total" text

add_filter('gettext', 'change_total');

function change_total($translated)
{
     $translated = str_ireplace('Total', 'Za uplatu', $translated );
     return $translated;
}

// How to Change the WooCommerce "Proceed to checkout" text

add_filter('gettext', 'change_proctocheck');

function change_proctocheck($translated)
{
     $translated = str_ireplace('Proceed to checkout', 'Nastavi na proveru', $translated );
     return $translated;
}

// How to Change the WooCommerce "Billing details" text

add_filter('gettext', 'change_billdetails');

function change_billdetails($translated)
{
     $translated = str_ireplace('Billing details', 'Detalji porudžbine', $translated );
     return $translated;
}

// How to Change the WooCommerce "Billing details  all the fields" text

add_filter('gettext', 'change_billdetailsname');

function change_billdetailsname($translated)
{
     $translated = str_ireplace('First name', 'Ime', $translated );
     return $translated;
}

add_filter('gettext', 'change_billdetailslastname');

function change_billdetailslastname($translated)
{
     $translated = str_ireplace('Last name', 'Prezime', $translated );
     return $translated;
}

add_filter('gettext', 'change_billcompanyname');

function change_billcompanyname($translated)
{
     $translated = str_ireplace('Company name', 'Naziv firme', $translated );
     return $translated;
}

add_filter('gettext', 'change_billoptional');

function change_billoptional($translated)
{
     $translated = str_ireplace('optional', 'opciono', $translated );
     return $translated;
}

add_filter('gettext', 'change_billcountry');

function change_billcountry($translated)
{
     $translated = str_ireplace('Country', 'Država', $translated );
     return $translated;
}

add_filter('gettext', 'change_billsaddress');

function change_billsaddress($translated)
{
     $translated = str_ireplace('Street address', 'Adresa', $translated );
     return $translated;
}

add_filter('gettext', 'change_billserbia');

function change_billserbia($translated)
{
     $translated = str_ireplace('Serbia', 'Srbija', $translated );
     return $translated;
}

add_filter('gettext', 'change_billhnsn');

function change_billhnsn($translated)
{
     $translated = str_ireplace('House number and street name', 'Ulica i broj', $translated );
     return $translated;
}

add_filter('gettext', 'change_billtown');

function change_billtown($translated)
{
     $translated = str_ireplace('Town', 'Opština', $translated );
     return $translated;
}

add_filter('gettext', 'change_billcity');

function change_billcity($translated)
{
     $translated = str_ireplace('City', 'Grad', $translated );
     return $translated;
}

add_filter('gettext', 'change_billdistrct');

function change_billdistrct($translated)
{
     $translated = str_ireplace('District', 'Okrug', $translated );
     return $translated;
}

add_filter('gettext', 'change_billpostcode');

function change_billpostcode($translated)
{
     $translated = str_ireplace('Postcode', 'Poštanski broj', $translated );
     return $translated;
}

add_filter('gettext', 'change_billphone');

function change_billphone($translated)
{
     $translated = str_ireplace('Phone', 'Telefon', $translated );
     return $translated;
}

add_filter('gettext', 'change_billemail');

function change_billemail($translated)
{
     $translated = str_ireplace('Email address', 'Email adresa', $translated );
     return $translated;
}

add_filter('gettext', 'change_billshiptoa');

function change_billshiptoa($translated)
{
     $translated = str_ireplace('Ship to a different address', 'Poslati na drugu adresu', $translated );
     return $translated;
}

add_filter('gettext', 'change_billordernotes');

function change_billordernotes($translated)
{
     $translated = str_ireplace('Order notes', 'Beleške u vezi sa porudžbinom', $translated );
     return $translated;
}

add_filter('gettext', 'change_billordernotesplaceholder');

function change_billordernotesplaceholder($translated)
{
     $translated = str_ireplace('Notes about your order,', 'Beleške u vezi sa porudžbinom, npr specijalni zahtevi za isporuku', $translated );
     return $translated;
}

add_filter('gettext', 'change_billordernotesplaceholder1');

function change_billordernotesplaceholder1($translated)
{
     $translated = str_ireplace('e.g. special notes for delivery', '', $translated );
     return $translated;
}

add_filter('gettext', 'change_yourorder');

function change_yourorder($translated)
{
     $translated = str_ireplace('Your order', 'Vaša porudžbina', $translated );
     return $translated;
}

add_filter('gettext', 'change_sorry');

function change_sorry($translated)
{
     $translated = str_ireplace('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'Žao nam je, izgleda da nema dostupnih modela za plaćanje u Vašoj zemlji. Molimo Vas da nas kontaktirate ukoliko Vam je potrebna pomoć ili želite da napravite drugačiji dogovor.', $translated );
     return $translated;
}

add_filter('gettext', 'change_placeorder');

function change_placeorder($translated)
{
     $translated = str_ireplace('Place order', 'Pošalji porudžbinu', $translated );
     return $translated;
}

add_filter('gettext', 'change_billing');

function change_billing($translated)
{
     $translated = str_ireplace('Billing', 'Porudžbina', $translated );
     return $translated;
}

add_filter('gettext', 'change_required');

function change_required($translated)
{
     $translated = str_ireplace('Is a required field', 'je obavezno polje', $translated );
     return $translated;
}

add_filter('gettext', 'change_paymethod');

function change_paymethod($translated)
{
     $translated = str_ireplace('Invalid payment method', 'Način plaćanja nije validan', $translated );
     return $translated;
}

add_filter('gettext', 'change_wishlist');

function change_wishlist($translated)
{
     $translated = str_ireplace('The Wish list is empty', 'Vaša lista želja je prazna', $translated );
     return $translated;
}

add_filter('gettext', 'change_share');

function change_share($translated)
{
     $translated = str_ireplace('Share', 'Podeli', $translated );
     return $translated;
}

add_filter('gettext', 'change_thumbnail');

function change_thumbnail($translated)
{
     $translated = str_ireplace('Thumbnail', 'Slika', $translated );
     return $translated;
}

add_filter('gettext', 'change_title');

function change_title($translated)
{
     $translated = str_ireplace('Title', 'Naslov', $translated );
     return $translated;
}

add_filter('gettext', 'change_remove');

function change_remove($translated)
{
     $translated = str_ireplace('Remove', 'Ukloni', $translated );
     return $translated;
}

add_filter('gettext', 'change_succadded');

function change_succadded($translated)
{
     $translated = str_ireplace('was successfully added to wish list', ' - uspešno dodato u listu želja', $translated );
     return $translated;
}

add_filter('gettext', 'change_seewish');

function change_seewish($translated)
{
     $translated = str_ireplace('See your wish list', ' Pogledajte svoju listu želja', $translated );
     return $translated;
}

add_filter('gettext', 'change_removewish');

function change_removewish($translated)
{
     $translated = str_ireplace('Remove from wish list', ' Uklonite sa liste želja', $translated );
     return $translated;
}

add_filter('gettext', 'change_succremovewish');

function change_succremovewish($translated)
{
     $translated = str_ireplace('was successfully Uklonid from wish list', ' Uspešno uklonjeno sa liste želja', $translated );
     return $translated;
}

add_filter('gettext', 'change_undo');

function change_undo($translated)
{
     $translated = str_ireplace('Undo', ' Poništi', $translated );
     return $translated;
}

add_filter('gettext', 'change_emptycart');

function change_emptycart($translated)
{
     $translated = str_ireplace('Your cart is currently empty', ' Vaša korpa je trenutno prazna', $translated );
     return $translated;
}

add_filter('gettext', 'change_returntoshop');

function change_returntoshop($translated)
{
     $translated = str_ireplace('Return to shop', ' Vrati se u prodavnicu', $translated );
     return $translated;
}

add_filter('gettext', 'change_noupsell');

function change_noupsell($translated)
{
     $translated = str_ireplace('No upsell Proizvods are available', 'Nema sličnih proizvoda', $translated );
     return $translated;
}

// How to Change the WooCommerce "Shipping" text

add_filter('gettext', 'change_shipping');

function change_shipping($translated)
{
     $translated = str_ireplace('Shipping', 'Dostava', $translated );
     return $translated;
}


























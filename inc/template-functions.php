<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package awakening_hosting
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function awakening_hosting_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'awakening_hosting_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function awakening_hosting_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'awakening_hosting_pingback_header' );

function get_price_by_currency($code, $price){
	$currency_exchange_rate = 1;
	$total_number = apply_filters( 'booster_option', 2, get_option( 'wcj_multicurrency_total_number', 2 ) );
	for ( $i = 1; $i <= $total_number; $i++ ) {
		if ( $code === get_option( 'wcj_multicurrency_currency_' . $i ) ) {
			$currency_exchange_rate = get_option( 'wcj_multicurrency_exchange_rate_' . $i );
			break;
		}
	}
	return $price * $currency_exchange_rate;
}

add_filter('woo_price_calculator_calculate_price', 'custom_awspc_filter_calculate_price', 10, 2);
function custom_awspc_filter_calculate_price($price, $params){
    if ((isset($_GET['action']) && $_GET['action'] == 'awspricecalculator_ajax_callback') || is_product() || is_home() || is_front_page() || is_page() || is_archive()) {
        $session_value = wcj_session_get('wcj-currency');
        if ($session_value == null) {
            if(isset($_POST["wcj-currency"]))
                $code = $_POST["wcj-currency"];

        } else {
            $code = $session_value;
        }
        return get_price_by_currency($code, $price);
    }
    return $price;
}

//add_filter( 'woocommerce_cart_item_price', 'awakening_hosting_cart_item_price', 9999, 3 );
function awakening_hosting_cart_item_price( $price, $product, $cart_key ) {
    $nprice  = explode( 'woocommerce-Price-currencySymbol', $price );
    $nprice2 = explode( '</span>', $nprice[1] );

    $nraw_price = intval( str_replace( ',', '', $nprice2[1] ) );


    $code = wcj_session_get( 'wcj-currency' );

    $nraw_price = get_price_by_currency($code, $nraw_price);

    $args = array();
    $args = apply_filters(
        'wc_price_args', wp_parse_args(
            $args, array(
                'ex_tax_label'       => false,
                'currency'           => '',
                'decimal_separator'  => wc_get_price_decimal_separator(),
                'thousand_separator' => wc_get_price_thousand_separator(),
                'decimals'           => wc_get_price_decimals(),
                'price_format'       => get_woocommerce_price_format(),
            )
        )
    );

    $nraw_price = number_format( $nraw_price, $args['decimals'], $args['decimal_separator'], $args['thousand_separator'] );

    $nprice2[1]= $nraw_price;
    $nprice[1] = join( '</span>', $nprice2 );

    return join('woocommerce-Price-currencySymbol', $nprice) ;

}

add_action( 'wp_footer', 'my_footer_scripts' );
function my_footer_scripts(){
    ?>
    <script>
        jQuery(window).load(function () {
            if($('#wpsc_tickets_container').length > 0){
                $('#wpsc_tickets_container').removeAttr('style');
            }
            setTimeout(function () {
                if($('#frm_wpsc_sign_in').length > 0){
                    $('#frm_wpsc_sign_in #wpsc_sign_in_btn').removeAttr('style');
                }
                if($('#wpsc_tickets_container .row.wpsc_tl_action_bar').length > 0) {
                    $('#wpsc_tickets_container .row.wpsc_tl_action_bar').removeAttr('style');
                }
                if($('.wpsc_ticket_list_container th').length > 0) {
                    $('.wpsc_ticket_list_container th').removeAttr('style');
                }
                if($('.row.wpsc_tl_action_bar #wpsc_login_link').length > 0) {
                    $('.row.wpsc_tl_action_bar #wpsc_login_link').removeAttr('style');
                }
                if($('.row.wpsc_tl_action_bar #wpsc_load_list_new_ticket_btn').length > 0) {
                    $('.row.wpsc_tl_action_bar #wpsc_load_list_new_ticket_btn').removeAttr('style');
                }
            },1000);
        });
    </script>
    <?php
}
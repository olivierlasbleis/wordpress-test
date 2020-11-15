<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;
$labels =  $sales_html ='';
$labels = '';
$labels_sold_out = '';
$featured = false;
$lusion_new_lable_day = Lusion::setting('shop_archive_new_days');
$postdate = get_the_date( 'F d, Y g:i a', $post->ID );
$today = date("F j, Y, g:i a"); 
$old_date = (( 60 * 60 * 24 ) * $lusion_new_lable_day);
$postdatestamp  = strtotime( $postdate) + $old_date;
$postdatestamp_today  = strtotime( $today ) ; 
if ( ! $product->managing_stock() && ! $product->is_in_stock() ){
    $sold_out_html = '<span class="label-product sold-out"><span>'. esc_html__('Sold out', 'lusion') .'</span></span>';
    echo  wp_kses( $sold_out_html ,lusion_allow_html() );
} 
if (Lusion::setting('percentage_lable')) {
	$percentage = '';
    if ($product->is_on_sale()) {
        if ( $product->is_type( 'simple' ) ) {
            $regular_price = (float) $product->get_regular_price();
            $sale_price    = (float) $product->get_sale_price();

            $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
        } elseif ( $product->is_type( 'variable' ) ) {
            $percentages = array();

            // Get all variation prices
            $prices = $product->get_variation_prices();

            // Loop through variation prices
            foreach( $prices['price'] as $key => $price ){
                // Only on sale variations
                if( $prices['regular_price'][$key] !== $price ){
                    // Calculate and set in the array the percentage for each variation on sale
                    $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
                }
            }
            // We keep the highest value
            $percentage = max($percentages) . '%';
        }
        $sales_html = "<div class='sale_perc'>-" . $percentage . "</div>";
        
        $labels .= $sales_html;
    }
}    
if (Lusion::setting('hot_lable')) {
    $featured = $product->is_featured();
    if ($featured) {
        $hot_html = '<span class="label-product on-hot"><span>'. esc_html__('Hot', 'lusion') .'</span></span>';
        $labels .= $hot_html;
    }
}
if (Lusion::setting('sale_lable')) {
    if ($product->is_on_sale()) {
        $sales_html = apply_filters('woocommerce_sale_flash', '<span class="label-product on-sale"><span>'.esc_html__( 'Sale ', 'lusion' ).'</span></span>', $post, $product);
        $labels .= $sales_html;
    }
}
if (Lusion::setting('new_lable')){
    if ( $postdatestamp > $postdatestamp_today ) { // If the product was published within the newness time frame display the new badge
        $new_html = '<span class="label-product new"><span>' . esc_html__( 'New', 'lusion' ) . '</span></span>';
        $labels .= $new_html;
    }
}
$label_class= '';
if($featured){
    $label_class = "hot-label";
}else if($product->is_on_sale() && !$featured){
    $label_class = "sale-label";
}else if ( $postdatestamp > $postdatestamp_today ){
    $label_class = "new-label";
}
else if ($product->is_on_sale() && $postdatestamp > $postdatestamp_today){
    $label_class = "sale-label";
}
else if ($featured && $postdatestamp > $postdatestamp_today){
    $label_class = "hot-label";
}
else if ($product->is_on_sale() && $featured){
    $label_class = "hot-label";
}
else if ($product->is_on_sale() && $featured && $postdatestamp > $postdatestamp_today){
    $label_class = "hot-label";
}
else{
    $label_class = "";
}
if(Lusion::setting('sale_lable') && $product->is_on_sale() || $featured || $postdatestamp > $postdatestamp_today){
    echo wp_kses( $labels ,lusion_allow_html());
}

/**
 * @snippet       Add Download @ My Account Page
 * @author        Khlaid Almallahi
 * @testedwith    WooCommerce 3.8
 */
 
add_filter( 'woocommerce_customer_get_downloadable_products', 'kotsh_add_custom_default_download', 9999, 1 );
 
function kotsh_add_custom_default_download( $downloads ) {
   $downloads[] = array(
      'product_name' => 'Description',
      'download_name' => 'Button Label',
      'download_url' => '/wp-content/uploads/filename.txt',
   );
   return $downloads;
}

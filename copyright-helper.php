<?php
/**
 * Plugin Name: Copyright Helper
 * Plugin URI: https://www.couponduos.com
 * Description: This plugin will display a line of copyright information at the bottom of the article body.
 * Author: couponduos
 * Version: 1.0.0
 * Author URI: https://www.couponduos.com
 */
/*
Plugin Name: Copyright Helper
Plugin URI: https://www.couponduos.com
Description: This plugin will display a line of copyright information at the bottom of the article body.
Author: couponduos
Version: 1.0.0
Author URI: https://www.couponduos.com
*/

add_filter( 'the_content',  'couponduos_copyright_helper_display' );

function couponduos_copyright_helper_display(  ) {
    if( is_home() )
        $couponduos_copyright_helper_content = "<p style='color:gray;text-align: center;'>All articles on this site are original, please indicate the source for reprinting. </p>";

    return $couponduos_copyright_helper_content;
}
?>

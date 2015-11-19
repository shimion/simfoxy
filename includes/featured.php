<?php
	$featured_slider_class = '';
	if ( 'on' == et_get_option( 'foxy_slider_auto', 'false' ) ) $featured_slider_class = ' et_slider_auto et_slider_speed_' . et_get_option( 'foxy_slider_autospeed', '7000' );
?>
<div id="featured"<?php if ( '' != $featured_slider_class ) printf( ' class="%s"', esc_attr( $featured_slider_class ) ); ?>>
	
    <?php if(function_exists("airslider")) airslider("home"); ?>
     <!-- #slides -->
</div> <!-- #featured -->
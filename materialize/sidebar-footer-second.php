<?php
/**
 *
 *  The template for the sooter second sidebar containing the widgets
 *
 *  @package WordPress
 *  @subpackage Materialize
 *  @since Materialize 1.0
 */

	// footer second sidebar
    if ( dynamic_sidebar( 'footer-second' ) ){
        // if not empty
    }

    /**
     *
     *  display default content if is enabled default content option
     *  and if is empty sidebar content.
     *
     *  Admin Dashboard / Appearance / Customize / Addtitional
     *  option "Default Content" 
     */

    else if( (bool)get_theme_mod( 'mythemes-default-content', true ) ){

        // text widget
        echo '<div class="widget widget_text">';
        echo '<h5>' . __( 'Write For Us' , 'materialize' ) . '</h5>';
        echo '<div class="textwidget">' . sprintf( __( 'Post adds and find writers to %s add to your site.' , 'materialize' ) , '<br/>' , '<br/>' ) . '</div>';
        echo '</div>';
    }
?>
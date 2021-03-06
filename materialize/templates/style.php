<?php
/**
 *
 *  The template part for displaying custom css
 *  This custom css is generated from theme options
 *
 *  @package WordPress
 *  @subpackage Materialize
 *  @since Materialize 1.0
 */

    $bg_color       = esc_attr( '#' . get_background_color() );
    $hd_bkg_color   = esc_attr( get_theme_mod( 'header-background-color', '#ffffff' ) );
    $bkg            = esc_url( get_theme_mod( 'background_image' ) );
?>

<style type="text/css">

    /* header color */
    body{
        background-color: <?php echo esc_attr( $hd_bkg_color ); ?>;
    }

    /* background image */
    body > div.content{
        <?php if( !empty( $bkg ) ){ ?>
            background-image: url(<?php echo $bkg; ?>);
            background-repeat: <?php echo esc_attr( get_theme_mod( 'background_repeat' , 'repeat' ) ); ?>;
            background-position: <?php echo esc_attr( get_theme_mod( 'background_position_x' , 'center' ) ); ?>;
            background-attachment: <?php echo esc_attr( get_theme_mod( 'background_attachment' , 'scroll' ) ); ?>;
        <?php } ?>
    }

    /* breadcrumbs space */ 
    div.mythemes-page-header{
        padding-top: <?php echo absint( get_theme_mod( 'mythemes-breadcrumbs-space', 60 ) ); ?>px;
        padding-bottom: <?php echo absint( get_theme_mod( 'mythemes-breadcrumbs-space', 60 ) ); ?>px;
    }
</style>

<!-- colors options / background color -->
<style type="text/css" id="mythemes-background-color">
    body > div.content{
        background-color: <?php echo $bg_color; ?>;
    }
</style>

<!-- header options -->
<!-- header content -->
<!-- header content headline color -->
<style type="text/css" id="mythemes-header-headline-color" media="all">
    div.mythemes-header a.header-headline{
        color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-headline-color', '#e53932' ) ); ?>
    }
</style>

<!-- header content description color and description hover color -->
<style type="text/css" id="mythemes-header-description-color" media="all">

    <?php
        $hex    = esc_attr( get_theme_mod( 'mythemes-header-description-color', '#000000' ) );
        $rgba1  = 'rgba( ' . mythemes_tools::hex2rgb( $hex ) . ', 0.55 )';
        $rgba2  = 'rgba( ' . mythemes_tools::hex2rgb( $hex ) . ', 1.0 )';
    ?>

    div.mythemes-header a.header-description{
        color: <?php echo esc_attr( $rgba1 ); ?>;
    }
    div.mythemes-header a.header-description:hover{
        color: <?php echo esc_attr( $rgba2 ); ?>;
    }
</style>

<!-- header buttons -->
<!-- header first button -->
<!-- header first button text color -->
<style type="text/css" id="mythemes-header-btn-1-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-first-button{
        color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-1-color', '#ffffff' ) ); ?>;
    }
</style>

<!-- header first button background color -->
<style type="text/css" id="mythemes-header-btn-1-bkg-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-first-button{
        background-color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-1-bkg-color', '#4caf50' ) ); ?>;
    }
</style>

<!-- header first button background hover color -->
<style type="text/css" id="mythemes-header-btn-1-bkg-h-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-first-button:hover{
        background-color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-1-bkg-h-color', '#43a047' ) ); ?>;
    }
</style>

<!-- header second button -->
<!-- header second button text color -->
<style type="text/css" id="mythemes-header-btn-2-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-second-button{
        color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-2-color', '#ffffff' ) ); ?>;
    }
</style>

<!-- header second button background color -->
<style type="text/css" id="mythemes-header-btn-2-bkg-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-second-button{
        background-color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-2-bkg-color', '#e53935' ) ); ?>;
    }
</style>

<!-- header second button background hover color -->
<style type="text/css" id="mythemes-header-btn-2-bkg-h-color" media="all">
    div.mythemes-header.parallax-container div.mythemes-header-buttons a.btn-large.mythemes-second-button:hover{
        background-color: <?php echo esc_attr( get_theme_mod( 'mythemes-header-btn-2-bkg-h-color', '#d32f2f' ) ); ?>;
    }
</style>

<!-- others options -->
<!-- custom css -->
<style type="text/css" id="mythemes-custom-css">
    <?php echo wp_strip_all_tags(  get_theme_mod( 'mythemes-custom-css' ) ); ?>
</style>
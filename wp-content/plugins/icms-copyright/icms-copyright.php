<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: ICMS - Copyright
Description: Ajout des droits d'auteur en bas de page
Author: Filippa Simard
Version: 1.0
*/

function icms_cp_ajouter_styles_et_scripts() {
	wp_register_style( 'icms-cp-style', plugins_url( 'assets/css/main.css', __FILE__ ));
	wp_enqueue_style( 'icms-cp-style' );
}

add_action( 'wp_enqueue_scripts', 'icms_cp_ajouter_styles_et_scripts' );

function icms_cp_chargeCopyright(){
    ob_start();
    include(plugin_dir_path( __FILE__). 'templates/copyright.php');
    $template = ob_get_clean();
    echo $template;
}

add_action('wp_footer','icms_cp_chargeCopyright');
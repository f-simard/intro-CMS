<?php
/*
Plugin Name: Mon Premier Plugin
Description: Premier plugin fait dans le cours d'intro au CMS
Author: Filippa Simard
*/

//exit if accessed directly
//si abspath doesnt existe, veut dure que a pas passé par index.php
//chemin absolue du fichier racine
if(!defined('ABSPATH')){
	exit;
}

/**
 * defini les constantes de plugin
 */
function mpp_definir_const(){
	if(!defined('MPP_PARAMETRES')){
		global $wpdb;
		define('MPP_PARAMETRES', $wpdb->prefix . 'mpp_parametres');
	};
	if(!defined('MPP_INSCRIPTIONS')){
		global $wpdb;
		define('MPP_INSCRIPTIONS', $wpdb->prefix . 'mpp_inscriptions');
	}
}

add_action('plugin_loaded', 'mpp_definir_const', 0);


//cours 06
/**
 * definir constante globale
 */
/*function mpp_definir_const() {
	if ( !defined( 'MPP_TABLE_NAME' ) ) {
		global $wpdb;
		define( 'MPP_TABLE_NAME', $wpdb->prefix . 'mon_premier_plugin' );
	}
}
add_action( 'plugins_loaded', 'mpp_definir_const', 0 );*/

require_once(plugin_dir_path(__FILE__) . 'includes/mpp-activation.php');
//hook activation et desactivation doit rester dans main
register_activation_hook( __FILE__, 'mpp_activation' );


/**
 * Supprime la table wp_mon_premier_plugin à la base de données à la désactivation du plugin
 */
// utiliser le hook at desactivation en developpement seulement. sinon supprime table a chaque desactivation. ce n'est pas souhaite en prod si on "accroche" le bouton
function mpp_deactivation() {
	global $wpdb;
	 $table_parametres = $wpdb->prefix . 'mpp_parametres';
	 $wpdb->query( "DROP TABLE IF EXISTS $table_parametres" );

	 $table_isncriptions = $wpdb->prefix . 'mpp_inscriptions';
	 $wpdb->query( "DROP TABLE IF EXISTS $table_isncriptions" );
	};

register_deactivation_hook( __FILE__, 'mpp_deactivation' );

require_once(plugin_dir_path(__FILE__) . 'includes/mpp-panneau-admin.php');
require_once(plugin_dir_path(__FILE__) . 'includes/mpp-modal-client.php');

// /**
// * insert donnée du formulaire dans base de données 
// */
// function mpp_ajouter_data() {
// 	global $wpdb;
// 	$mpp_nom = sanitize_text_field( $_POST['nom'] );
// 	$wpdb->insert( MPP_TABLE_NAME,
// 					array('nom' => $mpp_nom), //nom de colonne dans la base de donnée
// 					array('%s') // $format (optionnel) => string
// 				);
// }


// /**
//  * afficher les données de la table dans la base de données
//  */
// function mpp_afficher_data() {
// 	global $wpdb;
// 	// Récupère les valeurs de la table wp_mon_premier_plugin
// 	$resultats = $wpdb->get_results( "SELECT * FROM " . MPP_TABLE_NAME );
// 	// S'il y a des résultats
// 	if ( $resultats ) {
// 		echo '<div style="padding:0 5vw;">
// 				<h2>Entrée(s)</h2>
// 				<ul>';
// 				foreach ( $resultats as $data ) {
// 					echo '<li><small>Nom : </small>' . esc_html( $data->nom ) . '</li>';
// 					}
// 				echo ' </ul>
// 				</div>';
// 		}
// }


function mpp_ajouter_styles_et_scripts() {
	wp_register_style( 'mpp-style', plugins_url( 'assets/css/main.css', __FILE__ ) );
	wp_enqueue_style( 'mpp-style' );
	wp_register_script( 'mpp-script', plugins_url( 'assets/js/main.js', __FILE__ ) );
	wp_enqueue_script( 'mpp-script' );
	}

add_action( 'wp_enqueue_scripts', 'mpp_ajouter_styles_et_scripts' );


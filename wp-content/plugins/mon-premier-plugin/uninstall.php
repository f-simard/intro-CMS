<?php
// Si uninstall.php n'est pas appelé par WordPress, die
// const WP_UNINSTALL_PLUGIN défini par WP
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
 die;
}
global $wpdb;
$table_parametres = $wpdb->prefix . 'mpp_parametres';
$wpdb->query( "DROP TABLE IF EXISTS $table_parametres" );

$table_inscription = $wpdb->prefix . 'mpp_inscriptions';
$wpdb->query( "DROP TABLE IF EXISTS $table_inscription" );
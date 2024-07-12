<?php

/**
 * Ajoute une table wp_mon_premier_plugin à la base de données à l'activation du plugin
 */
function mpp_activation() {
	// constante globale qui represente la connexion à la base de données
	// fourni par l'api wordpress
	global $wpdb;
	$table_parametres = $wpdb->prefix . 'mpp_parametres';
	$charset_collate = $wpdb->get_charset_collate();

	/**
	 * table de parametre de couleur de fond
	 */

	if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_parametres'" ) != $table_parametres ) {
		$sql = "CREATE TABLE $table_parametres (
			id int NOT NULL AUTO_INCREMENT,
			couleur_bg varchar(10) NOT NULL,
			PRIMARY KEY (id)
			) $charset_collate";

		//require once pour aller chercher dbDelta()
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		$wpdb->insert($table_parametres, array('couleur_bg' => '#ffffff'));
		}

		/**
		 * table d'inscription
		 */
		$table_inscriptions = $wpdb->prefix . 'mpp_inscriptions';
	
		if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_inscriptions'" ) != $table_inscriptions ) {
			$sql = "CREATE TABLE $table_inscriptions (
				id int NOT NULL AUTO_INCREMENT,
				courriel varchar(100) NOT NULL,
				PRIMARY KEY (id)
				) $charset_collate";
	
			//require once pour aller chercher dbDelta()
			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $sql );
	
			}
	}
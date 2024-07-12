
<?php
/**
 * ajoute panneau du plugin dans interface admin
 */
function mpp_ajouter_menu() {
	add_menu_page(
	'Mon Premier Plugin', // Page title
	'Mon Premier Plugin', // Menu title
	'manage_options', // Capability
	'mpp-menu-page', // Menu slug
	'mpp_ajouter_formulaire' // Callable function
	);
	}
add_action( 'admin_menu', 'mpp_ajouter_menu' );


/**
 * injecte un formulaire dans panneau admin du plugin
 */
function mpp_ajouter_formulaire() {

	//S'il y a un query string nom, ajoute sa valeur à la db
	if ( isset( $_POST['mpp-color-bg'] ) ) {
		mpp_update_data(); // Appelle la fonction pour l’appel à la db
		};

	require_once('mpp-get-couleur.php');
	$mpp_couleur_bg = mpp_get_couleur_bg();


	echo '<div style="padding:5vw;">
			<h2>' . get_admin_page_title() . '</h2>
			<form method="post" style="margin-top:25px;">
				<label for="mpp-color-bg">Couleur</label>
				<input type="color" id="mpp-color-bg" name="mpp-color-bg" value="' . esc_attr($mpp_couleur_bg) .'">
				<button type="submit" name="enregistrer">Enregistrer</button>
			</form>
		</div>';

	//mpp_afficher_data(); // Appelle la fonction qui affiche les datas
}

function mpp_update_data(){
	global $wpdb;

	$mpp_couleur_bg = sanitize_hex_color( $_POST['mpp-color-bg'] );
	
	//1 - nom de colonne dans bd
	$data = ['couleur_bg' => $mpp_couleur_bg];
	$where = ['id' => 1];

	$wpdb->update( MPP_PARAMETRES, $data, $where);
}

//panneau admin
// /**
//  * injecte un formulaire dans panneau admin du plugin
//  */
// function mpp_ajouter_formulaire() {
// 	echo '<div style="padding:5vw;">
// 			<h2>' . get_admin_page_title() . '</h2>
// 			<form method="post" style="margin-top:25px;">
// 				<label for="nom">Nom</label>
// 				<input type="text" id="nom" name="nom">
// 				<button type="submit" name="enregistrer">Enregistrer</button>
// 			</form>
// 		</div>';
// 	S'il y a un query string nom, ajoute sa valeur à la db
// 	if ( isset( $_POST['mpp-color-bg'] ) ) {
// 		//mpp_ajouter_data(); // Appelle la fonction pour l’appel à la db
// 		};
// 	//mpp_afficher_data(); // Appelle la fonction qui affiche les datas
// }

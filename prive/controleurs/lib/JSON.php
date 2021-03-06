<?php

/**
 * Permet de lire et écrire des fichiers JSON.
 *
 * @package  Vino
 * @author   Alexandre Pachot
 * @version  1.0
 */
class JSON
{
	/**
	 * @var string $_nom_fichier Nom du fichier JSON ainsi que de son répertoire.
	 */
	private $_nom_fichier;


	/**
	 * Initialisation des attributs.
	 * 
	 * @param string $nom_fichier Nom du fichier de log
	 * 
	 * @return void
	 */
	public function __construct($nom_fichier)
	{
		$this->_nom_fichier = RACINE . 'logs/' . $nom_fichier . '.json';
	}


	/**
	 * Écrit au format JSON dans un fichier.
	 * 
	 * @param mixed $objet Valeur que l’on veut sauvegarder.
	 * 
	 * @return void
	 */
	public function ecrire($objet)
	{
		$contenu_json =json_encode($objet);

		// Ouverture du fichier
		$fichier = fopen($this->_nom_fichier, 'w');

		// Écriture dans le fichier
		fwrite($fichier, $contenu_json);

		// Fermeture du fichier
		fclose($fichier);
	}


	/**
	 * Récupère un chaîne encodée JSON et la convertit en une variable PHP. 
	 * 
	 * @return mixed variable PHP ou false si le fichier n’existe pas
	 */
	public function lire()
	{
		// Vérification de l’existence du fichier.
		if ( ! file_exists($this->_nom_fichier) ) {
			return false;
		}

		// Ouverture du fichier
		$fichier = fopen($this->_nom_fichier, 'r');

		// Lecture fichier
		$json_source = fread($fichier,filesize($this->_nom_fichier));

		// Fermeture du fichier
		fclose($fichier);

		// Décode le JSON
		$json_data = json_decode($json_source);

		return $json_data;
	}
}

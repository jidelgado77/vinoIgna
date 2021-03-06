﻿<?php
/**
 * Permet la connexion à la base de données.
 * @package  Vino  
 * @author   Guillaume Harvey
 * @author   Alexandre Pachot
 * @version  1.0
 */
class BaseDeDonnees
{
	/**
	 * Connexion à la base de données
	 * 
	 * @param string $type_BD
	 * @param string $hote
	 * @param string $nom_BD
	 * @param string $jeu_de_caracteres
	 * @param string $utilisateur
	 * @param string $mot_de_passe
	 */
	public static function obtenirBD($type_BD, $hote, $nom_BD, $jeu_de_caracteres, $utilisateur, $mot_de_passe)
	{
		if($type_BD == 'mysql')
		{
			$connexion = new PDO("mysql:host=$hote;dbname=$nom_BD;charset=$jeu_de_caracteres", $utilisateur, $mot_de_passe);
		}
		else if($type_BD == 'oracle')
		{
			$connexion = new PDO("oci:host=$hote;dbname=$nom_BD;charset=$jeu_de_caracteres", $utilisateur, $mot_de_passe);		
		}
		else
		{
			trigger_error('Le type de BD spécifié n’est pas supporté.');
		}
		
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $connexion;
	}
}

<?php
/**
 * Classe prise en compte lors de la récupération du jeu de résultat PDO.
 * 
 * @package  Vino
 * @version  1.0
 */
class Classe_Bouteille
{
	public $id_bouteille;
	public $id_cellier;
	public $code_saq;
	public $prix;
	public $millesime;
	public $id_type;
	public $type;
	public $pays;
	public $format;
	public $nom;
	public $note;
	public $quantite;
	public $date_achat;
	public $boire_avant;
	
	public function __construct($id_bouteille = 0, $id_cellier = 0, $code_saq = '', $prix = 0, $millesime = 0, $id_type = 0, $type = 0, $pays ='', $format = '', $nom = '', $note = '', $quantite = 0, $date_achat = '', $boire_avant = '')
	{
		$this->id_bouteille = $id_bouteille;
		$this->id_cellier = $id_cellier;
		$this->code_saq = $code_saq;
		$this->prix = $prix;
		$this->millesime = $millesime;
		$this->id_type = $id_type;
		$this->type = $type;
		$this->pays = $pays;
		$this->format = $format;
		$this->nom = $nom;
		$this->note = $note;
		$this->quantite = $quantite;
		$this->date_achat = $date_achat;
		$this->boire_avant = $boire_avant;
	}
}

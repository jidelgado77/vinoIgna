<?php
/**
 * Classe prise en compte lors de la récupération du jeu de résultat PDO.
 * 
 * @package  Vino
 * @version  1.0
 */
class Classe_total
{
	public $total;

	public function __construct($total = 0)
	{
		$this->total = $total;
	}
}

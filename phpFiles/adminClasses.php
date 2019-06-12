<?php

// Balise HTML
class Balise
{
	private $_name;
	public $_contenu;
	private $_orphan;
	private $_listOfAttributs;
	private $_listOfBalises;

	private static $id = 0;
	private static $instanceList = array(); // liste des balises

	public function __construct($nameContenu, $contenu, $isorphan) {
		$this->_id = Balise::$id;
		Balise::$id ++;

		$this->_name = $nameContenu;
		$this->_contenu = $contenu; 
		$this->_orphan = ($isorphan || Balise::constructIsOrphan($nameContenu));
		$this->_listOfAttributs = array();
		$this->_listOfBalises = array();

		Balise::$instanceList[$this->_id] = $this;
	}
	// Renvoie la balise d'un certain id donné
	public static function getBaliseWithId(int $id)
	{
		if (isset(Balise::$instanceList[$id])) {
			return Balise::$instanceList[$id];
		}
		return null;
	}
	public static function getParentOf($baliseToSearch) {
		foreach (Balise::$instanceList as $balise) {
			if (in_array($baliseToSearch, $balise->_listOfBalises)) {
				return $balise;
			}
		}
		return null;
	}

	public static function constructIsOrphan($name) {
		if ( $name == "img" || $name == "br" || $name == "hr" || $name == "input") {
			return true;
		}
		return false;
	}
	public function isOrphan() {
		return $this->_orphan;
	}
	public function addAttribute($attribute) {
		$this->_listOfAttributs[ $attribute->getName() ] = $attribute;
	}

	public function addBalise($balise) {
		array_push($this->_listOfBalises, $balise);
	}
	public function removeBalise($baliseToSearch) {
		for ($i=0; $i < sizeof($this->_listOfBalises); $i++) { 
			if ($baliseToSearch->_id == $this->_listOfBalises[$i]->_id) {
				unset($this->_listOfBalises[$i]);
			}
		}
	}
	public function getName() {
		return $this->_name;
	}
	public function getId() {
		return $this->_id;
	}
	// Renvoie la balise au format HTML
	public function toString() {
		if ($this->_name == "php") {
			return $this->_contenu;
		}
		$str = "<".$this->_name;

		foreach ($this->_listOfAttributs as $attribute) {
			$str .= $attribute->toString();
		}
		// Si la balise est orpheline
		if ($this->_orphan) {
			$str .= "/>\n";
			return $str;
		}

		$str .= "> " . $this->_contenu ;
		foreach ($this->_listOfBalises as $balise) { // balise dans la balise
			$str .= $balise->toString()."\n";
		}

		$str .= "</" . $this->_name .">"; //fermeture
		return $str;
	}
	// Renvoie une balise input correspondante à la balise
	public function toForm() {
		if ($this->_name == "php") {
			return "";
		}

		$str = '';
		$lenOfStr = 0.85 *(strlen($this->_contenu)) + 5;
		if ($lenOfStr <= 50) {
			$lenOfStr = 50;
		}
		if ($lenOfStr >= 120) {
			$lenOfStr = 120;
		}

		// si c'est une img ou un a (une balise orphan intéressante)
		if ($this->_name == "img" || $this->_name == "a") {
			if ($this->_name == "img") {
				$attribute = $this->_listOfAttributs["src"];
			}
			else {
				$attribute = $this->_listOfAttributs["href"];

			}
			if (is_null($attribute)) {
				return "";
			}
			$str .= '<input class="generatedInput" name="'.$this->_id.'" size="'.$lenOfStr.'" value="'.$attribute->getValue().'">';
			return $str;
		}

		// si c'est une balise pas intéressante
		if ($this->_contenu == "" || $this->_name == "script") { 
			return "";
		}

		$str .= '<input class="generatedInput" name="'.$this->_id.'" size="'.$lenOfStr.'" value="'.$this->_contenu.'">';
		return $str;
	}
	// fonction qui modifie la balise selon les inputs et qui s'adapte au type de balise
	public function modifieByInput($change) {
		if ($this->_name == "img") {
			$this->_listOfAttributs["src"] = new Attribute($this->_listOfAttributs["src"]->getName(), $change);
			return;
		}
		if ($this->_name == "a") {
			$this->_listOfAttributs["href"] = new Attribute($this->_listOfAttributs["href"]->getName(), $change);
			return;
		}
		$this->_contenu = $change;

	}
}
// Attribut d'une balise HTML
class Attribute
{
	private $_name;
	private $_value;
	public function __construct($name, $value) {
		$this->_name = $name;
		$this->_value = $value; 
	}
	public function getName() {
		return $this->_name;
	}
	public function getValue() {
		return $this->_value;
	}
	public function toString() {
		return $str = " ".$this->_name."=\"".$this->_value."\"";
	}
}
?>
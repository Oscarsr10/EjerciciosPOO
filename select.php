<?php
class Element {
	private $name;
	private $value;
	private $label;
	
public function __construct() {
}
public function setName($name) {
	$this->name=$name;
}
public function getName() {
	return $this->name;
}
public function setValue($value) {
	$this->value=$value;
}
public function getValue() {
	return $this->value;
}
public function setLabel($label) {
	$this->label=$label;
}
public function getLabel() {
	return $this->label;
}
}
class Option extends Element {
public function __construct($value='', $label='') {
	parent::__construct();
	$this->setValue($value);
	$this->setLabel($label);
}
public function render() {
	echo "<option value=\"" . $this->getValue() . "\">" . 
	$this->getLabel() . "</option>\n";
}
}
class Select extends Element {

	protected $options;

	public function __construct() {
		parent::__construct();
		$this->options = array();
	}
	public function setOption($option) {
		$this->options[] = $option;
	}
	private function getOptions() {
		return (array)$this->options;
	}
	public function render() {
		echo $this->getLabel() . ": <br />\n";
		echo "<select name=\"" . $this->getName() . "\">\n";
			foreach ($this->getOptions() as $opt) {
		echo $opt->render();
		}
		echo "</select>";
	}
}
?>
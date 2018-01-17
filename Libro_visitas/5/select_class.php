<?php
 
class Element {
private $name;
private $value;
private $label;

// constructor
public function __construct() {
}
// method: set element 'name'
public function setName($name) {
$this->name = $name;
}
// method: get element 'name'
public function getName() {
return $this->name;
}
// method: set element value
public function setValue($value) {
$this->value = $value;
}
// method: get element value
public function getValue() {
return $this->value;
}
// method: set English-language element label
public function setLabel($label) {
$this->label = $label;
}
// method: get element label
public function getLabel() {
return $this->label;
}
}


// child class definition
class Select extends Element {
protected $options;
// constructor
public function __construct() {
parent::__construct();
$this->options = array();
}
// method: add an option to the list
public function setOption($option) {
$this->options[] = $option;
}
// method: return all options for the list as array
private function getOptions() {
return (array)$this->options;
}
// method: output HTML code for <select> element
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
<?php
// child class definition
class Option extends Element {
// constructor
public function __construct($value='', $label='') {
parent::__construct();
$this->setValue($value);
$this->setLabel($label);
}
// method: output HTML for <option> elements
public function render() {
echo "<option value=\"" . $this->getValue() . "\">" . $this->getLabel() .
"</option>\n";
}
}
?>
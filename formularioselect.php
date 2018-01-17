<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Listas de selección con objetos</title>
</head>
<body>
<?php
include "select.php";
if (!isset($_POST['submit'])) {
?>
<form method="post" action="formularioselect.php">
<?php
$dias = new Select();
$dias->setLabel('Dia');
$dias->setName('dia_sel');
foreach (range(1, 31) as $diasnumero) {
	$dias->setOption(new Option($diasnumero, $diasnumero));
}
$dias->render();
?>
</p>
<?php
$meses = new Select();
$meses->setLabel('Mes');
$meses->setName('mes_sel');
$meses->setOption(new Option('Enero', 'Enero'));
$meses->setOption(new Option('Febrero', 'Febrero'));
$meses->setOption(new Option('Marzo', 'Marzo'));
$meses->setOption(new Option('Abril', 'Abril'));
$meses->setOption(new Option('Mayo', 'Mayo'));
$meses->setOption(new Option('Junio', 'Junio'));
$meses->setOption(new Option('Julio', 'Julio'));
$meses->setOption(new Option('Agosto', 'Agosto'));
$meses->setOption(new Option('Septiembre', 'Septiembre'));
$meses->setOption(new Option('Octubre', 'Octubre'));
$meses->setOption(new Option('Noviembre', 'Noviembre'));
$meses->setOption(new Option('Diciembre', 'Diciembre'));
$meses->render();
?>
</p>
<?php
$anio = new Select();
$anio->setLabel('Anios');
$anio->setName('anios_sel');
foreach (range(1970,2050) as $anionumero) {
	$anio->setOption(new Option($anionumero, $anionumero));
}
$anio->render();
?>
</br>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
// si el formulario ha sido enviado procesar la entrada
} else {
echo "Procesar los datos";
var_dump($_POST);
}
?>
</body>
</html>